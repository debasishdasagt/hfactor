<?php
include_once 'loginhandler.php';
include_once '../../config.php';
$labid=  mysqli_real_escape_string($conn,$_POST["labid"]);
$testid=  mysqli_real_escape_string($conn,$_POST["testid"]);
$rate=  mysqli_real_escape_string($conn,$_POST["rate"]);
$ttyp=  mysqli_real_escape_string($conn,$_POST["ttyp"]);
$ins=  mysqli_query($conn, "INSERT INTO `lab_test_mapping`
(`lab_id`,
`test_id`,
`test_or_sample`,
`test_rate`,
`record_status`,
`record_created_on`)
VALUES
('$labid','$testid','$ttyp','$rate','A',now())");
if($ins)
{echo "1";}
 else {echo "0";}
 ?>