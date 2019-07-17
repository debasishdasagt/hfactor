<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'loginhandler.php';
include_once '../../config.php';
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
                <h4>View / Edit Doctor</h4>
            </div>
            
            
            
            <?php
            if(isset($_GET['doctorid']))
            {
                $did=$_GET['doctorid'];
                $getdinfoq=  mysqli_query($conn, "SELECT `id`, `doctor_code`, `d_name`, `d_hospital`, "
                        . "`d_designation`, `d_expirience`, `d_degree`, `d_speciality`, `d_fee`, `d_mob`, "
                        . "`d_email`, ifnull(`d_doctor_info`.`d_profile_image`,'dummy_doctor_image.png') as image, `record_status`, `record_created_on`, `record_modified_on` "
                        . "FROM `d_doctor_info` where doctor_code='$did' and record_status='A'");
                $docinfor=  mysqli_fetch_array($getdinfoq);
                
            }
            ?>
            <div class="row">
                <form id='newdoc'>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" placeholder="Doctor's Name" id='dname' value="<?php echo $docinfor['d_name']; ?>">
                    </div>
                </div>
                    
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Hospital / Nursing Home</span>
                        <input type="text" class="form-control" placeholder="Doctor's Hospital" id='dhospital' value="<?php echo $docinfor['d_hospital']; ?>">
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Designation</span>
                        <input type="text" class="form-control" placeholder="Designation in Hospital" id='ddesignation' value="<?php echo $docinfor['d_designation']; ?>">
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Experience </span>
                        <input type="text" class="form-control" placeholder="Doctor's Expirience" id='dexpirience' value="<?php echo $docinfor['d_expirience']; ?>">
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                        <div class="input-group input-group-sm">
                        <span class="input-group-addon">Doctor's Degree</span>
                        <input type="text" class="form-control" placeholder="Qualifications" id='ddegree' value="<?php echo $docinfor['d_degree']; ?>">
                    </div>
                   
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">E-Mail ID</span>
                        <input type="text" class="form-control" placeholder="e-mail address" id='demail' value="<?php echo $docinfor['d_email']; ?>">
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                     <div class="input-group input-group-sm">
                        <span class="input-group-addon">Mobile Number</span>
                        <input type="text" class="form-control" placeholder="Contact Number" id='dmob' value="<?php echo $docinfor['d_mob']; ?>">
                    </div>
                        
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">Consultation Fee</span>
                        <input type="text" class="form-control" placeholder="Doctor's Consultation Fee" id='dfee' value="<?php echo $docinfor['d_fee']; ?>">
                    </div>
                </div>
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <br>
                     <div class="dropdown">
                            <button class="btn btn-warning dropdown-toggle btn-sm" type="button" data-toggle="dropdown" id='dspecialdd'><?php echo $docinfor['d_speciality']; ?>
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
                        <a href="alldoctors.php" class="btn btn-danger btn-sm " role="button" >Close</a>
              
                        <a class='btn btn-info btn-sm' role='Button' href='#' onclick="javascript:updated('<?php echo $docinfor['doctor_code']; ?>')" id='sdbtn'>Update</a>
                        
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
        <h4 class="modal-title">Doctor Updated Successfully</h4>
      </div>
        <div class="modal-body" >
         
        <div class='thumbnail srchimg' style="margin-bottom: 0px"><img class='img-rounded img-responsive' src='<?php echo  "picuploader/uploads/".$docinfor['image'];?>'></div>
        <?php if($docinfor['image']!='dummy_doctor_image.png'){ ?>Current Picture <a id="remdocimgbtn" class="btn btn-xs btn-danger" role="button" href="javascript:removeimg('<?php echo $did;?>')"> <i class="glyphicon glyphicon-trash"></i> Remove </a><?php } ?>
        <br> <br>
        <div id="fileuploader">Upload New Pic</div>
        <br>
        
        
        
      </div>
      <div class="modal-footer">
          <a href="alldoctors.php" class="btn btn-success" role="button"> Done </a>
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

setspcl('<?php echo $docinfor['d_speciality']; ?>');
</script>
    </body>
</html>
