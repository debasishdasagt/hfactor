<?php
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['id']))
{
    $id=  mysqli_real_escape_string($conn,$_GET['id']);
    $delt=  mysqli_query($conn, "update d_lab_tests set record_status='D',record_updated_on=now() where id='$id'");
    if($delt)
    {
        header("Location: addtest.php");
    }
    else
    {
        echo "Test Not Deleted due to unknown Error";
    }
}
