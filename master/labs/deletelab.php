<?php
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['id']))
{
    $id=  mysqli_real_escape_string($conn,$_GET['id']);
    $dell=  mysqli_query($conn, "update d_labs set record_status='D',record_updated_on=now() where id='$id'");
    if($dell)
    {
        header("Location: addlab.php");
    }
    else
    {
        echo "Lab Not Deleted due to unknown Error";
    }
}
