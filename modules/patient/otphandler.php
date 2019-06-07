<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
$json= array(
    'success'=> false,
    'err'=>''
);

session_start();
if(!isset($_SESSION['tmpappid']))
{
    $_SESSION['tmpappid']= getrandomstring(10);
}

if ($_SERVER['REQUEST_METHOD']=="POST" && $_POST['pmob'] != "")
{
    $tmpid=$_SESSION['tmpappid'];
    $dt=date("Y-m-d");
    $ct=date("Y-m-d H:i:s");
    $et=date("Y-m-d H:i:s",strtotime($ct." +30 minutes"));
    $otp=  getotp(6);
    $msg="OTP for Appointment Booking is $otp";
    $mob=  mysqli_real_escape_string($conn,$_POST['pmob']);
    $chamberid=mysqli_real_escape_string($conn,$_POST['chamber']);
    $otpsent=  "";
    $getotpstq=  mysqli_query($conn, "select id from d_appointment_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and chamber_id='$chamberid' and record_status='A'");
    if(mysqli_num_rows($getotpstq)==0)
    {
        $otpsent=  otpsend($otp);
        $insotprec=  mysqli_query($conn,"INSERT INTO `d_appointment_otp`
(`tmp_session_id`,`chamber_id`,`mobile_number`,`otp`,`otp_expr_on`,`sent_count`,`otp_sent_date`,`otp_msg_body`,`otp_verification_status`,
`record_status`,`record_created_on`) 
values('$tmpid','$chamberid','$mob','$otp','$et',1,'$dt','$msg','N','A',now())");
        $json['success']=TRUE;
    }
else
{
    $getotpstatusq=  mysqli_query($conn,"select sent_count from d_appointment_otp where tmp_session_id='$tmpid' and otp_sent_date='$dt' and mobile_number='$mob' and chamber_id='$chamberid' and record_status='A'");
    $getotpstatusr=  mysqli_fetch_array($getotpstatusq);
    if($getotpstatusr['sent_count']<3)
    {
        $otpsent=  otpsend($otp);
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


function otpsend($otp)
{
    
}
