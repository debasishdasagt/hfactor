<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../../config.php';
$pname="";
$pmob="";
$paddress="";
if(!isset($_SESSION))
{session_start();}
unset($_SESSION['tmpappid']);

if(isset($_SESSION['pmobile']))
{
    $pmob=$_SESSION['pmobile'];
    $getPq=  mysqli_query($conn, "select patient_name,patient_address,mobile_number from d_patient_info where mobile_number='$pmob' and record_status='A' order by id desc limit 1");
    $getPr= mysqli_fetch_array($getPq);
    $pname=$getPr['patient_name'];
    $pmob=$getPr['mobile_number'];
    $paddress=$getPr['patient_address'];
}
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
            <div class="row">
                <form action="otphandler.php" method="post" id="getappfrm" >
                <div class="col-lg-12">
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
                <div class="col-lg-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Select Time</span>
                        <select class="form-control" name="chamber_time" id="chamber_time" data-toggle="tooltip" data-placement="bottom">
                            <option value="">Select Timing</option>
                            
                        </select>
                    </div>
                </div>
                    <input type="hidden" value="" name="appdate" id="appdate">
                    <hr>
                <div class="col-lg-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" name="pname" id="pname" placeholder="Patient's Name" value="<?php echo $pname; ?>">
                    </div>
                </div><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Address</span>
                        <input type="text" class="form-control" name="padd" id="padd" placeholder="Patient's Address" value="<?php echo $paddress; ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Mobile Number</span>
                        <input type="text" class="form-control" name="pmob" id="pmob" placeholder="Valied Mobile Number"
                               onkeypress="return isNumber(event)"
                                       maxlength="10" required="true"
                                       oninvalid="this.setCustomValidity('Please Enter Valied Mobile Number')"
                                       oninput="this.setCustomValidity('')"
                                       value="<?php echo $pmob; ?>"
                               >
                    </div>
                </div>
                <div class="col-lg-12" style="text-align: right;">
                    <input type="submit" class="btn btn-success disabled btn-sm" id="getapp" role="button" value="Get Verification OTP" style=" margin-top: 10px">
                </div>
                </form>
                
            </div>
        </div>
        
        
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/public.js'></script>
    <script>
        
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
    $('#getapp').addClass('disabled');
    $('#getapp').val("Please Wait....");
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
                   
                   otpchk(otp,data.otpkey);
               }
               else
               {
                   $('#getapp').val("Resend OTP");
                   $('#getapp').removeClass("disabled");
               }
                
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
