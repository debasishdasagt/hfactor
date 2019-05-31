<?php

include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['uid']))
{
    $id=  mysqli_real_escape_string($conn,$_GET['uid']);
    $delt=  mysqli_query($conn, "update d_user_password set record_status='B',modified_on=now() where user_id='$id' and record_status='A'");
    if($delt)
    {
        header("Location: allusers.php");
    }
    else
    {
        echo "User Not disabled due to unknown Error";
    }
}


