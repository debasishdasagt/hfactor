<?php
include_once 'loginhandler.php';
include_once '../../config.php';
if(isset($_GET['doctorid']))
{
    $did=  mysqli_real_escape_string($conn,$_GET['doctorid']);
    $deld=  mysqli_query($conn, "update d_doctor_info set record_status='D',record_modified_on=now() where doctor_code='$did'");
    if($deld)
    {
        header("Location: alldoctors.php");
    }
    else
    {
        echo "Doctor Not Deleted due to unknown Error";
    }
}