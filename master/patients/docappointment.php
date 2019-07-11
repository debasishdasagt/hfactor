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

if(!isset($_SESSION))
{session_start();}
unset($_SESSION['tmpappid']);


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/page_style.css'>
    </head>
    <body>
        <div class="container">
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="patientsday.php">Today's Patients</a>
                <?php if($rolecd=='1003'){ ?>
                <a class='btn btn-info' role='button' href="newpatient.php">New Patient</a>
                <?php } else if($rolecd=='1001'){ ?>
                <a class='btn btn-info' role='button' href="selectch.php">New Patient</a>
                <?php } ?>
                
                <a class='btn btn-info' role='button' href="allpatients.php">All Patients</a>
                
                
            </div><hr>
            <div class="row">
                <form action="otphandler.php" method="post" id="getappfrm" >
                    <div class="col-lg-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Select Chamber</span>
                        <select class="form-control" name="chamber" id="chamber" onchange="getctimings()" data-toggle="tooltip" data-placement="bottom">
                            <option value="">Select Chamber</option>
                            <?php
                            
                            $did= mysqli_real_escape_string($conn,$_GET['did']);
                            $getchamberq=  mysqli_query($conn, "Select chamber_id,chamber_name from d_chambers where doctor_code='$did' and record_status='A'");
                            
                            while($getchamberr=  mysqli_fetch_array($getchamberq))
                            {
                                echo "<option value='".$getchamberr['chamber_id']."'>".$getchamberr['chamber_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                    
                    <br>
                <div class="col-lg-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Select Time</span>
                        <select class="form-control" name="chamber_time" id="chamber_time" data-toggle="tooltip" data-placement="bottom">
                            <option value="">Select Timing</option>
                            
                        </select>
                    </div>
                </div>
                    <input type="hidden" value="" name="appdate" id="appdate">
                    <hr>
                <div class="col-lg-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" name="pname" id="pname" placeholder="Patient's Name" required="true">
                    </div>
                </div><br>
                <div class="col-lg-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Address</span>
                        <input type="text" class="form-control" name="padd" id="padd" placeholder="Patient's Address" >
                        <input type="text" name="ppin" placeholder="PIN Code" class="form-control">
                    </div>
                </div>
                <br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Mobile Number</span>
                        <input type="text" class="form-control" name="pmob" id="pmob" placeholder="Valied Mobile Number"
                               onkeypress="return isNumber(event)"
                                       maxlength="10" required="true"
                                       oninvalid="this.setCustomValidity('Please Enter Valied Mobile Number')"
                                       oninput="this.setCustomValidity('')"
                                     
                               >
                    </div>
                    </div>
                
                    
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Reporting Time</span>
                        <input type="time" class="form-control" name="rtime" id="rtime" required="true">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 10px">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Remarks</span>
                        <input type="text" class="form-control" name="premarks" id="premarks" placeholder="Remarks"
                               >
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: right;">
                    <input type="submit" class="btn btn-success disabled btn-sm" id="getapp" role="button" value="Get Verification OTP" style=" margin-top: 10px">
                </div>
                </form>
                
            
        </div>
        
        
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/public.js'></script>
    <script>
        
        
        <?php
        if(isset($_GET['chid']))
            {
                ?>
                    $('#chamber').val(<?php echo $_GET['chid']; ?>)
                    getctimings();
                    <?php
            }
        ?>
        
        
        
        function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }
        
        
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});


$('#getappfrm').on('submit',function()
{
    var that = $(this),
    content=that.serialize();

    $('#getapp').val("Please Wait..");
    $('#getapp').addClass("disabled");
    $.ajax({
        url: 'otphandler.php',
        dataType: 'json',
        type: 'post',
        data: content,
        success: function(data)
        {
            if(data.success)
            {
                var otp=prompt("Please Enter The OTP received in you phone");
               if(otp != null)
               {
                   
                   otpchkprivate(otp,data.otpkey);
               }
               else
               {
                   $('#getapp').val("Resend OTP");
                   $('#getapp').removeClass("disabled");
               }
                //ncustotpchk(otp,data.otpkey);
            }
            else
            {
                alert(data.err);
                $('#getapp').val("Resend OTP");
                $('#getapp').removeClass("disabled");
            }
        }
    });
    return false;
});

  
</script>

    </body>
</html>
