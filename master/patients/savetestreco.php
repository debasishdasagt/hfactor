<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once 'loginhandler.php';
include_once '../../config.php';
$json = array(
    'success'=>false,
    'err'=> '',
    'msg'=> '',
    'mob'=> ''
);
if(isset($_POST['appocomp']) && $_POST['appocomp'])
{
    $pid=  mysqli_real_escape_string($conn,$_POST['pid']);
    $getidq=  mysqli_query($conn,"select patient_id,chamber_id from d_chamber_appointment where record_status='A' and id='$pid'");
    $getidr= mysqli_fetch_array($getidq);
    $patient_id=$getidr['patient_id'];
    $chamber_id=$getidr['chamber_id'];
    $getmobq=  mysqli_query($conn,"select mobile_number from d_patient_info where patient_id='$patient_id' and record_status='A'");
    $getmobr= mysqli_fetch_array($getmobq);
    $json['mob']=$getmobr['mobile_number'];
    $appcomp=mysqli_real_escape_string($conn,$_POST['appocomp']);
    $sendfreq=mysqli_real_escape_string($conn,$_POST['sendfreq']);
    
    $remoldrecq=  mysqli_query($conn, "update d_tests_recommended set record_status='D' where record_status='A' and patient_id='$patient_id'");
    if(isset($_POST['dataa']))
    {
    $tests=$_POST['dataa'];
    foreach($tests as $t)
    {
        $tmparr=  explode(' - ', $t);
        $insrectestq= mysqli_query($conn, "INSERT INTO `d_tests_recommended`(`chamber_id`,`patient_id`,`test_id`,`record_status`,`record_created_on`)
VALUES('$chamber_id','$patient_id','$tmparr[0]','A',now())");
    }}
    
    if($appcomp)
    {
        $updtappo=  mysqli_query($conn, "update d_chamber_appointment set app_completed='Y' where record_status='A' and id='$pid'");
        if($updtappo && $sendfreq)
        {
            $intermnalurl="modules/patient/afterappo.php";
            $publicurl="r.php?q=".getrandomstring(6);
            $smsbody="Thank you for visiting : <Chamber Name>.  Please visit: http://".$_SERVER['HTTP_HOST']."/hfactor/".$publicurl." to find best labs arround you";
            $insredirectq=  mysqli_query($conn, "INSERT INTO `d_redirect_url`(`public_url`,`internal_url`,`p1`,`record_status`,`record_created_on`)
VALUES('$publicurl','$intermnalurl','$pid','Y',now())");
            
            $json['success']=TRUE;
            $json['msg']=$smsbody;
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




