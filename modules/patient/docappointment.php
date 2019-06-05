<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../../config.php';
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
                <form action="#" method="post">
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
                        <input type="text" class="form-control" name="pname" id="pname" placeholder="Patient's Name">
                    </div>
                </div><br>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Address</span>
                        <input type="text" class="form-control" name="padd" id="padd" placeholder="Patient's Address">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Mobile Number</span>
                        <input type="text" class="form-control" name="pmob" id="pmob" placeholder="Valied Mobile Number">
                    </div>
                </div>
                <br><br>
                <div class="col-lg-12" style="text-align: right">
                    <button class="btn btn-success disabled btn-sm" id="getapp" role="button">Get Appointment</button>
                </div>
                </form>
                
            </div>
        </div>
        
        
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/public.js'></script>
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
  
</script>

    </body>
</html>
