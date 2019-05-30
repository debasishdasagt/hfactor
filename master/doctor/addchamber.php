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
$did="";
$csavestatus="0";
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
                <a class='btn btn-info' role='button' href="alldoctors.php">All Doctors</a>
                <a class='btn btn-info' role='button' href="addchamber.php">Add  Chamber</a>
                <a class='btn btn-info' role='button' href="allchambers.php">All Chambers</a>
            </div><hr>
            <?php
            if(!isset($_SESSION['doctorid']) || $_SESSION['doctorid']=="")
            {?>
            <div class='row'>
                <div class='col-lg-12'>
                    <form id='srchdoc' action='#' method="post">
                      <div class='input-group input-group-lg'>
                          <input type="text" class='form-control' placeholder="Search Doctor by Name or Speciality" name='srchbox'>
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
                    $srchres=  mysqli_query($conn, "SELECT `d_doctor_info`.`id`,
    `d_doctor_info`.`doctor_code`,
    `d_doctor_info`.`d_name`,
    `d_doctor_info`.`d_hospital`,
    `d_doctor_info`.`d_designation`,
    `d_doctor_info`.`d_expirience`,
    `d_doctor_info`.`d_speciality`,
    `d_doctor_info`.`d_fee`,
    `d_doctor_info`.`d_mob`,
    `d_doctor_info`.`d_email`,
    ifnull(`d_doctor_info`.`d_profile_image`,'dummy_doctor_image.png') as image,
    `d_doctor_info`.`record_status`,
    `d_doctor_info`.`record_created_on`,
    `d_doctor_info`.`record_modified_on`
FROM `ihealthcare`.`d_doctor_info`
where concat(`d_doctor_info`.`doctor_code`,`d_doctor_info`.`d_name`,
    `d_doctor_info`.`d_hospital`,
    `d_doctor_info`.`d_designation`,
    `d_doctor_info`.`d_expirience`,
    `d_doctor_info`.`d_speciality`,
    `d_doctor_info`.`d_fee`,
    `d_doctor_info`.`d_mob`,
    `d_doctor_info`.`d_email`) like '%$stxt%'");
                    
                    while($resr=mysqli_fetch_array($srchres))
                    {
                        ?>
                
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-11 tile_sm'>
                    
                    <table width='100%' border='0' cellspacing='4'>
                        <tr>
                            <td rowspan="2" width='75'><div class='thumbnail srchimg' style="margin-bottom: 0px"><img class='img-rounded img-responsive' src='<?php echo  "picuploader/uploads/".$resr['image'];?>'></div></td><td><strong><?php echo  $resr['d_name'];?></strong></td>
                        </tr>
                        <tr>
                            <td class='srchsubtxt'><?php echo  $resr['d_speciality'];?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align='right'>
                                <a class='btn btn-info btn-xs' role='button' href='?doctorid=<?php echo  $resr['doctor_code'];?>'>Select</a>
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                </div>
                <?php
                    }}?>
                
                
            </div>
               <?php 
            } 
            else
            {
                $doctor_code=$_SESSION['doctorid'];
                $doctr=  mysqli_query($conn, "SELECT `d_doctor_info`.`id`,
    `d_doctor_info`.`doctor_code`,
    `d_doctor_info`.`d_name`,
    `d_doctor_info`.`d_hospital`,
    `d_doctor_info`.`d_designation`,
    `d_doctor_info`.`d_expirience`,
    `d_doctor_info`.`d_speciality`,
    `d_doctor_info`.`d_fee`,
    `d_doctor_info`.`d_mob`,
    `d_doctor_info`.`d_email`,
    ifnull(`d_doctor_info`.`d_profile_image`,'dummy_doctor_image.png') as image,
    `d_doctor_info`.`record_status`,
    `d_doctor_info`.`record_created_on`,
    `d_doctor_info`.`record_modified_on`
FROM `ihealthcare`.`d_doctor_info`
where doctor_code= '$doctor_code'");
                $dr=  mysqli_fetch_array($doctr);
                ?>
            
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['c_name']) && $_POST['c_name']!="" )
            {
                $c_name=  mysqli_real_escape_string($conn,$_POST['c_name']);
                $c_address=  mysqli_real_escape_string($conn,$_POST['c_address']);
                $c_time=  mysqli_real_escape_string($conn,$_POST['c_time']);
                $o_time=  mysqli_real_escape_string($conn,$_POST['o_time']);
                $c_pin=  mysqli_real_escape_string($conn,$_POST['c_pin']);
                $sund= mysqli_real_escape_string($conn,$_POST['sunday']);
                $mond= mysqli_real_escape_string($conn,$_POST['monday']);
                $tued= mysqli_real_escape_string($conn,$_POST['tuesday']);
                $wedd= mysqli_real_escape_string($conn,$_POST['wednesday']);
                $thud= mysqli_real_escape_string($conn,$_POST['thursday']);
                $frid= mysqli_real_escape_string($conn,$_POST['friday']);
                $satd= mysqli_real_escape_string($conn,$_POST['saturday']);
                
                
                
                $cid=  mysqli_query($conn, "select get_chamber_id() as cid");
                $cidr= mysqli_fetch_array($cid);
                $chamber_id= $cidr['cid'];
                
                
                $sql="INSERT INTO `ihealthcare`.`d_chambers`
(
`chamber_id`,
`doctor_code`,
`chamber_name`,
`chamber_address`,
`chamber_area_pin`,
`opening_time`,
`closing_time`,
`sunday_open`,
`monday_open`,
`tuesday_open`,
`wednesday_open`,
`thursday_open`,
`friday_open`,
`saturday_open`,
`record_status`,
`record_created_on`)
VALUES
('$chamber_id','$doctor_code','$c_name','$c_address','$c_pin','$o_time','$c_time','$sund','$mond','$tued','$wedd','$thud','$frid','$satd','A',now());";

               $save_chamber=  mysqli_query($conn, $sql);
               if($save_chamber)
               {
                   $csavestatus='saved';
               }
               
            }
            ?>
            <div class='row'>
                <div class='jumbotron' style="background-color: #dfffff">
                    <h4>Add new Chamber for <strong><?php echo  $dr['d_name'];?></strong></h4>
                    <hr>
                    <?php
                    if( $csavestatus=="saved")
                    {
                        ?>
                    
                    <div class="alert alert-info alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Info! </strong> Chamber Saved with Chamber ID : <?php echo $chamber_id ?>
    </div> 
                   <?php
                    }
                    
                    ?>
                    <div class="container">
                    <form action='#' method="post">
                        <div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber</span>
                                <input name='c_name' type="text" class='form-control' placeholder="Chamber Name">
                            </div>
                        </div><br><div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Address</span>
                                <input name='c_address' type="text" class='form-control' placeholder="Chamber Address">
                            </div>
                        </div>
                        
                        <br><div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="o_t" data-link-format="hh:ii">
                                <span class='input-group-addon'>Opening Time</span>
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="o_time">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="o_t" value="00:00" />
                        </div>
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'  style="margin-top: 10px">
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <span class='input-group-addon'>Closing Time</span>
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="c_time">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                        </div>
                        <br><br><br>
                        
                        <div class='col-lg-12'>
                            
                                    <div class="input-group input-group-sm" style="font-weight: normal;margin-top: 10px">
                                <input type="checkbox" name="sunday" style="margin-left: 20px;" checked><label for="sunday">Sunday</label>
                                <input type="checkbox" name="monday" style="margin-left: 20px;" checked ><label for="monday">Monday</label>
                                <input type="checkbox" name="tuesday" style="margin-left: 20px;" checked><label for="tuesday">Tuesday</label>
                                <input type="checkbox" name="wednesday" style="margin-left: 20px;" checked><label for="wednesday">Wednesday</label>
                                <input type="checkbox" name="thursday" style="margin-left: 20px;" checked><label for="thursday">Thursday</label>
                                <input type="checkbox" name="friday" style="margin-left: 20px;" checked><label for="friday">Friday</label>
                                <input type="checkbox" name="saturday" style="margin-left: 20px;" checked><label for="saturday">Saturday</label>
                            </div>
                            
                            
                        </div>
                        
                        <br>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Area PIN</span>
                                <input type="text" class='form-control' name="c_pin">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style='text-align: right;margin-top: 10px'>
                           <div class="btn-group btn-group-sm">
                                <a href="canceladdchamber.php" class="btn btn-danger btn-sm" role="button">Cancel</a>
                            <input type="submit" class='btn btn-info btn-sm' value="Save Chamber">
                           </div>
                            
                        </div>
                        
                    </form><br></div>
                </div>
            </div>
            
            <div class="row">
                <?php
                $csql="SELECT `d_chambers`.`id`,
    `d_chambers`.`chamber_id`,
    `d_chambers`.`chamber_name`,
    `d_chambers`.`chamber_address`,
    `d_chambers`.`chamber_area_pin`,
    `d_chambers`.`opening_time`,
    `d_chambers`.`closing_time`,
    `d_chambers`.`sunday_open`,
    `d_chambers`.`monday_open`,
    `d_chambers`.`tuesday_open`,
    `d_chambers`.`wednesday_open`,
    `d_chambers`.`thursday_open`,
    `d_chambers`.`friday_open`,
    `d_chambers`.`saturday_open`
