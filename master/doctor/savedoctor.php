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
$doc_code_r=  mysqli_query($conn, "select get_doctor_id() as did");
if (!$doc_code_r) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$doc_code_a=  mysqli_fetch_array($doc_code_r);
$doc_code=$doc_code_a['did'];
$_SESSION['doctorid']=$doc_code;
$ins=  mysqli_query($conn, "INSERT INTO `ihealthcare`.`d_doctor_info`
(doctor_code,`d_name`,
`d_hospital`,
`d_designation`,
`d_expirience`,
`d_degree`,
`d_speciality`,
`d_fee`,
`d_mob`,
`d_email`,
`record_status`,
`record_created_on`)
VALUES
(
        '$doc_code','$dname','$dhospital','$ddesignation','$dexpirience','$ddegree','$dspeciality','$dfee','$dmob','$demail','A',now()
)");

if($ins)
{
    echo "1";
}
 else {
     echo "0";
 }
?>