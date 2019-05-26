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
if(isset($_GET['doctorid']))
{
    $_SESSION['doctorid']= $_GET['doctorid'];
    $did=$_SESSION['doctorid'];
}
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>i-Health Care Login</title>
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
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="addtest.php">New Test</a>
                <a class='btn btn-info' role='button' href="approvetest.php">Approve Test</a>
                <a class='btn btn-info' role='button' href="addlab.php">New Lab.</a>
                <a class='btn btn-info' role='button' href="tagtests.php">Tag Tests</a>
            </div><hr>
            
             <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['t_name']) && $_POST['t_name']!="" )
            {
                $t_name=  mysqli_real_escape_string($conn,$_POST['t_name']);
                $t_desc=  mysqli_real_escape_string($conn,$_POST['t_desc']);
                $t_cat=  mysqli_real_escape_string($conn,$_POST['t_cat']);
                $tid=  mysqli_query($conn, "select get_test_id() as tid");
                $tidr= mysqli_fetch_array($tid);
                $test_id= $tidr['tid'];
                $uid=$_SESSION['loginid'];                
                
                $sql="INSERT INTO `d_lab_tests`
(`test_code`,
`test_name`,
`test_catagory`,
`test_description`,
`test_added_by`,
`test_approved`,
`record_status`,
`record_created_on`)
VALUES('$test_id','$t_name','$t_desc','$t_cat','$uid','N','A',now())";

               $save_test=  mysqli_query($conn, $sql);
               if($save_test)
               {
                   $tsavestatus='saved';
               }
               
            }
            ?>
            <div class='row'>
                <div class='jumbotron' style="background-color: #dfffff">
                    <h4>Add New Lab. Test</h4>
                    <hr>
                    <?php
                    if( $tsavestatus=="saved")
                    {
                        ?>
                    
                    <div class="alert alert-info alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Info! </strong> Test Saved with ID : <?php echo $test_id ?>. However Approval for the same from Admin is Pending.
    </div> 
                   <?php
                    }
                    
                    ?>
                    <form action='#' method="post">
                        <div class='col-lg-12'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Test Name</span>
                                <input name='t_name' type="text" class='form-control' placeholder="Test Name">
                            </div>
                        </div><br><div class='col-lg-12'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Test Description</span>
                                <input name='t_desc' type="text" class='form-control' placeholder="Test Dscription">
                            </div>
                        </div>
                        
                        <br><div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Test Category</span>
                                <input name='t_cat' type="text" class='form-control' placeholder="Test Category" value="General" readonly> 
                            </div>
                        </div>
                        
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style='text-align: right'>
                            
                                
                            <input type="submit" class='btn btn-info btn-sm' value="Submit">
                            
                        </div>
                        
                    </form><br>
                </div>
            </div>
            
            
            
            
    </div>
    
    
    
    
    
    
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    </body>
</html>