FROM `d_chambers` where record_status='A' and doctor_code='$doctor_code'";
                $dc=  mysqli_query($conn, $csql);
                if(mysqli_num_rows($dc) > 0)
                {
                    ?>
                
                <h4>Already Registered Chambers with this Doctor</h4>
                <hr>
                
                
                
                <?php
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
                            <td rowspan="2" width='75'><div class='thumbnail srchimg' style="margin-bottom: 0px; font-size: 50px; color: #eeeeee"><i class="glyphicon glyphicon-briefcase"></i></div></td><td><strong><?php echo  $dcr['chamber_name'];?></strong></td>
                        </tr>
                        <tr>
                            <td class='srchsubtxt'><?php echo  $dcr['chamber_address'];?></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" class='srchsubtxt'>
                                <strong>Time:</strong> <?php echo  $dcr['opening_time'];?> to <?php echo  $dcr['closing_time'];?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class='srchsubtxt'>
                                <strong>Days:</strong> <?php echo  $days;?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align='right'>
                                <a class='btn btn-danger btn-xs' role='button' href='deletechamber.php?chid=<?php echo  $dcr['id'];?>'>Delete Chamber</a>
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                </div>
                
                
                <?php
                }
                
                
                }
                
                ?>
                
                
                
            </div>
            
            <?php
            }
            ?>
        </div>
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='../../js/jscript.js'></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_time').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
        </script>
    </body>
</html>
