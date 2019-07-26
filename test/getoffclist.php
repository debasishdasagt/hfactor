<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../config.php';
if(isset($_GET['otyp']))
{
    $res=array(
        'success' => false,
        'offc_name'=>"test",
        'err'=>'');
    $sql="";
    $ot=$_GET['otyp'];
    if($_GET['otyp']=="Chamber")
    {
        $sql="SELECT `chamber_id` as oid,`chamber_name` as onam ,`chamber_address` as oa FROM `d_chambers` where record_status='A'";
    }
    else if($_GET['otyp']=="Lab")
    {
        $sql="SELECT `lab_id` as oid,`lab_name` as onam ,`lab_address` as oa FROM `d_labs` where record_status='A'";
    }
    
    $oq=  mysqli_query($conn, $sql);
    if(mysqli_num_rows($oq) >0)
    {
        $o="";
        $res['success']=true;
        while($or=  mysqli_fetch_array($oq))
        {
            $o=$o."<option value='".$or['oid']."'>".$or['oid']."-".$or['onam']."</option>";
        }
        $res['offc_name']=$o;
    }
    else{
        $res['success']=false;
        $res['err']="No Office Fornd";
    }
    echo json_encode($res);
}
    ?>