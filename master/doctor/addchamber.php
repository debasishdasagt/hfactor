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
FROM `d_doctor_info`
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
FROM `d_doctor_info`
where doctor_code= '$doctor_code'");
                $dr=  mysqli_fetch_array($doctr);
                ?>
            
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['c_name']) && $_POST['c_name']!="" )
            {
                $c_name=  mysqli_real_escape_string($conn,$_POST['c_name']);
                $c_address=  mysqli_real_escape_string($conn,$_POST['c_address']);
                $c_contact=  mysqli_real_escape_string($conn,$_POST['c_contact']);
                $c_pin=  mysqli_real_escape_string($conn,$_POST['c_pin']);
                $c_remarks=mysqli_real_escape_string($conn,$_POST['c_remarks']);
                
                
                
                $cid=  mysqli_query($conn, "select get_chamber_id() as cid");
                $cidr= mysqli_fetch_array($cid);
                $chamber_id= $cidr['cid'];
                
                
                $sql="INSERT INTO `d_chambers`
(
`chamber_id`,
`doctor_code`,
`chamber_name`,
`chamber_address`,
`contact_number`,
`chamber_area_pin`,
`chamber_remarks`,
`record_status`,
`record_created_on`)
VALUES
('$chamber_id','$doctor_code','$c_name','$c_address','$c_contact','$c_pin','$c_remarks','A',now());";

               $save_chamber=  mysqli_query($conn, $sql);
               if($save_chamber)
               {
                   $insd="";
                   
                   if($_POST['sun']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['sun_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['sun_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['sun_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['sun_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['sun_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['sun_l2']);
                       $insd="('$chamber_id','Sunday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   if($_POST['mon']== 'on')
                   {
                       $ot1= mysqli_real_escape_string($conn,$_POST['mon_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['mon_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['mon_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['mon_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['mon_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['mon_l2']);
                       $insd="('$chamber_id','Monday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";$insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   if($_POST['tue']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['tue_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['tue_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['tue_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['tue_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['tue_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['tue_l2']);
                       $insd="('$chamber_id','Tuesday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   
                   if($_POST['wed']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['wed_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['wed_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['wed_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['wed_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['wed_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['wed_l2']);
                       $insd="('$chamber_id','Wednesday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   if($_POST['thu']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['thu_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['thu_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['thu_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['thu_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['thu_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['thu_l2']);
                       $insd="('$chamber_id','Thursday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   if($_POST['fri']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['fri_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['fri_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['fri_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['fri_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['fri_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['fri_l2']);
                       $insd="('$chamber_id','Friday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
                   if($_POST['sat']== 'on')
                   {
                       $ot1=  mysqli_real_escape_string($conn,$_POST['sat_ot1']);
                       $ct1=mysqli_real_escape_string($conn,$_POST['sat_ct1']);
                       $lim1=mysqli_real_escape_string($conn,$_POST['sat_l1']);
                       $ot2=mysqli_real_escape_string($conn,$_POST['sat_ot2']);
                       $ct2=mysqli_real_escape_string($conn,$_POST['sat_ct2']);
                       $lim2=mysqli_real_escape_string($conn,$_POST['sat_l2']);
                       $insd="('$chamber_id','Saturday','$ot1','$ct1','$lim1','$ot2','$ct2','$lim2','A',now())";
                       $insdq=  mysqli_query($conn, "INSERT INTO `d_chamber_days`(`chamber_id`, `week_day`, `opening_time1`, `closing_time1`, "
                               . "`limit1`, `opening_time2`, `closing_time2`, `limit2`, `record_status`, `record_created_on`) "
                               . "VALUES".$insd);
                       if($insdq)
                       {$csavestatus='saved'; } else{$csavestatus='not saved';}
                   }
                   
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
        <strong>Info! </strong> Chamber Saved with Chamber ID : <?php echo $chamber_id ?>. <a href="../users/newuser.php?chamberid=<?php echo $chamber_id ?>" role="button" class="btn btn-info btn-xs">Add User</a> for this Chamber.
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
                        <br>
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Contact Number</span>
                                <input name='c_contact' type="text" class='form-control' placeholder="Contact Number(s) Separated by coma(,)">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Area PIN</span>
                                <input type="text" class='form-control' name="c_pin">
                            </div>
                        </div>
                        
                        <br>      <br>
                        
                        <div class="col-lg-12 table-responsive" style="margin-top: 10px">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Day</th><th>Opening Time-1</th><th>Closing Time-1</th><th>Patient Limit</th><th>Opening Time-2</th><th>Closing Time-2</th><th>Patient Limit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="sun" checked="chacked"></td>
                                    <td>Sunday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="sun_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ot2"  onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sun_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="sun_l2" onchange="allsetlim2(this.value)"></td>
                                  
                                </tr>
                                <tr>
                                     <td><input type="checkbox" name="mon" checked="chacked"></td>
                                    <td>Monday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="mon_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="mon_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="mon_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="tue" checked="chacked"></td>
                                    <td>Tuesday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="tue_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="tue_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="tue_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="wed" checked="chacked"></td>
                                    <td>Wednesday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="wed_l1"  onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="wed_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="wed_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="thu" checked="chacked"></td>
                                    <td>Thursday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="thu_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="thu_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="thu_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="fri" checked="chacked"></td>
                                    <td>Friday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="fri_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="fri_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="fri_l2" onchange="allsetlim2(this.value)"></td>
                                    
                                </tr>
                                
                                
                                
                                
                                
                                
                                <tr>
                                     <td><input type="checkbox" name="sat" checked="chacked"></td>
                                    <td>Saturday</td>
                                    <td>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ot1" onchange="allsetot1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                                    </td>
                                    <td>
                             <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ct1" onchange="allsetct1(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    </td>
                                    <td><input class="form-control" type="number" placeholder="Limit" name="sat_l1" onchange="allsetlim1(this.value)"></td>
                                    <td>
                           <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ot2" onchange="allsetot2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                        </td>
                                    <td>
                                        
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="sat_ct2" onchange="allsetct2(this.value)">
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
                                    
                                          </td>
                                          <td><input class="form-control" type="number" placeholder="Limit" name="sat_l2" onchange="allsetlim2(this.value)"></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>   
                        
                        
                        <br>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Remarks</span>
                                <input name='c_remarks' type="text" class='form-control' placeholder="Remarks for Paitients if Any">
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
    `d_chambers`.`chamber_area_pin`
    
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
                    $days=""; ?>
                
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
                                <strong>Pincode:</strong> <?php echo  $dcr['chamber_area_pin'];?>
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
                }}
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
