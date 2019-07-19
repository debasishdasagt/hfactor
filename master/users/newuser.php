<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
$test_id="";
$lsavestatus="0";
$usertype="";
$uid=$_SESSION['loginid'];
$roleck= mysqli_query($conn, "select user_role_code from d_user_role where user_id='$uid' and record_status='A'");
$roleckr=  mysqli_fetch_array($roleck);
$rolecd= $roleckr['user_role_code'];

?>

<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>Doctor 24/7</title>
  <link rel='stylesheet' href='../../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='../../css/page_style.css'>
  <link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="userinfo.php">User Info</a>
                <?php
                if($rolecd=="1001")
                {
                ?>
                <a class='btn btn-info' role='button' href="allusers.php">All Users</a>
                <a class='btn btn-info' role='button' href="newuser.php">New User</a>
                <?php } ?>
            </div><hr>
            <div class="row">
            <div class='jumbotron'>
                <div class='container'>
                    <h3>New User Account Creation</h3>
                    <hr>
                    
                    <?php
                    $c=true;
                    if($_SERVER['REQUEST_METHOD']=="POST" )
                      {
                        $usrid=  mysqli_real_escape_string($conn,$_POST['userid']);
                        $usrfname=  mysqli_real_escape_string($conn,$_POST['userfname']);
                        $usraddess=  mysqli_real_escape_string($conn,$_POST['useraddress']);
                        $usremail=  mysqli_real_escape_string($conn,$_POST['useremail']);
                        $usrmobile=  mysqli_real_escape_string($conn,$_POST['usermobile']);
                        $usrdob=  mysqli_real_escape_string($conn,$_POST['userdob']);
                        $usrlogin=mysqli_real_escape_string($conn,$_POST['loginid']);
                        $usrpass=mysqli_real_escape_string($conn,$_POST['newpassword1']);
                        $usrrole=mysqli_real_escape_string($conn,$_POST['userrole']);
                        $usrlab=mysqli_real_escape_string($conn,$_POST['labs']);
                        $usrcham=mysqli_real_escape_string($conn,$_POST['chambers']);
                    
                    $insinf=  mysqli_query($conn,"INSERT INTO `d_user_info`
                                                    (`user_id`,`full_name`,`aadress`,`email_id`,`mobile_number`,`user_varified`,`reg_date`,`user_dob`,`created_on`,`record_status`)
                                                    VALUES('$usrlogin','$usrfname','$usraddess','$usremail','$usrmobile','N',curdate(),'$usrdob',now(),'A')");

                    if($insinf)
                    {
                        $inspass=  mysqli_query($conn, "INSERT INTO `d_user_password`
                                                            (`user_id`,`user_password`,`record_status`,`created_on`)
                                                            VALUES('$usrlogin',md5('$usrpass'),'A',now())");
                        $insrole=  mysqli_query($conn, "INSERT INTO `d_user_role`
                                                            (`user_id`,`user_role_code`,`record_status`,`record_created_on`)
                                                            VALUES('$usrlogin','$usrrole','A',now())");
                        if($insrole && $inspass )
                        {
                            if($usrrole=='1002')
                            {
                                $inslab=  mysqli_query($conn, "INSERT INTO `d_user_lab_mapping`
                                                                (`user_id`,
                                                                `lab_id`,
                                                                `record_status`,
                                                                `record_crreated_on`)
                                                                VALUES('$usrlogin','$usrlab','A',now())");
                            }
                            
                            else if($usrrole=='1003')
                            {
                                $inscham=  mysqli_query($conn, "INSERT INTO `d_user_chamber_mapping`
                                                                (`user_id`,
                                                                `chamber_id`,
                                                                `record_status`,
                                                                `record_crreated_on`)
                                                                VALUES('$usrlogin','$usrcham','A',now())");
                            }else { $c=FALSE; }
                        }else { $c=FALSE; }
                    } else { $c=FALSE; }
                    
                    
                    if(c)
                    {?>
                                                    <div class="alert alert-info alert-dismissable">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Info! </strong> User Account is created successfully 
                                                    </div> 
                       <?php 
                    }
                      }
                    ?>
                    
                    <form action="#" method="post" id="userinfo">
                       
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">User Full Name</span>
                            <input type="text" class="form-control" name="userfname" placeholder="User's Full Name">
                        </div>
                    </div>
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Address</span>
                            <input type="text" class="form-control" name="useraddress" placeholder="User's Full Address">
                        </div>
                    </div>
                           
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">E-Mail</span>
                            <input type="text" class="form-control" name="useremail" placeholder="e-mail address">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Mobile Number</span>
                            <input type="text" class="form-control" name="usermobile" placeholder="Active contact Number">
                        </div>
                    </div>
                            
                            
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Date of Birth</span>
                            <input type="text" class="form-control" name="userdob" placeholder="yyyy-mm-dd">
                        </div>
                    </div>
                    
                            
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Login ID</span>
                            <input type="text" class="form-control" name="loginid" id="loginid" placeholder="Login ID" >
                        </div>
                    </div>   
                            
                         
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Password</span>
                            <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Password">
                        </div>
                    </div>
                           
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Repeat Password</span>
                            <input type="password" class="form-control" name="newpassword1" id="newpassword1" placeholder="Confirm New Password">
                        </div>
                    </div>
                            
                            
                      
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">User Role</span>
                            <select class="form-control" id="userrole" name="userrole" onchange="rolechange()">
                                <?php
                                $utypq=  mysqli_query($conn, "SELECT `m_user_roles`.`role_code`,
    `m_user_roles`.`role` FROM `m_user_roles` where record_status='A'");
                                while ($utypr=  mysqli_fetch_array($utypq))
                                {?>
                                <option value="<?php echo $utypr['role_code']; ?>"><?php echo $utypr['role']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; display: none" id="lab">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Laboratory</span>
                            <select class="form-control" id="labs" name="labs">
                                <?php
                                $labq=  mysqli_query($conn, "SELECT `d_labs`.`lab_id`,`d_labs`.`lab_name` FROM `d_labs` where record_status='A'");
                                while ($labr=  mysqli_fetch_array($labq))
                                {?>
                                <option value="<?php echo $labr['lab_id']; ?>"><?php echo $labr['lab_id']."-".$labr['lab_name']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                 <br>
                
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; display: none" id="chamber">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Chamber</span>
                            <select class="form-control" id="chambers" name="chambers">
                                <?php
                                $chamberq=  mysqli_query($conn, "SELECT chamber_id,chamber_name FROM `d_chambers` where record_status='A'");
                                while ($chamberr=  mysqli_fetch_array($chamberq))
                                {?>
                                <option value="<?php echo $chamberr['chamber_id']; ?>"><?php echo $chamberr['chamber_id']."-".$chamberr['chamber_name']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                
                
                
                
                <br>
                           
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom:10px; text-align: right">
                       
                        <a href="#" class="btn btn-info btn-sm" role="button" onclick="valuid()"><i class="glyphicon glyphicon-floppy-disk"></i> Submit</a>
                    </div>
                            
                            
            </form></div> </div> </div></div>    
                        
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src="../../js/jscript.js" type="text/javascript"></script>
    
    <?php
    if(isset($_GET['labid']))
    { $labid=$_GET['labid'];
        ?>
    <script type="text/javascript">
        $('#userrole').val('1002');
        $('#labs').val('<?php echo $labid; ?>');
        $('#lab').css('display','block');
        $('#chamber').css('display','none');
    </script>
    <?php } ?>
    
    <?php
    if(isset($_GET['chamberid']))
    { $chamberid=$_GET['chamberid'];
        ?>
    <script type="text/javascript">
        $('#userrole').val('1003');
        $('#chambers').val('<?php echo $chamberid; ?>');
        $('#chamber').css('display','block');
        $('#lab').css('display','none');
    </script>
    <?php } ?>
    
    
    
</body>
</html>
