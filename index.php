<!DOCTYPE html>
<?php
ob_start();
include_once 'config.php';

session_start();
unset($_SESSION['tmpappid']);

?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>eCure365</title>
  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel='stylesheet' href='bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='css/page_style.css'>

     

      <style>
         
</style>
</head>

<body>

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
        <a class="navbar-brand" href="#" style="color:#ffffff;">
            <div class=" hidden-xs hidden-sm"  style="
                 /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#5b5b5b+0,dbdbdb+100&0.58+0,1+45,1+100 */
                background: -moz-linear-gradient(top,  rgba(91,91,91,0.58) 0%, rgba(149,149,149,1) 45%, rgba(219,219,219,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  rgba(91,91,91,0.58) 0%,rgba(149,149,149,1) 45%,rgba(219,219,219,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  rgba(91,91,91,0.58) 0%,rgba(149,149,149,1) 45%,rgba(219,219,219,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#945b5b5b', endColorstr='#dbdbdb',GradientType=0 ); /* IE6-9 */

                 ;margin-top: -35px;
                 position: relative; padding:0px 3px 3px 3px; height: 90px; width: 220px; border-radius: 0px 0px 10px 10px;
                 box-shadow: 0px 5px 4px #444444">
                <img src="images/logo.png" width="100%">
            </div>
            <div class="hidden-lg hidden-md hidden-xs" style="margin-top: -40px; margin-left: -0px; position: relative">
                <img src="images/logo.png" width="90%">
            </div>
            
            <div class="hidden-lg hidden-md hidden-sm" style="margin-top: -30px; margin-left: -25px; position: relative">
                <img src="images/logo.png" width="90%">
            </div>
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="color:#ffffff"><a href="./">Home </a></li>
        
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#ffffff">Appointment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Doctor</a></li>
            <li><a href="#">Diagnostics</a></li>
            <li><a href="#">Nursing Service</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sample Collection</a></li>
            <li><a href="#">Diagnostics Report Delivery</a></li>
          </ul>
        </li> -->
       <li><a href="modules/patient" style="color: #ffffff;">Doctor's Appointment</a></li>
       <li><a href="modules/labs/" style="color: #ffffff;">Labs & Tests</a></li>
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

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/img1.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
          <h2 class="hidden-xs">Best Diagnostic service assured </h2><a href="modules/labs/" class="btn btn-danger btn-lg " role="button"><i class="glyphicon glyphicon-phone-alt"></i> Book Now</a> 
      </div>
    </div>
    <div class="item">
      <img src="images/img2.jpg" alt="..." class="img-responsive">
      <!-- <a href="https://www.freepik.com/free-photos-vectors/background">Background photo created by pressfoto - www.freepik.com</a> -->
      <div class="carousel-caption">
          <h2 class="hidden-xs">We have listed best doctors only for you and your loved ones </h2><h4 class="visible-xs">We have listed best doctors only for you and your loved ones </h4><a href="modules/patient/" class="btn btn-danger btn-lg " role="button"><i class="glyphicon glyphicon-phone-alt"></i> Book Now</a> 
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="container" id="tilecontainer" >
        <div class="row">
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="tile" id="tile1">
                
                    <h4>
                        DOCTOR'S APPOINTMENT
                    </h4>
                    <p>
                        healthcare is the maintenance or improvement of health via the prevention, diagnosis, and treatment of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals in allied health fields. Physicians and ealth via the prephysician associates are a part of these health professionals.
                    </p>
                    <div class="pull-left"> <a href="modules/patient/" class="btn btn-warning btn-sm" role="button">PROCEED</a> </div>
                
                
                </div></div>
            
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="tile" id="tile2">
                
                    <h4>
                        DIAGNOSTIC SERVICES
                    </h4>
                    <p>
                        Diagnosis is the identification of the nature and cause of a certain phenomenon. Diagnosis is used in many different disciplines, with variations in the use of logic, analytics, and experience, to determine "cause and effect". In systems engineering and computer science, it is typically used to determine the causes of symptoms, mitigations, and solutions
                    </p>
                    <div class="pull-left"> <a href="modules/labs/" class="btn btn-warning btn-sm" role="button">PROCEED</a> </div>
                
                </div></div>
           
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><div class="tile" id="tile3">
                
                <h4>
                       NURSING SERVICES
                    </h4>
                    <p>
                        Nursing is a profession within the health care sector focused on the care of individuals, families, and communities so they may attain, maintain, or recover optimal health and quality of life. Nurses may be differentiated from other health care providers by their approach to patient care, training, and scope of practice.</p>
                    <div class="pull-left"> <a href="#" class="btn btn-warning btn-sm" role="button">PROCEED</a> </div>
                
                
                </div></div>
            
        </div>
        
       
    </div>
    
    <div class="row2">
        <div class="container" style="max-width: 80%">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                    <h2>We have got the Best for You</h2>
                    <p style="color:#666666">All registered doctors are highly experienced in their fields and 
                        <br>produce excellent outcomes for patients</p>
                    <br><br>
                    </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="doctile left" ><div class="thumbnail">
                                <img src="images/doctor_default.png" alt="...">
                        </div>
                        <div class="caption">
                            <h4>Dr. Debasish Das</h4>
                            <hr>
                            <p>Here will be something special about the Doctor</p>
                            <a href="#" class="btn btn-info btn-sm" role="button">READ MORE</a>
                        </div></div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="doctile left" ><div class="thumbnail">
                                <img src="images/doctor_default.png" alt="...">
                        </div>
                        <div class="caption">
                            <h4>Dr. Dibyendu Sarkar</h4>
                            <hr>
                            <p>Here will be something special about the Doctor</p>
                            <a href="#" class="btn btn-info btn-sm" role="button">READ MORE</a>
                        </div></div>
                    </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="doctile left" ><div class="thumbnail">
                            <img src="images/doctor_default.png" alt="...">
                        </div>
                        <div class="caption">
                            <h4>Dr. Fistname Lastnmae</h4>
                            <hr>
                            <p>Here will be something special about the Doctor</p>
                            <a href="#" class="btn btn-info btn-sm" role="button">READ MORE</a>
                        </div></div>
                    </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="doctile left" ><div class="thumbnail">
                                <img src="images/doctor_default.png" alt="...">
                        </div>
                        <div class="caption">
                            <h4>Dr. Chinmay Biswas</h4>
                            <hr>
                            <p>Here will be something special about the Doctor</p>
                            <a href="#" class="btn btn-info btn-sm" role="button">READ MORE</a>
                        </div></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    <div id="regmodal" class="modal fade " role="dialog" style="background-color: rgba(0,0,0,0.8)">
        <div class="modal-dialog modal-lg" >

    <!-- Modal content-->
    <div class="modal-content fstmodal">
        
        <div class="modal-body">
            <div class="container" style="width:80%; min-height: 250px; max-height: 400px; overflow: auto; text-align: center">
                
                    
                        <form method="post" id="firstcust">
                            <div class="row">
                            <div class="col-lg-12" >
                            <div class="input-group" id="mobnum">
                                <input type="text" class="form-control" name="pmob" id="mob" onkeypress="return isNumber(event)" onkeyup="checkmob()"
                                       placeholder="Please Enter Your 10 Digit Mobile Number" maxlength="10" required="true"
                                       oninvalid="this.setCustomValidity('Please Enter your Mobile Number')"
                                       oninput="this.setCustomValidity('')" autocomplete="off">
                                <span class="btn btn-success input-group-addon" onclick="checkmob()"><i class="glyphicon glyphicon-menu-right"></i></span>
                            </div>
                            </div>
                            </div>
                            <div id="otherinfo" class="collapse"> 
                                
                                <div class="alert alert-info alert-dismissable" style="margin-top: 20px;text-align: left">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Hey, </strong> Please Enter following details. We won't ask you for these details again.</div>
        
        
                                <div class="row" style="margin-top:20px">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <input type="text" name="pname" placeholder="Your Name" class="form-control input-sm"  style="margin-top: 5px">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="input-group input-group-sm" style="margin-top: 5px">
                                    <span class="input-group-addon">Date of Birth</span>
                                <input type="date" name="pdob" placeholder="Date of Birth" class="form-control" style="padding-top:0px">
                                </div>
                            </div>
                            </div>
                                <div class="row" style="margin-top:20px">
                                    <div class="col-lg-12">
                                        <div class="input-group input-group-sm" style="width: 100%">
                                        <input type="text" name="paddress" placeholder="Your Address" class="form-control">
                                        <span class="input-group-btn" style="width:0px;"></span>
                                        <input type="text" name="ppin" placeholder="PIN Code" class="form-control">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success disabled" id="newcustsubmit" value="Get Appointment" style="margin-top: 30px">

                        </form>
                
          </div>
      </div>
      <div class="modal-footer" style="border-top:0px">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Go To Website</button>
      </div>
    </div>

  </div>
</div>            
           
    <div id="footer">
        <div class="container" style="width:80%">
            <div class="row" >
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <h5>eCure365</h5>
                
                help@ecure365.com
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
                BIH Technologies Pvt. Ltd.<br>
                TMC Road, Hapania, 1st Floor of UBI ATM
                <br>Sadar, Agartala, West Tripura, Tripura-799014<br>
e-mail: ecure365@biht.in
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
    
    
    <script src='js/jquery-3.2.1.min.js'></script>
    <script src='bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='js/public.js'></script>


    <script>
        
        function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ( (charCode > 31 && charCode < 48) || charCode > 57) {
            return false;
        }
        return true;
    }
        
        <?php if(!isset($_SESSION['pmobile']))
        { ?>
        $(document).ready(function()
        {
            $('#mobnum').css('margin-top', '80px');
            $('#regmodal').modal('show');
            
        })
        <?php } 
        
        ob_end_flush();?>
        
        
        
$('#firstcust').on('submit',function()
{
    var that = $(this),
    content=that.serialize();
    $('#newcustsubmit').val("Please Wait..");
    $('#newcustsubmit').addClass("disabled");
    $.ajax({
        url: 'modules/patient/fcustotphandler.php',
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
                   
                   ncustotpchk(otp,data.otpkey);
               }
               else
               {
                   $('#newcustsubmit').val("Resend OTP");
                   $('#newcustsubmit').removeClass("disabled");
               }
                //ncustotpchk(otp,data.otpkey);
            }
            else
            {
                alert(data.err);
                $('#newcustsubmit').val("Resend OTP");
                $('#newcustsubmit').removeClass("disabled");
            }
        }
    });
    return false;
});
        
        </script>

</body>

</html>
