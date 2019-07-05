<?php
include_once 'loginhandler.php';
include_once '../../config.php';
$dname=  mysqli_real_escape_string($conn,$_POST["dname"]);
$dhospital=  mysqli_real_escape_string($conn,$_POST["dhospital"]);
$dexpirience=  mysqli_real_escape_string($conn,$_POST["dexpirience"]);
$ddegree= mysqli_real_escape_string($conn,$_POST["ddegree"]);
$dspeciality=  mysqli_real_escape_string($conn,$_POST["dspecial"]);
$dmob=  mysqli_real_escape_string($conn,$_POST["dmob"]);
$demail=  mysqli_real_escape_string($conn,$_POST["demail"]);
$dfee=  mysqli_real_escape_string($conn,$_POST["dfee"]);
$ddesignation=  mysqli_real_escape_string($conn,$_POST["ddesignation"]);

$doc_code=mysqli_real_escape_string($conn,$_POST["docid"]);
$_SESSION['doctorid']=$doc_code;
$upd=  mysqli_query($conn, "Update `d_doctor_info` set
 `d_name`='$dname',
`d_hospital`='$dhospital',
`d_designation`='$ddesignation',
`d_expirience`='$dexpirience',
`d_degree`='$ddegree',
`d_speciality`='$dspeciality',
`d_fee`='$dfee',
`d_mob`='$dmob',
`d_email`='$demail',
`record_modified_on`=now()
where doctor_code='$doc_code' and record_status='A'");

if($upd)
{
    echo "1";
}
 else {
     echo "0";
     printf("Error: %s\n", mysqli_error($conn));
    exit();
 }
?>