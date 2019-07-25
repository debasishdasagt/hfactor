<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../config.php';
if(isset($_GET['otyp']))
{
    $res=array(
        'succss' => false,
        'offc_name'=>"test");
    echo json_encode($res);
}
    ?>