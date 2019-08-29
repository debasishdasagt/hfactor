<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
$test_id="";
$tsavestatus="0";
$usertype="";
$uid=$_SESSION['loginid'];
$roleck= mysqli_query($conn, "select user_role_code from d_user_role where user_id='$uid' and record_status='A'");
$roleckr=  mysqli_fetch_array($roleck);
$rolecd= $roleckr['user_role_code'];

?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>Doctor 24/7</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/page_style.css'>
  <link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
            <?php include_once 'menu.php'; ?><hr>
            
             
            
            <div class="row">
                <div class='col-lg-12'>
                    <?php
                    $sql="SELECT `d_lab_tests`.`id`,
    `d_lab_tests`.`test_code`,
    `d_lab_tests`.`test_name`,
    `d_lab_tests`.`test_catagory`,
    `d_lab_tests`.`test_description`,
    `d_lab_tests`.`test_added_by`,
    `d_lab_tests`.`test_approved`,
    `d_lab_tests`.`test_approved_by`
FROM `d_lab_tests` where record_status='A' and test_approved='N'";
                    
                    
                    $tests=  mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($tests)>0)
                    {
                    ?>
                    <input type="text" class="form-control" id="srchtest" placeholder="Search Test.."><br>
                    <table class="table table-bordered table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>Test Code</th>
                                <th>Test Name</th>
                                <th>Test Description</th>
                                <th>Status</th>
                                
                                <th>Created By</th>
                                <th>Approval</th>
                   
                            </tr>
                        </thead>
                        <tbody id="testtable">
                        
                    <?php
                    while($testsr=  mysqli_fetch_array($tests))
                    { ?>
                        <tr>
                            <td>
                                <?php echo $testsr['test_code']; ?>
                            </td>
                            <td>
                                <?php echo $testsr['test_name']; ?>
                            </td>
                            <td>
                                <?php echo $testsr['test_description']; ?>
                            </td>
                            <td>
                                <?php if($testsr['test_approved']=="Y")
                                {echo "Approved";}
                                else
                                {echo "Pending Approval";}  
                                    ?>
                            </td>
                            
                           
                                <td><?php echo $testsr['test_added_by']; ?></td>
                                <td align="center"><a href="testapproval.php?id=<?php echo $testsr['id']; ?>" class="btn btn-success btn-sm" role="Button"><i class="glyphicon glyphicon-ok"></i></a></td>
                    
                            
                            
                        </tr>
                            
                    <?php }}
 else {
    echo 'No Pending Tests for Approval';
 }
                    ?>
                            </tbody>
                    </table>
                </div>
            </div>
            
            
    </div>
    
    
    
    
    
    
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
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
