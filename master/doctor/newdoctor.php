<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'loginhandler.php';
?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>eCure365</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../../css/uploadfile.css" rel="stylesheet">
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
        <div class="container">
            <?php include_once 'menu.php'; ?><hr>
            <div class="well" style="text-align: center">
                <h4>New Doctor Registration</h4>
            </div>
            <div class="row">
                <form id='newdoc'>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" placeholder="Doctor's Name" id='dname'>
                    </div>
                </div>
                    
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Hospital / Nursing Home</span>
                        <input type="text" class="form-control" placeholder="Doctor's Hospital" id='dhospital'>
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Designation</span>
                        <input type="text" class="form-control" placeholder="Designation in Hospital" id='ddesignation'>
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Experience </span>
                        <input type="text" class="form-control" placeholder="Doctor's Expirience" id='dexpirience'>
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                        <div class="input-group input-group-sm">
                        <span class="input-group-addon">Doctor's Degree</span>
                        <input type="text" class="form-control" placeholder="Qualifications" id='ddegree'>
                    </div>
                   
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">E-Mail ID</span>
                        <input type="text" class="form-control" placeholder="e-mail address" id='demail'>
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon">Mobile Number</span>
                        <input type="text" class="form-control" placeholder="Contact Number" id='dmob'>
                    </div>
                        
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Consultation Fee</span>
                        <input type="text" class="form-control" placeholder="Doctor's Consultation Fee" id='dfee'>
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                     <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle btn-sm" type="button" data-toggle="dropdown" id='dspecialdd'>Doctor's Speciality
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" id='dspecial'>
                              <li><a href='#'>CARDIOLOGIST</a></li>
<li><a href='#'>CARDIOLOGY</a></li>
<li><a href='#'>CHILD SPECIALIST</a></li>
<li><a href='#'>DENTIST</a></li>
<li><a href='#'>DERMATOLOGIST (SKIN)</a></li>
<li><a href='#'>DIABETOLOGIST</a></li>
<li><a href='#'>E.N.T</a></li>
<li><a href='#'>EYE SPECIALIST</a></li>
<li><a href='#'>GYNAECOLOGIST</a></li>
<li><a href='#'>HOMEOPATHY</a></li>
<li><a href='#'>MEDICINE</a></li>
<li><a href='#'>NEPHROLOGIST</a></li>
<li><a href='#'>NEUROLOGIST</a></li>
<li><a href='#'>NEUROSURGEON</a></li>
<li><a href='#'>ONCOLOGY</a></li>
<li><a href='#'>ORTHOPEDIC</a></li>
<li><a href='#'>PAEDIA NEPHROLOGIST</a></li>
<li><a href='#'>PSYCHIATRIST</a></li>
<li><a href='#'>RHEUMATOLOGIST</a></li>
<li><a href='#'>SPINE SURGEON</a></li>
<li><a href='#'>SURGEON</a></li>
<li><a href='#'>UROLOGIST</a></li></ul>
                        </div>
                </div>
                    
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-6 " style="text-align: right">
                        <br>
                       
                        <a class='btn btn-info btn-sm' role='Button' href='#' onclick="javascript:saved()" id='sdbtn'>Submit</a>
                </div>
                    
                    
                </form>
            </div>
        </div>
        
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Doctor Registration</h4>
      </div>
      <div class="modal-body">
          <h4>Doctor has been registered Successfully</h4>
        <hr>
        <div id="fileuploader">Upload</div>
        <br>
        <h4>Upload Doctor's Profile Picture</h4>
        <hr>
        
        <a href='addchamber.php' class='btn btn-info btn-sm' role='button'>Add Chamber</a> for the Doctor.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src="../../js/jquery.uploadfile.js"></script>
    <script type="text/javascript" src='../../js/jscript.js'></script>
    <script>
$(document).ready(function()
{
	$("#fileuploader").uploadFile({
	url:"picuploader/upload.php",
	fileName:"myfile"
	});
});
</script>
    </body>
</html>
