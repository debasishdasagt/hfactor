<?php
include_once 'config.php';
$par1="";
$par2="";
$par3="";
$privateurl="";
if(isset($_GET['q']))
{
    $q= mysqli_real_escape_string($conn,$_GET['q']);
    $geturlq=  mysqli_query($conn,"select internal_url,ifnull(p1,'') as par1,ifnull(p2,'') as par2,ifnull(p3,'') as par3 from d_redirect_url where public_url='r.php?q=$q' and record_status='Y'");
    if(mysqli_num_rows($geturlq)>0)
    {
    $geturlr=  mysqli_fetch_array($geturlq);
    $privateurl=$geturlr['internal_url'];
    $par1=$geturlr['par1'];
    $par2=$geturlr['par2'];
    $par3=$geturlr['par3'];
    include_once $privateurl;
    }
 else {
     header("Location: index.php");   
    }
}
else {
     header("Location: index.php");   
    }
