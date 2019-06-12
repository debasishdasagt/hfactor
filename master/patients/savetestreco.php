<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once 'loginhandler.php';
include_once '../../config.php';
$json = array(
    'success'=>false,
    'err'=> ''
);
if(isset($_POST['data']))
{
    $pid=  mysqli_real_escape_string($conn,$_POST['pid']);
    $getidq=  mysqli_query($conn,"select patient_id,chamber_id from d_chamber_appointment where record_status='A' and id='$pid'");
    $getidr= mysqli_fetch_array($getidq);
    $patient_id=$getidr['patient_id'];
    $chamber_id=$getidr['chamber_id'];
    $appcomp=mysqli_real_escape_string($conn,$_POST['appocomp']);
    $sendfreq=mysqli_real_escape_string($conn,$_POST['sendfreq']);
    $tests=$_POST['data'];
    $remoldrecq=  mysqli_query($conn, "update d_tests_recommended set record_status='D' where record_status='A' and id='$pid'");
    foreach($tests as $t)
    {
        $tmparr=  explode(' - ', $t);
        $insrectestq= mysqli_query($conn, "INSERT INTO `d_tests_recommended`(`chamber_id`,`patient_id`,`test_id`,`record_status`,`record_created_on`)
VALUES('$chamber_id','$patient_id','$tmparr[0]','A',now())");
    }
    
    if($appcomp)
    {
        $updtappo=  mysqli_query($conn, "update d_chamber_appointment set app_completed='Y' where record_status='A' and id='$pid'");
        if($updtappo && $sendfreq)
        {
            $intermnalurl="modules/patient/afterappo.php?appoid=".$pid;
            $publicurl="r.php?q=".getrandomstring(6);
            $smsbody="Thank you for visiting : <Chamber Name>.  Please visit: ".$intermnalurl." For best labs arround you";
            $insredirectq=  mysqli_query($conn, "INSERT INTO `d_redirect_url`(`public_url`,`internal_url`,`record_status`,`record_created_on`)
VALUES('$publicurl','$intermnalurl','Y',now())");
            sendsms('4356456',$smsbody);
            $json['success']=TRUE;
        }
        
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

function sendsms($mob,$sms)
{
    
}


