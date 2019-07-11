<?php
ob_start();
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
    $otpckq=  mysqli_query($conn, "select chamber_id from d_appointment_otp where tmp_session_id='$key' and otp='$otp' and record_status='A' and now()< otp_expr_on");
    if(mysqli_num_rows($otpckq)>0)
    {
        $chidr=  mysqli_fetch_array($otpckq);
        $chid=$chidr['chamber_id'];
        $insappq=  mysqli_query($conn, "INSERT INTO `d_chamber_appointment`
                (`slot_seq`,`patient_id`,`chamber_id`,`app_time_from`,`app_time_to`,`app_date`,
                `app_reporting_time`,`app_confirmed`,`app_completed`,`app_remarks`,`record_status`,`record_created_on`,`record_modified_on`)
                SELECT `slot_seq`,
                    `patient_id`,`chamber_id`,`app_time_from`,`app_time_to`,`app_date`,`app_reporting_time`,`app_confirmed`,
                    `app_completed`,`app_remarks`,`record_status`,`record_created_on`,`record_modified_on`
                FROM `tmp_chamber_appointment` where tmp_session_id='$key' and chamber_id='$chid' and record_status='A'");
        $updappq=  mysqli_query($conn, "update tmp_chamber_appointment set record_status='C' where tmp_session_id='$key' and chamber_id='$chid' and record_status='A'");
        
        $inspinfoq=  mysqli_query($conn, "INSERT INTO `d_patient_info`
                    (`patient_id`,`patient_name`,`patient_address`,`area_pin`,`mobile_number`,`record_created_by`,`record_status`,`record_created_on`,`record_modified_on`)
                    SELECT `patient_id`,`patient_name`,`patient_address`,`area_pin`,`mobile_number`,`record_created_by`,`record_status`,`record_created_on`,`record_modified_on`
                    FROM `tmp_patient_info` where tmp_session_id='$key' and record_status='A'");
        $updpinfoq=  mysqli_query($conn, "update tmp_patient_info set record_status='C' where tmp_session_id='$key' and record_status='A'");
        $updtotpq= mysqli_query($conn, "update d_appointment_otp set otp_verification_status='Y',record_status='V' where tmp_session_id='$key' and otp='$otp' and record_status='A' and now()< otp_expr_on");
        
        if($insappq && $inspinfoq && $updappq && $updpinfoq && $updtotpq)
        {$json['success']=true;
        session_start();
        unset($_SESSION['tmpappid']);
        unset($_SESSION['otp']);
        }
        else{$json['success']=FALSE;$json['err']='Something went Wrong';}
    }
    else{
        $json['success']=FALSE;$json['err']='OTP Varification Failed';
    }
}

echo json_encode($json);
ob_end_flush();