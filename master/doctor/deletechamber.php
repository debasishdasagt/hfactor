<?php
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['chid']))
{
    $chid=  mysqli_real_escape_string($conn,$_GET['chid']);
    $delch=  mysqli_query($conn, "update d_chambers set record_status='D',record_updated_on=now() where id='$chid'");
    if($delch)
    {
        header("Location: addchamber.php");
    }
    else
    {
        echo "Chamber Not Deleted due to unknown Error";
    }
}
