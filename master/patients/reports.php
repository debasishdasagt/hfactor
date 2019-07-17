<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'loginhandler.php';
include_once '../../config.php';
//error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
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
                <h4>Reports</h4>
            </div>
            <div class="row">
                <form action="#" method="post">
                    <div class="col-lg-12">
                        <select name="rtype" id="rtype" class="form-control input-sm" required="true">
                        <option value="">Select Report</option>
                        <option value="1">All Patients</option>
                        <option value="2">Patients With Test(s) Recommendation</option>
                    </select>
                    </div>
                    <div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top: 10px">
                            <div class="input-group input-group-sm">
                            <span class="input-group-addon">From Date</span>
                            <input class="form-control input-sm" type="date" name="fdate" autocomplete="off" value="<?php echo date("Y-m-d");?>" style="padding-top: 0px">
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="margin-top: 10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">To Date</span>
                        <input class="form-control input-sm" type="date" name="tdate" autocomplete="off" value="<?php echo date("Y-m-d");?>" style="padding-top: 0px">
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12" style="text-align: center; padding-top: 10px">
                        &nbsp;<br>
                        <input type="submit" class="btn btn-info btn-sm" value="Generate Report">
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <?php
                    
                    if(isset($_POST['rtype']))
                    {
                        $r=  mysqli_real_escape_string($conn,$_POST['rtype']);
                        switch ($r)
                        {
                            case "1":
                                include_once 'reports/r1.php';
                                break;
                            case "2":
                                include_once 'reports/r2.php';
                                break;
                            default :
                                echo "No Report Selcted";
                                break;
                        }
                    }
                    
                    
                    ?>
                </div>
            </div>
            
            
        </div>
        
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    

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
