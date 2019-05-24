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
  <title>i-Health Care Login</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
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
        <div class='container'>
            <?php
            //if(!isset($_SESSION['doctorid']) || $_SESSION['doctorid']=="")
            //{?>
            <div class='row'>
                <div class='col-lg-12'>
                    <form id='srchdoc' action='#' method="post">
                      <div class='input-group input-group-lg'>
                          <input type="text" class='form-control' placeholder="Search Doctor by Name or Speciality" name='srchbox'>
                          <span class='input-group-btn'>
                              <input type="submit" class='btn btn-default' role='button' value="Search">
                          </span>
                      </div>
                    </form>
                    
                </div>
                
                <h4>Search Result for <strong> <?php echo  $_POST['srchbox'];?></strong></h4>
                    <hr>
                <?php
                if(isset($_POST['srchbox']) && $_POST['srchbox']!="")
                {
                    $stxt=  mysqli_real_escape_string($conn,$_POST['srchbox']);
                    $srchres=  mysqli_query($conn, "SELECT `d_doctor_info`.`id`,
    `d_doctor_info`.`doctor_code`,
    `d_doctor_info`.`d_name`,
    `d_doctor_info`.`d_hospital`,
    `d_doctor_info`.`d_designation`,
    `d_doctor_info`.`d_expirience`,
    `d_doctor_info`.`d_speciality`,
    `d_doctor_info`.`d_fee`,
    `d_doctor_info`.`d_mob`,
    `d_doctor_info`.`d_email`,
    ifnull(`d_doctor_info`.`d_profile_image`,'dummy_doctor_image.png') as image,
    `d_doctor_info`.`record_status`,
    `d_doctor_info`.`record_created_on`,
    `d_doctor_info`.`record_modified_on`
FROM `ihealthcare`.`d_doctor_info`
where concat(`d_doctor_info`.`d_name`,
    `d_doctor_info`.`d_hospital`,
    `d_doctor_info`.`d_designation`,
    `d_doctor_info`.`d_expirience`,
    `d_doctor_info`.`d_speciality`,
    `d_doctor_info`.`d_fee`,
    `d_doctor_info`.`d_mob`,
    `d_doctor_info`.`d_email`) like '%$stxt%'");
                    while($resr=mysqli_fetch_array($srchres))
                    {
                        ?>
                
                <div class='col-lg-3 col-md-3 col-sm-6 col-xs-11 tile_sm'>
                    
                    <table width='100%' border='0' cellspacing='4'>
                        <tr>
                            <td rowspan="2" width='75'><div class='thumbnail srchimg' style="margin-bottom: 0px"><img class='img-rounded img-responsive' src='<?php echo  "picuploader/uploads/".$resr['image'];?>'></div></td><td><strong><?php echo  $resr['d_name'];?></strong></td>
                        </tr>
                        <tr>
                            <td class='srchsubtxt'><?php echo  $resr['d_speciality'];?></td>
                        </tr>
                        <tr>
                            <td colspan="2" align='right'>
                                <a class='btn btn-info btn-xs' role='button' href=''>Select</a>
                            </td>
                        </tr>
                    </table>
                    
                    
                    
                </div>
                <?php
                    }}?>
                
                
            </div>
               <?php 
            //} 
            ?>
        </div>
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src='../../js/jscript.js'></script>
    </body>
</html>
