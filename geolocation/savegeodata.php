<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
//error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
//include_once 'loginhandler.php';
include_once '../config.php';
$json=array(
        'success'=>false,
        'err'=>'',
    );
if(isset($_POST['offc']))
{
    
    $otype=  mysqli_real_escape_string($conn,$_POST['otype']);
    $offc=  mysqli_real_escape_string($conn,$_POST['offc']);
    $longitude=  mysqli_real_escape_string($conn,$_POST['longitude']);
    $latitude=  mysqli_real_escape_string($conn,$_POST['latitude']);
    $img=mysqli_real_escape_string($conn,$_POST['img']);
    $deloldq=  mysqli_query($conn, "update d_geo_location set record_status='D' where offfice_type='$otype' and office_name='$offc' and record_status='A'");
    if($deloldq)
    {
        $insq=mysqli_query($conn,"INSERT INTO `d_geo_location`( `offfice_type`, `office_name`, `longitude`, `latitude`,`img`, `record_status`, `record_created_on`) VALUES ('$otype','$offc','$longitude','$latitude','$img','A',now())");
        if($insq)
        {
            $json['success']=true;
            $json['err']="Geo Location Saved Successfully";
        }
        else{
            $json['success']=false;
            $json['err']="Something Went Wrong while Saving Geo Location";
        }
    }
    else {
        $json['success']=false;
        $json['err']="Something Went Wrong while disbling old data";
    }
    
}
else{
    $json['success']=false;
    $json['err']="No Paramiter Passed";
}

echo json_encode($json);


