<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
$json=array();
if(!empty($_GET['test']))
{
    $t=  mysqli_real_escape_string($conn,$_GET['test']);
    $testsq=  mysqli_query($conn, "select concat(test_code,' - ',test_name) as t from d_lab_tests where test_name like '%$t%' and record_status='A' and test_approved='Y'");
    while($testsr=  mysqli_fetch_array($testsq))
    {
        array_push($json, $testsr['t']);
    }
    echo json_encode($json);
}

