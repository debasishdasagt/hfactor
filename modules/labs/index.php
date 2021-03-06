<!DOCTYPE html>
<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once '../../config.php';
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>Doctor 24/7</title>
  
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDM3kDtr3fESrA2j5JtNDrF5D0uvjiftQM" async defer></script>
  <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../js/jquery-ui.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src='../../js/public.js'></script>
    
  
  <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='../../css/page_style.css'>
  <link rel='stylesheet' href='../../css/jquery-ui.min.css'>

     

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
        <a class="navbar-brand" href="#" style="color:#ffffff;">
            <div  id='logodiv' class=" hidden-xs hidden-sm"  style="
                 /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#bababa+0,fcfcfc+100&0.58+0,1+45,1+100 */
background: -moz-linear-gradient(top,  rgba(186,186,186,0.58) 0%, rgba(216,216,216,1) 45%, rgba(252,252,252,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(186,186,186,0.58) 0%,rgba(216,216,216,1) 45%,rgba(252,252,252,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(186,186,186,0.58) 0%,rgba(216,216,216,1) 45%,rgba(252,252,252,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#94bababa', endColorstr='#fcfcfc',GradientType=0 ); /* IE6-9 */

                 ;margin-top: -35px;
                 position: relative; padding:0px 3px 3px 3px; height: 80px; width: 220px; border-radius: 0px 0px 10px 10px;
                 box-shadow: 0px 5px 4px #444444">
                <img src="../../images/logo.png" width="100%">
            </div>
            <div class="hidden-lg hidden-md hidden-xs" style="margin-top: -40px; margin-left: -0px; position: relative">
                <img src="../../images/logo_glow.png"  style="width: 180px; margin-top: 12px;" >
            </div>
            
            <div class="hidden-lg hidden-md hidden-sm" style="margin-top: -30px; margin-left: -25px; position: relative">
                <img src="../../images/logo_glow.png" style="width: 150px; margin-top: 12px;">
            </div>
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="../../" style="color:#ffffff">Home </a></li>
        
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
       <li><a href="../../modules/patient/" style="color: #ffffff;">Doctor's Appointment</a></li>
       <li class='active'><a href="./" style="color: #ffffff;">Labs & Tests</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"  id='srchbx'>
        </div>
          <button type="submit" class="btn btn-info"> <i class="glyphicon glyphicon-search"></i></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          <li ><a href="../../master/" style="color:#ffffff"><i class="glyphicon glyphicon-log-in" style="color:#ffffff"></i> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <img class='img-fluid hidden-sm hidden-xs' src='../../images/lab_banner.jpg' style="position: fixed; z-index: -2">

<div class="hidden-sm hidden-xs banner-caption" style="height: 340px; width: 400px; color: #ffffff">
    <h2>We have got the Best for You</h2>
                  
    <p>All registered diagnostic labs are highly efficient in their fields and
        produce excellent outcomes for everyone</p>  
    
</div>

    
    
<div class="row2" style="z-index:1" >
        <div class="container">
            
             <div class="hidden-lg hidden-md " style="min-height: 150px">
                        <br><br><br>
    <h3>We have got the Best for You</h3>
                  
    <p>All registered diagnostic labs are highly efficient in their fields and
        produce excellent outcomes for everyone</p>  
</div>
            <div class="row">
            <div class="col-lg-12"  style="margin-top: 20px">
                <div class='input-group input-group-sm'>
                    
                    <input type="text" class="form-control" placeholder="Add Test(s) to search..."  id="testsearch">
                    <div class='input-group-btn'>
                        <button class='btn btn-info' role='button' onclick="addtesttile($('#testsearch').val())"><i class='glyphicon glyphicon-plus'></i> Add</button>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12">
                <div class="plate" id="tests" style="text-align: left">No Test(s) selected or Added.
                    
                </div>
                <form method="post" id='tsrch'><input type="hidden" id='testsel' name='tests' value="na"> </form>
            </div>
        </div>
           
                <div class="row">
                   
                    
                    
                       
                    
                  <?php
                  if(isset($_POST['tests']))
                  {
                      $tests=  mysqli_real_escape_string($conn,$_POST['tests']);
                      $ts=  explode('ʭ', $tests);
                      $td="";
                      foreach($ts as $stt)
                      {
                          $st=  explode(" - ", $stt);
                          if($td != "")
                          {
                              $td=$td.",'".$st[1]."'";
                          }
                          else{ $td="'".$st[1]."'";}
                      }
            $gettetscountq=  mysqli_query($conn, "select lab_name,lab_id,count(test_id) as tc from test_pricing where test_name in ($td) group by lab_id order by tc desc");
            //echo "select lab_name,lab_id,count(test_id) as tc from test_pricing where test_name in ($td) group by lab_id order by tc desc";
            if(mysqli_num_rows($gettetscountq)>0)
            {
            while($gettetscountr=  mysqli_fetch_array($gettetscountq))
            {
                $lid=$gettetscountr['lab_id'];
            ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="labtile" >
                            
                            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td style="width:50%" class="hidden-xs">
                                        <div class="labtiletd1c1"><h5><strong><?php echo  $gettetscountr['lab_name'];?></strong></h5>
                                        
                                        <?php
                                       
                                        $getlabaddressq=  mysqli_query($conn, "select lab_address,lab_area_pin,lab_contact,lab_doctor from d_labs where lab_id='$lid' and record_status='A'");
                                        $getlabaddressr=  mysqli_fetch_array($getlabaddressq);
                                        echo "<ul>".$getlabaddressr['lab_address']."<br>";
                                        echo "PIN: ".$getlabaddressr['lab_area_pin']."<br>";
                                        echo "Contact Number: ".$getlabaddressr['lab_contact']."<br>";
                                        echo "Doctor: ".$getlabaddressr['lab_doctor']."<br></ul>";
                                        ?>
                                        
                                        </div>
                                        
                                    </td>
                                    <td style="width: 50%" valign="top" align="left">
                                        <div class="labtiletd2c1">
                                            <div class="labtiletdtitle hidden-lg hidden-md hidden-sm" data-toggle="tt" data-placement="bottom" title="<?php echo $getlabaddressr['lab_address'].", Mob:".$getlabaddressr['lab_contact']; ?>">
                                                <?php echo  $gettetscountr['lab_name'];?>
                                            </div>
                                        <?php
                                        $tp=0;
                                        $gettq=  mysqli_query($conn, "select test_name,test_rate from test_pricing where test_name in ($td) and lab_id='$lid'");
                                        echo "Available Tests:<ul>";
                                        while($gettr=  mysqli_fetch_array($gettq))
                                        {
                                            echo "<li>".$gettr['test_name']." - Rs:".$gettr['test_rate']."</li>";
                                            $tp=$tp+$gettr['test_rate'];
                                        }
                                        echo "</ul>";
                                        ?>
                                        </diV>
                                        <div class="labtiletd2c2"><?php echo "Total Cost Rs: <strong>".$tp."</strong>" ?></div>
                                    </td>
                                </tr>
                            </table>
                          
                            
                        </div>
                    </div>
                    
                    
                    
                    
            <?php
                  }}
                  else
                  {?>
                    
                    
                    <div style="margin-top: 50px; font-size: 18px; color: #cccccc"> <i class="glyphicon glyphicon-ban-circle" style="font-size:36px"></i> <br>No Labs Found for Selected Tests.</div>
                    
                    <?php
                  }}
                  else{
                    ?>
                    
                    
                    <br><br>
                    
                    <?php
                    
                    $csql="SELECT  `lab_id`, `lab_name`, `lab_address`, `lab_contact`, `lab_area_pin`,"
                            . "`lab_doctor`, `opening_time`, `closing_time`, `sunday_open`, `monday_open`, "
                            . "`tuesday_open`, `wednesday_open`, `thursday_open`, `friday_open`, `saturday_open`, "
                            . "`record_status`, `record_created_on`, `record_updated_on`, `d_labscol` FROM `d_labs`"
                            . " WHERE record_status='A'";
                $dc=  mysqli_query($conn, $csql);
                
                    
                while($dcr=  mysqli_fetch_array($dc))
                {
                    $days="";
                    if($dcr['sunday_open'] == 'on')
                    {$days=$days."Sunday, ";}
                    if($dcr['monday_open'] == 'on')
                    {$days=$days."Monday, ";}
                    if($dcr['tuesday_open'] == 'on')
                    {$days=$days."Tuesday, ";}
                    if($dcr['wednesday_open'] == 'on')
                    {$days=$days."Webnesday, ";}
                    if($dcr['thursday_open'] == 'on')
                    {$days=$days."Thursday, ";}
                    if($dcr['friday_open'] == 'on')
                    {$days=$days."Friday, ";}
                    if($dcr['saturday_open'] == 'on')
                    {$days=$days."Satuday";}
                    
                    
                    ?>
                
                <div class='col-lg-4 col-md-6 col-sm-6 col-xs-11 tile_sp'>
                    
                    
                    
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td style="width:50%; overflow: hidden" class="hidden-xs">
                                        <?php
                                            $getmapq=mysqli_query($conn,"select longitude,latitude,img from d_geo_location where offfice_type='Lab' and office_name='".$dcr['lab_id']."' and record_status='A'");
                                                if(mysqli_num_rows($getmapq)>0)
                                                {
                                                    $getmapr=  mysqli_fetch_array($getmapq);
                                                    $l1=$getmapr['longitude'];
                                                    $l2=$getmapr['latitude'];
                                                    $img=$getmapr['img'];
                                                    
                                                }
                                            ?>
                                        
                                        <div style="position: absolute; background-color:#818181; <?php if(mysqli_num_rows($getmapq)>0){ echo "background-image: url('../../geolocation/local_cdn_r/thumbnail_".$img."')" ; } ?> ;min-height: 150px; width: 300px; z-index: 4 " id='<?php echo  "labthumb_".$dcr['lab_id'];?>'></div>
                                        <div class="labtiletd1c1" style="position:relative; z-index: 5"><h5><strong><?php echo  $dcr['lab_name'];?></strong></h5>
                                        
                                       <strong>Doctor:</strong> <?php echo  $dcr['lab_doctor'];?>
                                       <br><strong>Time:</strong> <?php echo  $dcr['opening_time'];?> to <?php echo  $dcr['closing_time'];?>
                                       <br><strong>Days:</strong> <?php echo  $days;?>
                                        </div>
                                        
                                    </td>
                                    <td style="width: 50%" valign="top" align="left">
                                        <div style="position: absolute;background-color: #ededee;min-height: 150px; width: 250px; z-index: 6 " id='<?php echo  "labmap_".$dcr['lab_id'];?>'></div>
                                        
                                        <?php
                                          if(mysqli_num_rows($getmapq)>0)
                                          {
                                              ?>
                                        
                                        <script type="text/javascript">
                                            console.log("Setting Map");
                                            initMap('<?php echo $l1;?>','<?php echo $l2;?>','<?php echo  "labmap_".$dcr['lab_id'];?>')
                                            </script>
                                        
                                       <?php
                                          }
                                        ?>
                                        
                                        
                                        
                                        
                                        <div class="labtiletd2c1" style="position: relative; z-index: 7; background-color: rgba(255,255,255,0.9)">
                                            <br><strong>Address:</strong><?php echo  $dcr['lab_address'];?>
                                            
                                        </diV>
                                        
                                        <div class="labtiletd2c2" style="position: relative; z-index: 7;"><a  href="javascript:showtest('<?php echo  $dcr['lab_id'];?>')" style="color:white;font-weight: bold;">More Info <i class="glyphicon glyphicon-menu-right"> </i></a></div>
                                    </td>
                                </tr>
                            </table>
                    
                    
                 
                </div>
                
                
                <?php
                }   
 }
                ?>   
                    
                    
                    </div>
                        
                   
                    
                    
                    
                    
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container" style="width:80%">
            <div class="row" >
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <h5>Doctor 24/7</h5>
                
                help@doctor247.in
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
e-mail: doctor247@biht.in
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
    
<div id="tmodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header" style="border-bottom:0px">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title">Tests Available</h5>
      </div>
      <div class="modal-body">
          <iframe id='testsf' style="border:0px; width:100%; height: 300px"></iframe>   
        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    
    
    
    
<script>
    
    <?php
    
    if(isset($_POST['tests']))
    {
        $t = EXPLODE('ʭ',$_POST['tests']);
        foreach($t as $ts)
        { ?>
            addtesttile('<?php echo $ts ?>');
        <?php }} ?>
    
    
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

$(document).ready(function(){
  $('[data-toggle="tt"]').tooltip();
});
  
</script>
</body>

</html>
