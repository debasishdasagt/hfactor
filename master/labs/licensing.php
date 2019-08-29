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
$lsavestatus="0";
$usertype="";
$uid=$_SESSION['loginid'];

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>Doctor 24/7</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/jquery-ui.min.css'>
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
    <div class="container">
        <div class="row">
            <?php
            if(isset($_GET['lid']))
            {
                $lid=  mysqli_real_escape_string($conn,$_GET['lid']);
                $labnameq=  mysqli_query($conn, "select get_lab_name('$lid') as lname");
                $lnamer=  mysqli_fetch_array($labnameq);
                ?>
            <h4><?php echo "Generating License for <b>".$lnamer['lname']."</b>" ?></h4>
            <br><br>
            <form method="post">
            <table cellspcing="10" cellpadding="5" class="table table-bordered table-striped">
                <tr>
                    <th>Valid Upto</th>
                    <th>License Type</th>
                    <th>Generate</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" class="form-control" placeholder="Valied Upto" id="licvaliedupto" name="licvaliedupto" style="padding-bottom: 5px" >
                     </td>
                    
                    <td><select class="form-control" id="lictype" name="lictype">
                <option value="single">Single User</option>
                <option value="multi">Multi User</option>
                    
                </select></td>
                <td><input type="hidden" name="labid" value="<?php echo $_GET['lid']?>"><input type="submit" class="btn btn-info" value="Generate License"></td>
                </tr>
            </table>
            </form>
            
            
            
            <?php }
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if($_POST['licvaliedupto']!="")
                {
                    $licval=  mysqli_real_escape_string($conn,$_POST['licvaliedupto']);
                    $labid=mysqli_real_escape_string($conn,$_POST['labid']);
                    $lictype=mysqli_real_escape_string($conn,$_POST['lictype']);
                    $disableold=mysqli_query($conn,"update d_lab_sw_lic set record_status='D' where lab_id='$labid' and record_status='A'");
                    $genlicq=mysqli_query($conn,"INSERT INTO `d_lab_sw_lic`(`lab_id`,`valid_upto`,`lic_type`,`lic_key`,`record_status`,`record_created_on`) VALUES('$labid','$licval','$lictype',md5(concat('$labid','$licval')),'A',now())");
                    if($genlicq && $disableold)
                    {
                        echo "License Generated Successfully";
                    }
                    else
                    {
                        echo "License Generation Falied";
                    }
                    
                }
                else
                {
                    echo "Please Enter Valid Upto Date";
                }
            }
            
            
            
            
            
            ?>
            
            
            
            
        </div>
        
        
        
    </div>
    
    
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../js/jquery-ui.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../js/jscript.js" charset="UTF-8"></script>
    </body>
</html>
