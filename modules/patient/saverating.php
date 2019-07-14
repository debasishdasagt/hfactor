<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $json=array(
      'success'=>false,
        'err'=>''
    );
    
    $rtype=  mysqli_real_escape_string($conn,$_POST['rtype']);
    $rating=mysqli_real_escape_string($conn,$_POST['rating']);
    $fb=mysqli_real_escape_string($conn,$_POST['feedback']);
    $id=mysqli_real_escape_string($conn,$_POST['id']);
    $appid=mysqli_real_escape_string($conn,$_POST['app']);
    $pid=mysqli_real_escape_string($conn,$_POST['pid']);
    
    
    $getrq=  mysqli_query($conn, "select id from d_rating_feedback where record_status='A' and app_id='$appid' and patient_id='$pid' and r_type='$rtype'");
    if(mysqli_num_rows($getrq) > 0 )
    {
        $json['success']=false;
        $json['err']="Rating Already submitted";
    }
    else
    {
        $insrq=  mysqli_query($conn, "INSERT INTO `d_rating_feedback`
(`r_type`,`r_for`,`r_stars`,`r_feedback`,`app_id`,`patient_id`,`record_status`,`record_created_on`)
VALUES('$rtype','$id','$rating','$fb','$appid','$pid','A',now())");
        
        if($insrq)
        {
            $json['success']=true;
            $json['err']="Rating Submitted Successfully";
        }
        else
        {
            $json['success']=false;
            $json['err']="Something went wrong while submitting rating";
        }
    }
    
    echo json_encode($json);
}

