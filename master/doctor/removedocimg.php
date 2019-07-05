<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
$json= array(
    'success'=> false,
    'err'=>''
);

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $docid=mysqli_real_escape_string($conn,$_POST['docid']);
   $delimgq=  mysqli_query($conn, "update d_doctor_info set d_profile_image= null where doctor_code='$docid' and record_status='A'");
   if($delimgq)
   {
       $json['success']=true;
   }
   else
   {
       $json['success']=false;
       $json['err']="Something went wrong while deleting image";
       printf("Error: %s\n", mysqli_error($conn));
    exit();
   }
}

echo json_encode($json);