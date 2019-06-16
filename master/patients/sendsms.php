<?php

error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../master/smssender.php';
include_once '../../config.php';
$json=array(
    'success'=>false,
    'err'=>''
);
if(isset($_POST['mob']))
{
    $msg=  mysqli_real_escape_string($conn,$_POST['msg']);
    $mob= mysqli_real_escape_string($conn,$_POST['mob']);
    $insmsgq=  mysqli_query($conn, "INSERT INTO `ihealthcare`.`d_sms_sent`
(`sms_body`,`mob_number`,`record_status`,`record_created_on`)
VALUES('$msg','$mob','A',now())");
    if (smssend($mob,$msg))
    {
        $json['success']=true;
        $json['err']="";
    }
    else
    {
        $json['success']=false;
        $json['err']="Something Went wrong";
    }
}

echo json_encode($json);
?>

