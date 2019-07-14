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
  <title>eCure365</title>
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
        <div class="container">
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="alldoctors.php">All Doctors</a>
                <a class='btn btn-info' role='button' href="addchamber.php">Add  Chamber</a>
                <a class='btn btn-info' role='button' href="allchambers.php">All Chambers</a>
            </div><hr>
            <div class="well" style="text-align: center">
                <h4>View / Edit Chamber</h4>
            </div>
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['c_name']) && $_POST['c_name']!="" )
            {
                $c_name=  mysqli_real_escape_string($conn,$_POST['c_name']);
                $c_address=  mysqli_real_escape_string($conn,$_POST['c_address']);
                $c_contact=  mysqli_real_escape_string($conn,$_POST['c_contact']);
                $c_pin=  mysqli_real_escape_string($conn,$_POST['c_pin']);
                $c_remarks=mysqli_real_escape_string($conn,$_POST['c_remarks']);
                $cid=mysqli_real_escape_string($conn,$_POST['cid']);
                
                
                
                $chamber_id= $cid;
                
                
                $sql="update `d_chambers`
                        set 
                        `chamber_name`='$c_name',
                        `chamber_address`='$c_address',
                        `contact_number`='$c_contact',
                        `chamber_area_pin`='$c_pin',
                        `chamber_remarks`='$c_remarks',
                        `record_updated_on`=now()
                        where id='$cid'";

               $save_chamber=  mysqli_query($conn, $sql);
               if($save_chamber)
               {
                   echo "<script> alert('Chamber Info. Updated Successfully'); </script>";
                   
               }
               else
               {
                    echo "<script> alert('Something Went Wrong while updation Chamber Info.'); </script>";
               }
               
            }
               
                   $insd="";
                   
                   
                   
                   
                   if(isset($_POST['timing']))
                   {
                      
                       $cid=mysqli_real_escape_string($conn,$_GET['chid']);
                       $getchidq=  mysqli_query($conn, "select chamber_id from d_chambers where id='$cid'");
                       $getchidr=  mysqli_fetch_array($getchidq);
                       $c=$getchidr['chamber_id'];
                       $chamber_id=$c;
                       $deloldq=  mysqli_query($conn, "update d_chamber_days set record_status='D', record_updated_on=now() where chamber_id='$c' and record_status='A'");
                       if($deloldq)
                       {
                       
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
                   }
                   }
                   $csavestatus='saved';
               
               
            
            ?>
            
            
            <?php
            if(isset($_GET['chid']))
            {
                $chid=  mysqli_real_escape_string($conn,$_GET['chid']);
                $getchinfoq=  mysqli_query($conn, "SELECT `id`,`chamber_id`,`doctor_code`,`chamber_name`,
                                                    `chamber_address`,`contact_number`,`chamber_area_pin`,`chamber_remarks`
                                                FROM `d_chambers` where record_status='A' and id='$chid'");
                $getchinfor= mysqli_fetch_array($getchinfoq);
                
           
            $chamber_id= $getchinfor['chamber_id'];
            
            ?>
            
            
            
            
            
       <form action='#' method="post">
           <input type="hidden" value="<?php echo $getchinfor['id'];?>" name="cid">
                        <div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber</span>
                                <input name='c_name' type="text" class='form-control' placeholder="Chamber Name" value="<?php echo $getchinfor['chamber_name']; ?>" required="true">
                            </div>
                        </div><br><div class='col-lg-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Address</span>
                                <input name='c_address' type="text" class='form-control' placeholder="Chamber Address" value="<?php echo $getchinfor['chamber_address']; ?>">
                            </div>
                        </div>
                        <br>
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Contact Number</span>
                                <input name='c_contact' type="text" class='form-control' placeholder="Contact Number(s) Separated by coma(,)" value="<?php echo $getchinfor['contact_number']; ?>">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Area PIN</span>
                                <input type="text" class='form-control' name="c_pin" value="<?php echo $getchinfor['chamber_area_pin']; ?>" required="true">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style="margin-top: 10px">
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Chamber Remarks</span>
                                <input name='c_remarks' type="text" class='form-control' placeholder="Remarks for Paitients if Any" value="<?php echo $getchinfor['chamber_remarks']; ?>">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style='text-align: right;margin-top: 10px'>
                           
                           <input type="submit" class="btn btn-info btn-sm" value="Update Chamber Info."> 
                        </div>
       </form>
                        
            
            
            
            
            
            
            
            
            
            
            
            <br><br>
                        <hr style="margin-top: 70px">
                        <form action="#" method="post">
                        <div class="col-lg-12 table-responsive" style="margin-top: 50px">
                            
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Day</th><th>Opening Time-1</th><th>Closing Time-1</th><th>Patient Limit</th><th>Opening Time-2</th><th>Closing Time-2</th><th>Patient Limit</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                                <!--------------------------------- Sunday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Sunday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="sun" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Sunday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sun_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sun_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="sun_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sun_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sun_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="sun_l2"></td>        
                                </tr>
                                
                                
                                <!--------------------------------- Monday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Monday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="mon" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Monday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="mon_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="mon_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="mon_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="mon_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="mon_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="mon_l2"></td>        
                                </tr>
                                
                                
                                <!--------------------------------- Tuesday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Tuesday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="tue" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Tuesday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="tue_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="tue_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="tue_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="tue_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="tue_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="tue_l2"></td>        
                                </tr>
                                
                                
                                <!--------------------------------- Wednesday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Wednesday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="wed" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Wednesday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="wed_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="wed_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="wed_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="wed_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="wed_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="wed_l2"></td>        
                                </tr>
                                
                                <!--------------------------------- Thursday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Thursday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="thu" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Thursday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="thu_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="thu_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="thu_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="thu_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="thu_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="thu_l2"></td>        
                                </tr>
                                
                                <!--------------------------------- Friday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Friday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="fri" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Friday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="fri_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="fri_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="fri_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="fri_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="fri_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="fri_l2"></td>        
                                </tr>
                                
                                
                                
                                <!--------------------------------- Saturday       ----------------->
                            
                                <?php
                                $ot1="";$ct1="";$lim1="";$ot2="";
                                $ct2="";$lim2="";
                                $getdayq=  mysqli_query($conn, "SELECT `id`,
                                                                `chamber_id`,`week_day`,`opening_time1`,`closing_time1`,
                                                                `limit1`, `opening_time2`,`closing_time2`,`limit2`
                                                                FROM `d_chamber_days` where week_day='Saturday' and chamber_id='$chamber_id' and record_status='A'");
                                if(mysqli_num_rows($getdayq)>0)
                                {$r=  mysqli_fetch_array($getdayq);$chacked='Y';$ot1=$r['opening_time1'];
                                    $ct1=$r['closing_time1'];$lim1=$r['limit1'];$ot2=$r['opening_time2'];
                                    $ct2=$r['closing_time2'];$lim2=$r['limit2'];}
                                else{ $chacked='N';}
                                ?>
                                <tr>
                                    <td><input type="checkbox" name="sat" <?php if($chacked=='Y') {echo "checked='checked'";}?>></td>
                                    <td>Saturday</td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sat_ot1" value="<?php echo $ot1; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sat_ct1" value="<?php echo $ct1; ?>" style="padding-top:0px">
                                    </td>
                                    <td><input class="form-control input-sm" type="number" value="<?php echo $lim1; ?>" placeholder="Limit" name="sat_l1"></td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sat_ot2" value="<?php echo $ot2; ?>" style="padding-top:0px">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control input-sm" name="sat_ct2" value="<?php echo $ct2; ?>" style="padding-top:0px">
                                    </td>
                                        <td><input class="form-control input-sm" type="number" value="<?php echo $lim2; ?>" placeholder="Limit" name="sat_l2"></td>        
                                </tr>
                                
                                
                                
                                
                        
                            </tbody>
                        </table>
                        </div>   
                        
                        
                        <br>
                        
                        <div class="col-lg-12" style="text-align: right;">
                            <input type="hidden" value="timing" name="timing">
                           <input type="submit" class="btn btn-info btn-sm" value="Update Chamber Timing">
                            
                        </div>
                        
                    </form>
        </div>
        
        
        <?php
            } //main if
            ?>
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
