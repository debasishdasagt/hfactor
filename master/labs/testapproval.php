<?php
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['id']))
{
    $uid=$_SESSION['loginid'];
    $id=  mysqli_real_escape_string($conn,$_GET['id']);
    $apt=  mysqli_query($conn, "update d_lab_tests set test_approved='Y',test_approved_by='$uid',record_updated_on=now() where id='$id'");
    if($apt)
    {
        header("Location: approvetest.php");
    }
    else
    {
        echo "Test Not Approved due to unknown Error";
    }
}
