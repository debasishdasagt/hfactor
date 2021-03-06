<?php
ob_start();
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include '../../config.php';
include '../SMS/smshandler.php';
$json= array(
    'success'=> false,
    'err'=>'',
    'otpkey' => ''
);


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
    $otp="";
    if(!isset($_SESSION['otp']))
    {$_SESSION['otp']= "";
    $_SESSION['otp']=  getotp(6);
    $otp=$_SESSION['otp'];
    }
    
    else{
            if($_SESSION['otp']=="")
            {
                $_SESSION['otp']=  getotp(6);
            }
            $otp=$_SESSION['otp'];
        }
    
    $msg="OTP for Registration is $otp";
    $mob=  mysqli_real_escape_string($conn,$_POST['pmob']);
    
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $padd=mysqli_real_escape_string($conn,$_POST['paddress']);
    $ppin=mysqli_real_escape_string($conn,$_POST['ppin']);
    $pdob=mysqli_real_escape_string($conn,$_POST['pdob']);
    $otpsent=  "";
    $getotpstq=  mysqli_query($conn, "select id from d_new_patient_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and record_status='A'");
    if(mysqli_num_rows($getotpstq)==0)
    {
       
        $otpsent= sendsms($mob, $msg);
        $insotprec=  mysqli_query($conn,"INSERT INTO `d_new_patient_otp`
(`tmp_session_id`,`mobile_number`,`otp`,`otp_expr_on`,`sent_count`,`otp_sent_date`,`otp_msg_body`,`otp_verification_status`,
`record_status`,`record_created_on`) 
values('$tmpid','$mob','$otp','$et',1,'$dt','$msg','N','A',now())");

        
        $inspinfoq=true;
        if($pname != "")
        {
            $pidq=  mysqli_query($conn, "select get_patient_id() as pid");
            $pidr= mysqli_fetch_array($pidq);
            $pid=$pidr['pid'];
            
            $inspinfoq= mysqli_query($conn, "INSERT INTO `tmp_patient_info`(`tmp_session_id`, `patient_id`, `patient_name`, `patient_address`, `area_pin`,"
                . "`mobile_number`,`patient_dob`, `record_created_by`, `record_status`, `record_created_on`) "
                . "VALUES ('$tmpid','$pid','$pname','$padd','$ppin','$mob','$pdob','self','A',now())");}
                
        
        
        
        if($insotprec && $inspinfoq)
        {
            if($otpsent)
            {
                $json['success']=TRUE;
            }
            else
            {
                $json['success']=FALSE; $json['err']="Error occoured while sending OTP";
            }
            
            
        }
        else{$json['success']=FALSE; $json['err']="Something Went wrong while saving data";}
    }
else
{
    
    $getotpstatusq=  mysqli_query($conn,"select sent_count from d_new_patient_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and record_status='A'");
    $getotpstatusr=  mysqli_fetch_array($getotpstatusq);
    if($getotpstatusr['sent_count']<3)
    {
        $otpsent=  sendsms($mob, $msg);
        $count=$getotpstatusr['sent_count']+1;
        $otpcountupd=  mysqli_query($conn, "update d_new_patient_otp set sent_count='$count' where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and record_status='A'");
        if( $otpcountupd && $otpsent)
        {
            $json['success']=TRUE;
        }
        
        else{$json['success']=FALSE;$json['err']="Somthing went wrong while resending OTP";};
    }
    else{$json['success']=FALSE;$json['err']="Maximum Number of attempt has been acceded.";
    unset($_SESSION['otp']);
    };
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