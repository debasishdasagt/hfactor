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
  <title>i-Health Care</title>
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
                <a class='btn btn-info' role='button' href="patientsday.php">Today's Patients</a>
                
                <a class='btn btn-info' role='button' href="newpatient.php">New Patient</a>
                <a class='btn btn-info' role='button' href="allpatients.php">All Patients</a>
                
                
            </div><hr>
            
          
            
            
            
            <div class="row">
                <div class='col-lg-12 table-responsive'>
                    <?php
                    $psql="";
                    if($rolecd=="1001")
                    {
                        $psql="SELECT `d_chamber_appointment`.`id`,`d_chamber_appointment`.`slot_seq`,`d_chamber_appointment`.`patient_id`,
    `d_chamber_appointment`.`chamber_id`,`d_chamber_appointment`.`app_time_from`,`d_chamber_appointment`.`app_time_to`,
    `d_chamber_appointment`.`app_date`,`d_chamber_appointment`.`app_reporting_time`, `d_chamber_appointment`.`app_confirmed`,
    `d_chamber_appointment`.`app_completed`,`d_chamber_appointment`.`app_remarks`,
    d_patient_info.patient_name,d_patient_info.mobile_number FROM `d_chamber_appointment`,d_patient_info  
where d_patient_info.patient_id=d_chamber_appointment.patient_id and d_chamber_appointment.record_status='A' and `d_chamber_appointment`.`app_date`=curdate()
order by `d_chamber_appointment`.`app_time_from`, `d_chamber_appointment`.`slot_seq`";
                    }
                    
                    else if($rolecd=="1003")
                    {
                        $psql="SELECT `d_chamber_appointment`.`id`,
    `d_chamber_appointment`.`slot_seq`,`d_chamber_appointment`.`patient_id`,`d_chamber_appointment`.`chamber_id`,`d_chamber_appointment`.`app_time_from`,
    `d_chamber_appointment`.`app_time_to`,`d_chamber_appointment`.`app_date`,`d_chamber_appointment`.`app_reporting_time`,
    `d_chamber_appointment`.`app_confirmed`,`d_chamber_appointment`.`app_completed`,`d_chamber_appointment`.`app_remarks`,
    d_patient_info.patient_name, d_patient_info.mobile_number FROM `d_chamber_appointment`,d_patient_info  
where d_patient_info.patient_id=d_chamber_appointment.patient_id and d_chamber_appointment.chamber_id='$chamber_id'  and d_chamber_appointment.record_status='A' and `d_chamber_appointment`.`app_date`=curdate()
order by `d_chamber_appointment`.`app_time_from`, `d_chamber_appointment`.`slot_seq`";
                    }
                        
                        
                        
                    
                    $appq=  mysqli_query($conn, $psql);
                    
                            
                    ?>
                    <input type="text" class="form-control" id="srchlab" placeholder="Search Patients.."><br>
                    <table class="table table-bordered table-striped table-hover" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>Time Slot</th>
                                <th>Slot Sl.</th>
                                <th>Patient Name</th>
                                <th>Mobile Number</th>
                                
                                <th>Reporting Time</th>
                                <th>Remarks</th>
                                <th>Confirmed</th>
                                <th>Visited</th>
                    
                            </tr>
                        </thead>
                        <tbody id="labtable">
                        
                    <?php
                    while($appr=  mysqli_fetch_array($appq))
                    {
                     ?>
                        <tr>
                            <td>
                              <?php echo  $appr['app_time_from']."-".$appr['app_time_to']; ?>
                            </td>
                            <td>
                                <?php echo $appr['slot_seq']; ?>
                            </td>
                            <td>
                               <?php echo $appr['patient_name']; ?>
                            </td>
                            <td>
                                <?php echo $appr['mobile_number']; ?>
                            </td>
                            <td>
                                <div class="input-group date form_time input-group-sm" data-date="" data-date-format="hh:ii" data-link-field="c_t" data-link-format="hh:ii">
                                <input class="form-control input-sm" size="16" type="text" value="<?php if($appr['app_reporting_time']!="00:00:00"){echo substr($appr['app_reporting_time'],0,5);} else {echo "";}?>" readonly placeholder="HH:MM" id='<?php echo $appr['id']."rep"; ?>'>
				<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                                <input type="hidden" name="c_t" id='c_t' value="<?php if($appr['app_reporting_time']!="00:00:00"){echo substr($appr['app_reporting_time'],0,5);} else {echo "";}?>">
                            </td>
                            <td align="center">
                                <input type="text" class='form-control input-sm' placeholder="Remarks" id='<?php echo $appr['id']."rem"; ?>' value="<?php if($appr['app_remarks']!=""){echo $appr['app_remarks'];} else {echo "";}?>">
                            </td>
                            
                            <td align='center'>
                                <div class='btn-group btn-group-xs' id='<?php echo $appr['id']."acs"; ?>'>
                                    <?php
                                    if($appr['app_confirmed']!='Y')
                                    {
                                    ?>
                                    
                                    <button onclick="appconfirm('<?php echo $appr['id']."rep"; ?>','<?php echo $appr['id']."rem"; ?>','<?php echo $appr['id']; ?>')" class='btn btn-success btn-xs' role='Button'>Confirm</button>
                                    <?php
                                    }
                                    else{
                                        ?>
                                    <i class='glyphicon glyphicon-ok-circle'></i> Confirmed
                                            <?php
                                    }
                                    ?>
                                </div>
                            </td>
                             <td>
                                
                                 <a href='#' class='btn btn-info btn-xs' role='Button' onclick="visitedp('<?php echo $appr['id']; ?>')">Visited</a>
                                
                            </td>
                    
                            
                            
                        </tr>
                            
                    <?php } ?>
                            </tbody>
                    </table>
                </div>
            </div>
            
<div id="visitedmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Patient Visited</h5>
      </div>
      <div class="modal-body">
          <iframe id='appointmentframe'></iframe>   
        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>            
            
            
            
            
            
            
            
    </div>
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../js/jscript.js" charset="UTF-8"></script>
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
