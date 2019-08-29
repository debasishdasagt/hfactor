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
$lsavestatus="0";
$usertype="";
$uid=$_SESSION['loginid'];
$roleck= mysqli_query($conn, "select user_role_code from d_user_role where user_id='$uid' and record_status='A'");
$roleckr=  mysqli_fetch_array($roleck);
$rolecd= $roleckr['user_role_code'];
$chamber_id="";
if($rolecd=='1003')
{
    $chamberidq=  mysqli_query($conn, "select chamber_id from d_user_chamber_mapping where user_id='$uid' and record_status='A'");
    $chamberr=  mysqli_fetch_array($chamberidq);
    $chamber_id=$chamberr['chamber_id'];
}
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
                <a class='btn btn-info' role='button' href="patientsday.php">Today's Patients</a>
                <?php if($rolecd=='1003'){ ?>
                <a class='btn btn-info' role='button' href="newpatient.php">New Patient</a>
                <?php } else if($rolecd=='1001'){ ?>
                <a class='btn btn-info' role='button' href="selectch.php">New Patient</a>
                <?php } ?>
                
                <a class='btn btn-info' role='button' href="allpatients.php">All Patients</a>
                
                
            </div><hr>
            
            <div class='row'>
                <div class='col-lg-12'>
                    <form id='srchdoc' action='#' method="post">
                      <div class='input-group input-group-lg'>
                          <input type="text" class='form-control' placeholder="Search Chamber by Doctor or Location or Location PIN code" name='srchbox'>
                          <span class='input-group-btn'>
                              <input type="submit" class='btn btn-default' role='button' value="Search">
                          </span>
                      </div>
                    </form>
                    
                </div>
                
                
                <?php
                if(isset($_POST['srchbox']) && $_POST['srchbox']!="")
                {
                    ?>
                <br>
                <br>
                <h4>Search Result for <strong> <?php echo  $_POST['srchbox'];?></strong></h4>
                    <hr>
                    <?php
                    $stxt=  mysqli_real_escape_string($conn,$_POST['srchbox']);
                    $csql="SELECT `d_chambers`.`id`,
    `d_chambers`.`chamber_id`,
    `d_chambers`.`doctor_code`,
    `d_chambers`.`chamber_name`,
    `d_chambers`.`chamber_address`,
    `d_chambers`.`chamber_area_pin`,
    (select `d_doctor_info`.`d_name` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A') as d_name,
    (select `d_doctor_info`.`d_speciality` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A') as d_spcl
FROM `d_chambers` where record_status='A' and 
concat(chamber_name,chamber_address,chamber_area_pin,
(select `d_doctor_info`.`d_name` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A'),
    (select `d_doctor_info`.`d_speciality` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A')

) like '%$stxt%' ";
                $dc=  mysqli_query($conn, $csql);
                
                    
                while($dcr=  mysqli_fetch_array($dc))
                {
                    $days="";
                    if($dcr['sunday_open'] == 'on')
                    {$days=$days."Sunday, ";}
                    if($dcr['monday_open'] == 'on')
                    {$days=$days."Monday, ";}
                    if($dcr['tuesday_open'] == 'on')
                    {$days=$days."Tuesday, ";}
                    if($dcr['wednesday_open'] == 'on')
                    {$days=$days."Webnesday, ";}
                    if($dcr['thursday_open'] == 'on')
                    {$days=$days."Thursday, ";}
                    if($dcr['friday_open'] == 'on')
                    {$days=$days."Friday, ";}
                    if($dcr['saturday_open'] == 'on')
                    {$days=$days."Satuday";}
                    
                    
                    ?>
                
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-11 tile_sm'>
                    
                    <table width='100%' border='0' cellspacing='0' cellpadding="5">
                        <tr>
                            <td rowspan="2" width='75'><div class='thumbnail srchimg' style="margin-bottom: 0px; font-size: 50px; color: #eeeeee"><i class="glyphicon glyphicon-briefcase"></i></div></td><td><strong><?php echo  $dcr['chamber_name']." - ".$dcr['d_name']." (".$dcr['d_spcl'].")";?></strong></td>
                        </tr>
                        <tr>
                            <td class='srchsubtxt'><?php echo  $dcr['chamber_address'];?></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" align='right'>
                                <a class='btn btn-warning btn-xs' role='button' href='docappointment.php?chid=<?php echo  $dcr['chamber_id'];?>&did=<?php echo  $dcr['doctor_code'];?>'>Select</a>
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                </div>
                
                
                <?php
                }
                
                
                }
                
 else {
     
     
     
     
     ?>
                    
                    
                    
                    <br>
                <br>
                <h4>Select Chamber / Doctor for new Patient</h4>
                    <hr>
                    <?php
                    
                    $csql="SELECT `d_chambers`.`id`,
    `d_chambers`.`chamber_id`,
    `d_chambers`.`doctor_code`,
    `d_chambers`.`chamber_name`,
    `d_chambers`.`chamber_address`,
    `d_chambers`.`chamber_area_pin`,
    (select `d_doctor_info`.`d_name` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A') as d_name,
    (select `d_doctor_info`.`d_speciality` from  `d_doctor_info` where `d_doctor_info`.`doctor_code`= d_chambers.doctor_code and `d_doctor_info`.record_status='A') as d_spcl
FROM `d_chambers` where record_status='A' ";
                $dc=  mysqli_query($conn, $csql);
                
                    
                while($dcr=  mysqli_fetch_array($dc))
                {
                    $days="";
                    if($dcr['sunday_open'] == 'on')
                    {$days=$days."Sunday, ";}
                    if($dcr['monday_open'] == 'on')
                    {$days=$days."Monday, ";}
                    if($dcr['tuesday_open'] == 'on')
                    {$days=$days."Tuesday, ";}
                    if($dcr['wednesday_open'] == 'on')
                    {$days=$days."Webnesday, ";}
                    if($dcr['thursday_open'] == 'on')
                    {$days=$days."Thursday, ";}
                    if($dcr['friday_open'] == 'on')
                    {$days=$days."Friday, ";}
                    if($dcr['saturday_open'] == 'on')
                    {$days=$days."Satuday";}
                    
                    
                    ?>
                
                <div class='col-lg-3 col-md-4 col-sm-6 col-xs-11 tile_sm'>
                    
                    <table width='100%' border='0' cellspacing='0' cellpadding="5">
                        <tr>
                            <td rowspan="2" width='75'><div class='thumbnail srchimg' style="margin-bottom: 0px; font-size: 50px; color: #eeeeee"><i class="glyphicon glyphicon-briefcase"></i></div></td><td><strong><?php echo  $dcr['chamber_name']." - ".$dcr['d_name']." (".$dcr['d_spcl'].")";?></strong></td>
                        </tr>
                        <tr>
                            <td class='srchsubtxt'><?php echo  $dcr['chamber_address'];?></td>
                        </tr>
                        
                       
                        <tr>
                            <td colspan="2" align='right'>
                                <a class='btn btn-warning btn-xs' role='button' href='docappointment.php?chid=<?php echo  $dcr['chamber_id'];?>&did=<?php echo  $dcr['doctor_code'];?>'>Select</a>
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                </div>
                
                
                <?php
                }   
 }
                ?>   
                </div>
            </diV>
    </body>
</html>
