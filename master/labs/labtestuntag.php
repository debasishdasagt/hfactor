<?php
include_once 'loginhandler.php';
include_once '../../config.php';
$labid=  mysqli_real_escape_string($conn,$_POST["labid"]);
$testid=  mysqli_real_escape_string($conn,$_POST["testid"]);
$upd=  mysqli_query($conn, "update `lab_test_mapping` set record_status='D', record_updated_on=now() where lab_id='$labid' and test_id='$testid'");
if($upd)
{echo "1";}
 else {echo "0";}
 ?>