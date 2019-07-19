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
            <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['l_name']) && $_POST['l_name']!="" )
            {
                $l_name=  mysqli_real_escape_string($conn,$_POST['l_name']);
                $l_address=  mysqli_real_escape_string($conn,$_POST['l_address']);
                $l_contact=  mysqli_real_escape_string($conn,$_POST['l_contact']);
                $c_time=  mysqli_real_escape_string($conn,$_POST['c_time']);
                $o_time=  mysqli_real_escape_string($conn,$_POST['o_time']);
                $l_pin=  mysqli_real_escape_string($conn,$_POST['l_pin']);
                $l_doctor=  mysqli_real_escape_string($conn,$_POST['l_doctor']);
                $sund= mysqli_real_escape_string($conn,$_POST['sunday']);
                $mond= mysqli_real_escape_string($conn,$_POST['monday']);
                $tued= mysqli_real_escape_string($conn,$_POST['tuesday']);
                $wedd= mysqli_real_escape_string($conn,$_POST['wednesday']);
                $thud= mysqli_real_escape_string($conn,$_POST['thursday']);
                $frid= mysqli_real_escape_string($conn,$_POST['friday']);
                $satd= mysqli_real_escape_string($conn,$_POST['saturday']);
                
                
                
                $lid=  mysqli_query($conn, "select get_lab_id() as lid");
                $lidr= mysqli_fetch_array($lid);
                $lab_id= $lidr['lid'];
                
                
                $sql="INSERT INTO `d_labs`
(
`lab_id`,
`lab_name`,
`lab_address`,
`lab_contact`,
`lab_area_pin`,
`lab_doctor`,
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
('$lab_id','$l_name','$l_address','$l_contact','$l_pin','$l_doctor','$o_time','$c_time','$sund','$mond','$tued','$wedd','$thud','$frid','$satd','A',now())";

               
               $save_lab=  mysqli_query($conn, $sql);
               if($save_lab)
               {
                   $lsavestatus='saved';
               }
               
            }
            ?>
            <div class='row'>
                <div class='jumbotron' style="background-color: #dfffff">
                    <h4>Add new Diagnostics Lab.</h4>
                    <hr>
                    <?php
                    if( $lsavestatus=="saved")
                    {
                        ?>
                    
                    <div class="alert alert-info alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Info! </strong> Lab. Saved with Lab. ID : <?php echo $lab_id ?>
        . <a href="../users/newuser.php?labid=<?php echo $lab_id ?>" role="button" class="btn btn-info btn-sm">Add User</a> for this Lab.     </div> 
                   <?php
                    }
                    
                    ?><div class='container'>
                    <form action='#' method="post">
                        <div class='col-lg-12'  style='margin-top: 10px'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Lab. Name</span>
                                <input name='l_name' type="text" class='form-control' placeholder="Labolatory Name">
                            </div>
                        </div><br><div class='col-lg-12' style='margin-top: 10px'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Lab. Address</span>
                                <input name='l_address' type="text" class='form-control' placeholder="Labolatory Address">
                            </div>
                        </div>
                        
                        <br><div class='col-lg-12' style='margin-top: 10px'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Contact Number</span>
                                <input name='l_contact' type="text" class='form-control' placeholder="Contact Number(s) Separated By Coma(,)">
                            </div>
                        </div>
                        
                        <br><div class='col-lg-6 col-md-6 col-sm-12 col-xs-12' style='margin-top: 10px'>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="o_t" data-link-format="hh:ii">
                                <span class='input-group-addon'>Opening Time</span>
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="o_time">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="o_t" value="00:00" />
                        </div>
                        
                       
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12 ' style='margin-top: 10px'>
                            <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <span class='input-group-addon'>Closing Time</span>
                                <input class="form-control" size="16" type="text" value="" readonly placeholder="HH:MM" name="c_time">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                            </div>
				<input type="hidden" name="c_t" value="23:59" />
                        </div>
                        <br><br><br>
                        
                        <div class='col-lg-12' style='margin-top: 10px'>
                            
                                    <div class="input-group input-group-sm" style="font-weight: normal">
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
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'  style='margin-top: 10px'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Lab. Area PIN</span>
                                <input type="text" class='form-control' name="l_pin" placeholder="Area PIN">
                            </div>
                        </div>
                        
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12'  style='margin-top: 10px'>
                            <div class='input-group input-group-sm'>
                                <span class='input-group-addon'>Lab. Doctor</span>
                                <input type="text" class='form-control' name="l_doctor" placeholder="Doctor In Lab.">
                            </div>
                        </div>
                        
                        
                         <br><br>
                        <div class='col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 col-md-offset-6' style='text-align: right; margin-top: 10px'>
                           
                            <input type="submit" class='btn btn-info btn-sm' value="Save Lab">
                           
                            
                        </div>
                        
                    </form></div><br>
                </div>
            </div>
            
            
            
            <div class="row">
                <div class='col-lg-12'>
                    <?php
                    $sql="";
                    
                        $sql="SELECT `d_labs`.`id`,`d_labs`.`lab_id`,
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
                    
                    
                    $labs=  mysqli_query($conn, $sql);
                    if(mysqli_num_rows($labs)>0)
                    {
                    ?>
                    <input type="text" class="form-control" id="srchlab" placeholder="Search Labs.."><br>
                    <table class="table table-bordered table-striped table-hover table-responsive" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>Lab. Code</th>
                                <th>Lab. Name</th>
                                <th>Lab. Address</th>
                                <th>Timing</th>
                                
                                <th>Open Days</th>
                                <th>Delete</th>
                    
                            </tr>
                        </thead>
                        <tbody id="labtable">
                        
                    <?php
                    while($labsr=  mysqli_fetch_array($labs))
                    { ?>
                        <tr>
                            <td>
                                <?php echo $labsr['lab_id']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['lab_name']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['lab_address']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['opening_time']; ?> - <?php echo $labsr['closing_time']; ?>
                            </td>
                            
                            
                                <td><?php 
                                $days="";
                                if($labsr['sunday_open'] == 'on')
                                {$days=$days."Sunday, ";}
                                if($labsr['monday_open'] == 'on')
                                {$days=$days."Monday, ";}
                                if($labsr['tuesday_open'] == 'on')
                                {$days=$days."Tuesday, ";}
                                if($labsr['wednesday_open'] == 'on')
                                {$days=$days."Webnesday, ";}
                                if($labsr['thursday_open'] == 'on')
                                {$days=$days."Thursday, ";}
                                if($labsr['friday_open'] == 'on')
                                {$days=$days."Friday, ";}
                                if($labsr['saturday_open'] == 'on')
                                {$days=$days."Satuday";}
                                
                                
                                echo $days;
                                ?></td>
                                <td align="center"><a href="deletelab.php?id=<?php echo $labsr['id']; ?>" class="btn btn-danger btn-sm" role="Button"><i class="glyphicon glyphicon-trash"></i></a></td>
                    
                            
                            
                        </tr>
                            
                    <?php }} ?>
                            </tbody>
                    </table>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
    </div>
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
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
    
    $(document).ready(function(){
  $("#srchlab").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#labtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    
    
        </script>
        </body>
</html>
