<?php
ob_start();
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
include_once '../SMS/smshandler.php';
$json= array(
    'success'=> false,
    'err'=>'',
    'otpkey' => ''
);

if(!isset($_SESSION))
{session_start();}
if(!isset($_SESSION['tmpappid']))
{
    $_SESSION['tmpappid']= getrandomstring(10);
}

if ($_SERVER['REQUEST_METHOD']=="POST" && $_POST['pmob'] != "")
{
    $tmpid=$_SESSION['tmpappid'];
    $json['otpkey']=$_SESSION['tmpappid'];
    $dt=date("Y-m-d");
    $ct=date("Y-m-d H:i:s");
    $et=date("Y-m-d H:i:s",strtotime($ct." +30 minutes"));
    $otp=  getotp(6);
    $msg="OTP for Appointment Booking is $otp";
    $mob=  mysqli_real_escape_string($conn,$_POST['pmob']);
    $chamberid=mysqli_real_escape_string($conn,$_POST['chamber']);
    $tim=  explode("-",mysqli_real_escape_string($conn,$_POST['chamber_time']));
    $appdat=mysqli_real_escape_string($conn,$_POST['appdate']);
    $pidq=  mysqli_query($conn, "select get_patient_id() as pid");
    $pidr= mysqli_fetch_array($pidq);
    $pid=$pidr['pid'];
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $padd=mysqli_real_escape_string($conn,$_POST['padd']);
    $otpsent=  "";
    
    
    $getotpstq=  mysqli_query($conn, "select id from d_appointment_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and chamber_id='$chamberid' and record_status='A'");
    if(mysqli_num_rows($getotpstq)==0)
    {
        $otpsent=  sendsms($mob, $msg);
        $insotprec=  mysqli_query($conn,"INSERT INTO `d_appointment_otp`
(`tmp_session_id`,`chamber_id`,`mobile_number`,`otp`,`otp_expr_on`,`sent_count`,`otp_sent_date`,`otp_msg_body`,`otp_verification_status`,
`record_status`,`record_created_on`) 
values('$tmpid','$chamberid','$mob','$otp','$et',1,'$dt','$msg','N','A',now())");
        
        
        $instmppinfoq= mysqli_query($conn, "INSERT INTO `tmp_patient_info`(`tmp_session_id`, `patient_id`, `patient_name`, `patient_address`, "
                . "`mobile_number`, `record_created_by`, `record_status`, `record_created_on`) "
                . "VALUES ('$tmpid','$pid','$pname','$padd','$mob','self','A',now())");
        
        $instmpappq=  mysqli_query($conn, "INSERT INTO `tmp_chamber_appointment`( `tmp_session_id`, `slot_seq`, `patient_id`, `chamber_id`, `app_time_from`, `app_time_to`,
                `app_date`, `app_reporting_time`, `app_confirmed`, `app_completed`, `app_remarks`, `record_status`, 
                `record_created_on`) 
                VALUES ('$tmpid',get_app_seq('$chamberid','$tim[0]','$tim[1]','$appdat'),'$pid','$chamberid','$tim[0]','$tim[1]','$appdat','00:00:00','','','','A',now())");
                
                
                
                if(!$instmpappq)
                {
                 printf("Error: %s\n", mysqli_error($conn));
    exit();
                }
                
                
                
        
        if($insotprec && $instmpappq && $instmppinfoq && $otpsent)
        {$json['success']=TRUE;}
        else{$json['success']=FALSE; $json['err']="Something Went wrong while saving data";}
    }
else
{
    $getotpstatusq=  mysqli_query($conn,"select sent_count from d_appointment_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and chamber_id='$chamberid' and record_status='A'");
    $getotpstatusr=  mysqli_fetch_array($getotpstatusq);
    if($getotpstatusr['sent_count']<3)
    {
        $otpsent=  sendsms($mob, $msg);
        $count=$getotpstatusr['sent_count']+1;
        $otpcountupd=  mysqli_query($conn, "update d_appointment_otp set sent_count='$count' where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and chamber_id='$chamberid' and record_status='A'");
        $json['success']=TRUE;
    }
    else{$json['success']=FALSE;$json['err']="Maximum Number of attempt has been acceded.";};
}
echo json_encode($json);
}




function getrandomstring($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 


function getotp($n) { 
    $characters = '123456789012345678901234567890'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

ob_end_flush();
?>
