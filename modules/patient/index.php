<!DOCTYPE html>
<?php
include_once '../../config.php';
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>H-Factor</title>
  
  
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='../../css/page_style.css'>

     

      <style>
         
</style>
</head>

<body style="background-color: #eeefff; padding-top: 1px">

  <nav class="navbar navbar-default">
      <div id="header1" class="hidden-xs">
          <div class="container" style="max-width:80%">
              <div class="small">
                  <table width="100%">
                      <tr>
                          <td align="left">Contact Us | About US | FAQs</td>
                          <td align="right"><i class="fa fa-facebook-square sicon"></i> &nbsp;&nbsp;
                              <i class="fa fa-twitter-square sicon"></i>&nbsp;&nbsp;
                              <i class="fa fa-instagram" sicon></i>&nbsp;&nbsp;
                              <i class="fa fa-linkedin-square sicon"></i>
                          </td>
                      </tr>
                  </table>
              </div>
              </div>
          </div> 
          
          
          
      </div>
  <div class="container-fluid" id="navcontainer">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#" style="color:#ffffff">H-Factor</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="color:#ffffff"><a href="#">Home <span class="sr-only" style="color:#ffffff">(current)</span></a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#ffffff">Appointment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Doctor</a></li>
            <li><a href="#">Diagnostics</a></li>
            <li><a href="#">Nursing Service</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sample Collection</a></li>
            <li><a href="#">Diagnostics Report Delivery</a></li>
          </ul>
        </li>
        <li><a href="#" style="color:#ffffff">About US</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"  id='srchbx'>
        </div>
          <button type="submit" class="btn btn-info"> <i class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <li ><a href="master/" style="color:#ffffff"><i class="glyphicon glyphicon-log-in" style="color:#ffffff"></i> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <img class='img-fluid hidden-sm hidden-xs' src='../../images/doctor_banner.jpg' style="position: fixed; z-index: -2">

<div class="hidden-sm hidden-xs banner-caption" style="height: 340px; width: 400px; color: #ffffff">
    <h2>We have got the Best for You</h2>
                  
    <p>All registered doctors are highly experienced in their fields and
        produce excellent outcomes for patients</p>  
    
</div>

    
    
<div class="row2" style="z-index:1" >
        <div class="container" style="max-width: 80%">
            
           
                <div class="row">
                    <div class="hidden-lg hidden-md " style="min-height: 150px">
                        <br><br><br>
    <h3>We have got the Best for You</h3>
                  
    <p>All registered doctors are highly experienced in their fields and
        produce excellent outcomes for patients</p>  
</div>
                    <?php
            $getcatq=mysqli_query($conn,"select distinct(d_speciality) as s from d_doctor_info where record_status='A' order by s");
            while($getcatr=  mysqli_fetch_array($getcatq))
            {
                $s=$getcatr['s'];
                ?>
                
            <div class="spclhead col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo $s ?>
            </div>
                <?php
                $getdocq=  mysqli_query($conn,"select id,doctor_code,d_name,d_degree,d_profile_image from d_doctor_info where d_speciality='$s' and record_status='A'");
                while($getdocr=  mysqli_fetch_array($getdocq))
                {
                    $btnttid=$getdocr['doctor_code']."ttid"
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" onmouseover="showtt('<?php echo $btnttid; ?>')">
                        <div class="doctile-sm" >
                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td rowspan="2" class="doc-th-con">
                                        
                                                <img class="doc-thumbnail" src="../../master/doctor/picuploader/uploads/<?php 
                                                if($getdocr['d_profile_image']=="")
                                                {
                                                    echo "dummy_doctor_image.png";
                                                }
                                                else
                                                {
                                                    echo $getdocr['d_profile_image'];
                                                }
                                                ?>" alt="..." > 
                                        
                                    </td>
                                    <td valign="bottom" align="left" style="height: 20px;">
                                        <div class="doc-td-name"><?php echo $getdocr['d_name'] ?></div>
                            
                                    </td>
                                    <td id="<?php echo $btnttid; ?>" align="center" rowspan="2" valign="middle" class="doc-td-book" data-toggle="tooltip" data-placement="right" title="Click here to Book Appintment" onclick="getappointment('<?php echo $getdocr['doctor_code'] ?>')">
                                       <i class="glyphicon glyphicon-circle-arrow-right" ></i>

                                    </td>
                                </tr>
                                <tr><td align="left" valign="top" style="height: 30px">
                                    <p class="doc-p-exp"><?php if($getdocr['d_degree']=="")
                                    {
                                        echo '&nbsp;';
                                    }else
                                    {
                                      echo $getdocr['d_degree'];  
                                    }?></p>
                                    
                                    </td>
                                </tr>
                                
                                    
                                
                                    
                            </table>
                            
                            
                            
                      </div>
            </div>
            <?php
                }}
            ?> 
                   
                    
                    
                    
                    
                    
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container" style="width:80%">
            <div class="row" >
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <h5>H-Factor</h5>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <h5>Services</h5>
                <p>
                    <a href="#" class="btn btn-xs" role="link">Doctor's Appointment</a><br>
                    <a href="#" class="btn btn-xs" role="link">Diagnostics</a><br>
                    <a href="#" class="btn btn-xs" role="link">Nursing Services</a>
                </p>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <h5>Contact Us</h5>
                <p>
                <h6>Head Office</h6>
                
                TMC Road, Hapania, 1st Floor of UBI ATM
                <br>Sadar, Agartala, West Tripura, Tripura-799014<br>
e-mail: info@biht.in
                </p>
            </div>
                <div class="col-lg-3 col-md-12 col-sm-6 col-xs-12">
                <h5>Follow Us</h5>
                <p>
                    <i class="fa fa-facebook-square sicon"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-twitter-square sicon"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-instagram" sicon></i>&nbsp;&nbsp;&nbsp;&nbsp;
                              <i class="fa fa-linkedin-square sicon"></i>
                
                </p>
                <hr>
                <p>
                    Copyright 2019 © BIH Technologies Pvt. Ltd.
                </p>
            </div>
        </div>
    </div>
    </div>
    
<div id="gamodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Doctor's Appointment</h5>
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
    
    
    
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/jscript.js'></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
  
</script>
</body>

</html>
