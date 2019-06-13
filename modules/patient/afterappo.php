<!DOCTYPE html>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>H-Factor</title>
  
  
  <link rel='stylesheet' href='bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='css/page_style.css'>

     

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
    <img class='img-fluid hidden-sm hidden-xs' src='images/doctor_banner.jpg' style="position: fixed; z-index: -2">

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
                        $getidq=  mysqli_query($conn,"select patient_id,chamber_id,app_completed from d_chamber_appointment where record_status='A' and id='$par1'");
                        $getidr= mysqli_fetch_array($getidq);
                        $patient_id=$getidr['patient_id'];
                        $chamber_id=$getidr['chamber_id'];
                        $appocomp=$getidr['app_completed'];
                        $pnameq=  mysqli_query($conn, "select get_patient_name('$patient_id') as pname");
                        $pnamer= mysqli_fetch_array($pnameq);
                        $chnameq=  mysqli_query($conn, "select get_chamber_info('$chamber_id') as chname");
                        $chnamer= mysqli_fetch_array($chnameq);
                        
                        ?>
                        
                    
                    <div class="col-lg-12 text-left"><h1 style="color: #cccccc">  Hey <?php echo $pnamer['pname']?></h1>
                    
                    As we can see that you have visited <?php echo $chnamer['chname']?>
                    <?php
        $recptestq=  mysqli_query($conn, "select patient_id,test_id,get_test_name(test_id) as t_name from d_tests_recommended where patient_id='$patient_id' and record_status='A'");
        if(mysqli_num_rows($recptestq)>0)
        {
            echo " and following test(s) has been recommanded by the Doctor ";
        }
        else{ echo ".";}
        
        if(mysqli_num_rows($recptestq)>0)
        {
            echo "<ul>";
            while($tnames=mysqli_fetch_array($recptestq))
            {
                
                echo "<li>".$tnames['t_name']."</li>";
            }
            echo "</ul> Please find the best laboratory from below to get your tests done"
            . "<br><br>";
            $gettetscountq=  mysqli_query($conn, "select lab_name,lab_id,count(test_id) as tc from patient_test_pricing where patient_id='$patient_id' group by lab_id order by tc desc");
            while($gettetscountr=  mysqli_fetch_array($gettetscountq))
            {
                $lid=$gettetscountr['lab_id'];
            ?>
                    <div class="col-lg-6 col-md-12">
                        <div style="background-color: #ffffff; border-radius: 5px; padding: 10px; margin: 10px; box-shadow: 0px 0px 5px #000000; width: 100%; height: 200px" >
                            <h4><?php echo  $gettetscountr['lab_name'];?></h4>
                            <hr>
                            <?php
                            $tp=0;
                            $gettq=  mysqli_query($conn, "select test_name,test_rate from patient_test_pricing where patient_id='$patient_id' and lab_id='$lid'");
                            echo "<ul>";
                            while($gettr=  mysqli_fetch_array($gettq))
                            {
                                echo "<li>".$gettr['test_name']." - Rs:".$gettr['test_rate']."</li>";
                                $tp=$tp+$gettr['test_rate'];
                            }
                            echo "</ul><br>";
                            echo "Total Cost Rs: $tp";
                            ?>
                        </div>
                    </div>
                    
                    
                    
                    
            <?php
        }}
            
            ?>
                    
                    
                    </div>
                        
                   
                    
                    
                    
                    
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
  <div class="modal-dialog modal-lg">

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
    
    
    
    <script src='js/jquery-3.2.1.min.js'></script>
    <script src='bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='js/public.js'></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
  
</script>
</body>

</html>
