<?php

header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
$json=array(
  'success'=>false  
);

if(isset($_GET['m']))
{
    $mob=$_GET['m'];
    $pq=  mysqli_query($conn,"Select patient_id from d_patient_info where mobile_number='$mob' and record_status='A'");
    $pr= mysqli_fetch_array($pq);
    if(mysqli_num_rows($pq)>=1)
    {
        if(!isset($_SESSION))
{session_start();}
        $_SESSION['pid']=$pr['patient_id'];
        $_SESSION['pmob']=$mob;
        $json['success']=true;
    }
}

echo(json_encode($json));