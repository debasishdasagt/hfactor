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
  <title>i-Health Care</title>
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
    <?php
    if(isset($_GET['pid']))
    {
        $pid=  mysqli_real_escape_string($conn,$_GET['pid']);
        $getidq=  mysqli_query($conn,"select patient_id,chamber_id,app_completed from d_chamber_appointment where record_status='A' and id='$pid'");
        $getidr= mysqli_fetch_array($getidq);
        $patient_id=$getidr['patient_id'];
        $chamber_id=$getidr['chamber_id'];
        $appocomp=$getidr['app_completed'];
        if($appocomp=='Y')
        {
         ?>
    
    <div class="row" style="width:95%">
        <div class="col-lg-12">
            <h4>Appointment with doctor has been completed
        <?php
        $recptestq=  mysqli_query($conn, "select patient_id,test_id,get_test_name(test_id) as t_name from d_tests_recommended where patient_id='$patient_id' and record_status='A'");
        if(mysqli_num_rows($recptestq)>0)
        {
            echo " and following test has been recommanded by the Doctor <br><br>";
        }
        else{ echo ".";}
        
        if(mysqli_num_rows($recptestq)>0)
        {
            while($tnames=mysqli_fetch_array($recptestq))
            {
                echo $tnames['t_name'].", ";
            }
        }
            
            ?></h4>
        </div>
    </div>
    
    
    
    
    
    
    
    
    <?php
        }
        
        else{
            
    ?>
    <div class='container'>
        <div class="row">
            <div class="col-lg-12">
                <div class='input-group input-group-sm'>
                    
                    <input type="text" class="form-control" placeholder="Test(s) Recomended by Doctor..."  id="testsearch">
                    <div class='input-group-btn'>
                        <button class='btn btn-info' role='button' onclick="addtesttile($('#testsearch').val())"><i class='glyphicon glyphicon-plus'></i> Add</button>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12">
                <div class="plate" id="tests">No Test(s) Selected / Added.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-2 hidden-xs"></div>
            <div class="col-lg-10 col-sm-10 col-xs-12">
                <div class="checkbox">
                    <label><input type="checkbox" id="app_comp" checked="chacked"> Visited and consulted with doctor.</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" id="sendreq" checked="chacked" disabled="disabled"> Send Feedback Request to Patient.</label>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 text-right">
                <button class="btn btn-success btn-sm" role="button" onclick="aftervisit('<?php echo $_GET['pid']; ?>')">Submit</button>
            </div>
            <textarea class="form-control rounded-0 hidden" id="msg" rows="3"></textarea>
        </div>
        <?php
    }}
        ?>
    </div>
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../js/jquery-ui.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../js/jscript.js" charset="UTF-8"></script>
    <script>
        
        
        
        $('#testsearch').autocomplete({
            source: function(data,cbf)
            {
                $.ajax({
                    url: 'gettests.php',
                    method: 'GET',
                    dataType: 'json',
                    data: {test: data.term},
                    success: function(res)
                    {
                        cbf(res);
                    }
                })
            },
            select: function(event,ui)
            {
                
                addtesttile(ui.item.value);
                console.log(ui.item.value);
            }
        });
        
        
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            
          });

       
        
        </script>
    </body>
</html>
