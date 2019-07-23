<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
$test_id="";
$tsavestatus="0";
$usertype="";
$uid=$_SESSION['loginid'];
$roleck= mysqli_query($conn, "select user_role_code from d_user_role where user_id='$uid' and record_status='A'");
$roleckr=  mysqli_fetch_array($roleck);
$rolecd= $roleckr['user_role_code'];

$getlabq=mysqli_query($conn, "select lab_id from d_user_lab_mapping where user_id='$uid' and record_status='A'");
$labr=  mysqli_fetch_array($getlabq);
$labcd=$labr['lab_id'];

?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>Doctor 24/7</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/page_style.css'>
  <style>
      html
      {
          padding-top: 10px;
          padding-right: 10px;
          font-family: "calibri";
      }
      </style>
</head>
<body>
    <div class='container'>
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="addtest.php">New Test</a>
                <?php
                if($rolecd=="1001")
                {
                ?>
                <a class='btn btn-info' role='button' href="approvetest.php">Approve Test</a>
                <a class='btn btn-info' role='button' href="addlab.php">New Lab.</a>
                <?php } ?>
                <a class='btn btn-info' role='button' href="tagtests.php">Tag Tests</a>
            </div><hr>
    
    <div class="row">
                <div class='col-lg-12'>
                    <?php
                    $sql="";
                    if($rolecd=="1001")
                    {
                        $sql="SELECT `d_labs`.`id`,
    `d_labs`.`lab_id`,
    `d_labs`.`lab_name`,
    `d_labs`.`lab_address`,
    `d_labs`.`lab_area_pin`,
    `d_labs`.`lab_doctor`,
    `d_labs`.`opening_time`,
    `d_labs`.`closing_time`,
    `d_labs`.`sunday_open`,
    `d_labs`.`monday_open`,
    `d_labs`.`tuesday_open`,
    `d_labs`.`wednesday_open`,
    `d_labs`.`thursday_open`,
    `d_labs`.`friday_open`,
    `d_labs`.`saturday_open`
FROM `d_labs` where record_status='A'";
                    }
                    else if($rolecd=="1002")
                    {
                        $sql="SELECT `d_labs`.`id`,
    `d_labs`.`lab_id`,
    `d_labs`.`lab_name`,
    `d_labs`.`lab_address`,
    `d_labs`.`lab_area_pin`,
    `d_labs`.`lab_doctor`,
    `d_labs`.`opening_time`,
    `d_labs`.`closing_time`,
    `d_labs`.`sunday_open`,
    `d_labs`.`monday_open`,
    `d_labs`.`tuesday_open`,
    `d_labs`.`wednesday_open`,
    `d_labs`.`thursday_open`,
    `d_labs`.`friday_open`,
    `d_labs`.`saturday_open`
FROM `d_labs` where record_status='A' and lab_id='$labcd'";
                    }
                    
                    $labss=  mysqli_query($conn, $sql);
                    if(mysqli_num_rows($labss)>0)
                    {
                    ?>
                    <input type="text" class="form-control" id="srchtest" placeholder="Search Test.."><br>
                    <table class="table table-bordered table-striped table-hover " style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>Laboratory</th>
                                <th>Lab Test</th>
                                <th>Rate of Test</th>
                                <th>Tag / Untag</th>
                                
                            </tr>
                        </thead>
                        <tbody id="testtable">
                        
                    <?php
                    while($labsr=  mysqli_fetch_array($labss))
                    {
                        $sql2="SELECT `d_lab_tests`.`id`,
                            `d_lab_tests`.`test_code`,
                            `d_lab_tests`.`test_name`,
                            `d_lab_tests`.`test_catagory`,
                            `d_lab_tests`.`test_description`,
                            `d_lab_tests`.`test_added_by`,
                            `d_lab_tests`.`test_approved`,
                            `d_lab_tests`.`test_approved_by`
                        FROM `d_lab_tests` where record_status='A' and test_approved='Y'";
                        $tests=  mysqli_query($conn, $sql2);
                    if(mysqli_num_rows($tests)>0)
                    {
                     while($testsr=  mysqli_fetch_array($tests))
                    {   $tagerate='0';
                        $torsc='';
                         $testcd=$testsr['test_code'];
                         $labcd=$labsr['lab_id'];
                         $cktag=mysqli_query($conn,"SELECT `lab_test_mapping`.`id`,
                                `lab_test_mapping`.`test_rate`,`lab_test_mapping`.`test_or_sample`
                            FROM `lab_test_mapping` where record_status='A' and lab_id='$labcd' and test_id='$testcd'");
                         
                         $ck=  mysqli_num_rows($cktag);
                         if($ck>0)
                         {$ckr=  mysqli_fetch_array($cktag);
                         $tagerate=$ckr['test_rate'];
                         $torsc=$ckr['test_or_sample'];
                         }
                         
                         ?>
                        
                            
                            
                            <tr>
                            <td>
                                <?php echo $labsr['lab_name']; ?>
                            </td>
                            <td>
                                <?php echo $testsr['test_name']; ?>
                            </td>
                                    <td><table border='0'>
                                            <tr>
                                                <td style="padding: 3px">
                                                    <input type="radio" id="ttype_<?php echo $labsr['lab_id'].$testsr['test_code']."sc"; ?>" name="ttype_<?php echo $labsr['lab_id'].$testsr['test_code']; ?>" value="Sample Collect" <?php if($torsc=='Sample Collect') {echo "checked='checked'";} ?>> Sample Collect
                                
                                                </td>
                                                <td style="padding: 3px">
                                                   <input type="radio" id="ttype_<?php echo $labsr['lab_id'].$testsr['test_code']."ft"; ?>" name="ttype_<?php echo $labsr['lab_id'].$testsr['test_code']; ?>" value="Full Test" <?php if($torsc=='Full Test') {echo "checked='checked'";} ?>> Full Test
                                 
                                                </td>
                                                <td style="padding: 3px">
                                                    <input type="number" class="form-control" id="rate_<?php echo $labsr['lab_id'].$testsr['test_code']; ?>" placeholder="Rate" style="max-width: 100px" <?php if($tagerate!='0') {echo "value='".$tagerate."'";} ?>>
                            
                                                </td>
                                            </tr>
                                </table>
                                </td>
                            <td align="center">
                            <?php
                            if($ck>0)
                            {
                            ?>    <a id="btn_<?php echo $labsr['lab_id'].$testsr['test_code']; ?>" href="#" class="btn btn-sm btn-danger" role="button" onclick="untag('<?php echo $labsr['lab_id']; ?>','<?php echo $testsr['test_code']; ?>')"><i class="glyphicon glyphicon-tag"></i></a>
                            <?php
                            } else{ ?>
                            
                                
                                <a id="btn_<?php echo $labsr['lab_id'].$testsr['test_code']; ?>" href="#" class="btn btn-sm btn-info" role="button" onclick="taguntag('<?php echo $labsr['lab_id']; ?>','<?php echo $testsr['test_code']; ?>')"><i class="glyphicon glyphicon-tag"></i></a>
                            <?php }?>
                            
                            </td>
                            
                            
                            
                        </tr>
                        
                   
                        
                            
                    <?php }}}} ?>
                            </tbody>
                    </table>
                </div>
            </div>
    
    
    
    </div>
    
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/jscript.js'></script>
    <script>
$(document).ready(function(){
  $("#srchtest").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#testtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    </body>
</html>
