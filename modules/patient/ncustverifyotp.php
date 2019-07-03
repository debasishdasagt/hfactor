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
    $otpckq=  mysqli_query($conn, "select mobile_number from d_new_patient_otp where tmp_session_id='$key' and otp='$otp' and record_status='A' and now()< otp_expr_on");
    if(mysqli_num_rows($otpckq)>0)
    {
        $inspinfoq=TRUE;
        $updpinfoq=TRUE;
        $otpckr=  mysqli_fetch_array($otpckq);
        $pmobile=$otpckr['mobile_number'];
        if($_GET['oldnew']=="new")
        {
        $inspinfoq=  mysqli_query($conn, "INSERT INTO `d_patient_info`
                    (`patient_id`,`patient_name`,`patient_address`,`mobile_number`,patient_dob,`record_created_by`,`record_status`,`record_created_on`,`record_modified_on`)
                    SELECT `patient_id`,`patient_name`,`patient_address`,`mobile_number`,`patient_dob`,`record_created_by`,`record_status`,`record_created_on`,`record_modified_on`
                    FROM `tmp_patient_info` where tmp_session_id='$key' and record_status='A'");
        
        $updpinfoq=  mysqli_query($conn, "update tmp_patient_info set record_status='C' where tmp_session_id='$key' and record_status='A'");
        }
        
        $updtotpq= mysqli_query($conn, "update d_new_patient_otp set otp_verification_status='Y',record_status='V' where tmp_session_id='$key' and otp='$otp' and record_status='A' and now()< otp_expr_on");
        
        if($inspinfoq && $updpinfoq && $updtotpq)
        {$json['success']=true;
        if(!isset($_SESSION))
{session_start();}
        unset($_SESSION['tmpappid']);
        $_SESSION['pmobile']=$pmobile;
        }
        else{$json['success']=FALSE;$json['err']='Something went Wrong';}
    }
    else{$json['success']=FALSE;$json['err']='OTP Verification Failed';}
}
echo json_encode($json);
ob_end_flush();