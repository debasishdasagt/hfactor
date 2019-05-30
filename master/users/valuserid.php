<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_POST['uid']) && $_POST['uid']!='')
{
    $uid=  mysqli_real_escape_string($conn,$_POST['uid']);
    $seluid=  mysqli_query($conn, "select user_id from d_user_info where record_status='A' and user_id='$uid'");
    if(mysqli_num_rows($seluid)>0)
    {
        echo "1";
    }
 else {
    echo "0";    
    }
}?>