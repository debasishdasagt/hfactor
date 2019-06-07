<?php

header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
$json= array(
    'success'=> false,
    'err'=>''
);

if(isset($_GET['otp']) && isset($_GET['key']))
{
    $otp= mysqli_real_escape_string($conn,$_GET['otp']);
    $key= mysqli_real_escape_string($conn,$_GET['key']);
    $otpckq=  mysqli_query($conn, "select chamber_id from d_appointment_otp where tmp_session_id='$key' and otp='$otp' and record_status='A'");
    if(mysqli_num_rows($otpckq)>0)
    {
        $json['success']=true;
    }
}

echo json_encode($json);