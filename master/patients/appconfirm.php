<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_POST['aid']))
{
    $id=  mysqli_real_escape_string($conn,$_POST['aid']);
    $rep=  mysqli_real_escape_string($conn,$_POST['repo']);
    $rem=  mysqli_real_escape_string($conn,$_POST['rema']);
    $json=array(
      'success'=>false,
      'err'=>''  
    );
    $acq=  mysqli_query($conn, "update d_chamber_appointment set app_reporting_time='$rep', app_remarks='$rem',app_confirmed='Y',record_modified_on=now() where id='$id' and record_status='A'");
    if($acq)
    {
        $json['success']=TRUE;
    }
    else
    {
        $json['success']=FALSE;
        $json['err']="Something Went wrong";
    }
    echo json_encode($json);
}
