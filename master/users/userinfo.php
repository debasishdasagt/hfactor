<?php
//error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once 'loginhandler.php';
include_once '../../config.php';
$user_id="";
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
            <div class='btn-group btn-group-sm'>
                <a class='btn btn-info' role='button' href="userinfo.php">User Info</a>
                <?php
                if($rolecd=="1001")
                {
                ?>
                <a class='btn btn-info' role='button' href="newuser.php">New User</a>
                <?php } ?>
            </div><hr>
            <div class="row">
               
                    
                
                 <div class="jumbotron">
                     
                     <?php
                    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['usermobile']) && $_POST['usermobile']!="" )
                      {
                        $usrid=  mysqli_real_escape_string($conn,$_POST['userid']);
                        $usrfname=  mysqli_real_escape_string($conn,$_POST['userfname']);
                        $usraddess=  mysqli_real_escape_string($conn,$_POST['useraddress']);
                        $usremail=  mysqli_real_escape_string($conn,$_POST['useremail']);
                        $usrmobile=  mysqli_real_escape_string($conn,$_POST['usermobile']);
                        $usrdob=  mysqli_real_escape_string($conn,$_POST['userdob']);
                        $usrregdate=  mysqli_real_escape_string($conn,$_POST['userregdate']);
                        $usrvarified=  mysqli_real_escape_string($conn,$_POST['uservarified']);
                        
                        $delinfq=  mysqli_query($conn, "update d_user_info set record_status='D',modified_on=now() where record_status='A' and user_id='$usrid'");
                        if($delinfq)
                        {
                            $insinfq=mysqli_query($conn, "INSERT INTO `d_user_info`
                                                            (`user_id`,
                                                            `full_name`,
                                                            `aadress`,
                                                            `email_id`,
                                                            `mobile_number`,
                                                            `user_varified`,
                                                            `reg_date`,
                                                            `user_dob`,
                                                            `created_on`,
                                                            `record_status`)
                                                            VALUES
                                                            ('$usrid','$usrfname','$usraddess','$usremail','$usrmobile','$usrvarified','$usrregdate','$usrdob',now(),'A')");
                            if($insinfq)
                            {
                                
                                    ?>
                                    <div class="alert alert-info alert-dismissable">
                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Info! </strong> User Info Updated Successfully
                                    </div> 
                                <?php
                            }       
                            
                        
                        }
                      }
                    ?>
                     
                     
                     
                     <?php
                    $usertid="";
                    if(isset($_GET['uid']))
                    {$userid=$_GET['uid']; }
                    else {$userid=$_SESSION['loginid'];}
                    
                    $userinfo=mysqli_query($conn,"SELECT `d_user_info`.`user_id`,
                                    `d_user_info`.`full_name`,
                                    `d_user_info`.`aadress`,
                                    `d_user_info`.`email_id`,
                                    `d_user_info`.`mobile_number`,
                                    `d_user_info`.`user_varified`,
                                    `d_user_info`.`reg_date`,
                                    `d_user_info`.`user_dob`
                                FROM `d_user_info` where user_id='$userid' and record_status='A'");
                    
                    if(mysqli_num_rows($userinfo)>0)
                    {
                        $uinfo= mysqli_fetch_array($userinfo);
                        $user_id= $uinfo['user_id'];
                     ?>
                     
                    
                    <h3>Current / Selected User Information</h3>
                    <hr>
                    <form action="#" method="post">
                        <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">User Full Name</span>
                            <input type="text" class="form-control" name="userfname" value="<?php echo $uinfo['full_name']; ?>">
                            <input type="hidden" value="<?php echo $uinfo['reg_date']; ?>" name="userregdate">
                            <input type="hidden" value="<?php echo $uinfo['user_varified']; ?>" name="uservarified">
                        </div>
                    </div>
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Address</span>
                            <input type="text" class="form-control" name="useraddress" value="<?php echo $uinfo['aadress']; ?>">
                        </div>
                    </div>
                           
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">E-Mail</span>
                            <input type="text" class="form-control" name="useremail" value="<?php echo $uinfo['email_id']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Mobile Number</span>
                            <input type="text" class="form-control" name="usermobile" value="<?php echo $uinfo['mobile_number']; ?>">
                        </div>
                    </div>
                            
                            
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Date of Birth</span>
                            <input type="text" class="form-control" name="userdob" value="<?php echo $uinfo['user_dob']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; text-align: right">
                        <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                        <input type="submit" value="Update" class="btn btn-info btn-sm" role="button">
                    </div>
                            
                            
                            
                        </div>
                    <?php
                    }
                    else{echo "No Information Found";};
                    
                    ?>
                    </form>
                        
                   
                    </div>
                
                
                <div class="jumbotron">
                    
                        <?php
                    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['newpassword1']) && $_POST['newpassword1']!="" )
                      {
                        $usrid=  mysqli_real_escape_string($conn,$_POST['userid']);
                        $oldpass=  mysqli_real_escape_string($conn,$_POST['oldpass']);
                        $newpass1=  mysqli_real_escape_string($conn,$_POST['newpassword']);
                        $newpass2=  mysqli_real_escape_string($conn,$_POST['newpassword1']);
                        
                        if($newpass1 == $newpass2)
                        {
                            $delpassq=  mysqli_query($conn, "update d_user_password set record_status='D',modified_on=now() where record_status='A' and user_id='$usrid' and user_password=md5('$oldpass')");
                            if($delpassq && mysqli_affected_rows($conn)>=1)
                            {
                                $inspassq=mysqli_query($conn, "INSERT INTO `d_user_password`(`user_id`,
                                                                `user_password`,
                                                                `record_status`,
                                                                `created_on`)
                                                                VALUES('$usrid',md5('$newpass1'),'A',now())");
                                if($inspassq)
                                {

                                        ?>
                                        <div class="alert alert-info alert-dismissable">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Info! </strong> Password Updated Successfully.
                                        </div> 
                                    <?php

                                }

                            }
                            else {
                                        ?>
                                                    <div class="alert alert-danger alert-dismissable">
                                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Error! </strong> Something Went Wrong.
                                                    </div> 
                                        <?php
                                 }
                        }
                        else {
                            ?>
                                        <div class="alert alert-danger alert-dismissable">
                                           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>Error! </strong> Password Not Confirmed.
                                        </div> 
                            <?php
                        }
                      }
                    ?>
                    
                    
                    
                    
                    
                    <h4>User Password Reset</h4>
                    <hr>
                    <form action="#" method="post">
                        <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Old Password</span>
                            <input type="password" class="form-control" name="oldpass" placeholder="Old Password">
                        </div>
                    </div>
                        
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">New Password</span>
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                        </div>
                    </div>
                           
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">Repeat Password</span>
                            <input type="password" class="form-control" name="newpassword1" placeholder="Confirm New Password">
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px; text-align: right">
                        <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                        <input type="submit" value="Update" class="btn btn-info btn-sm" role="button">
                    </div>
                            
                            
                            
                        </div>
                    
                    </form>
                        
                   
                    </div>
                
                
                
                
                <div class="jumbotron">
                    
                    <?php
                    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['userrole']) && $_POST['userrole']!="" )
                      {
                        $usrid=  mysqli_real_escape_string($conn,$_POST['userid']);
                        $usrrole=  mysqli_real_escape_string($conn,$_POST['userrole']);
                        $usrlab=  mysqli_real_escape_string($conn,$_POST['labs']);
                        
                        $delroleq=  mysqli_query($conn, "update d_user_role set record_status='D',record_modified_on=now() where record_status='A' and user_id='$usrid'");
                        if($delroleq)
                        {
                            $insroleq=mysqli_query($conn, "INSERT INTO `d_user_role`(`user_id`,
                                                            `user_role_code`,
                                                            `record_status`,
                                                            `record_created_on`)
                                                            VALUES('$usrid','$usrrole','A',now())");
                            if($insroleq)
                            {
                                if($usrrole=="1002")
                                {
                                    $delrlmq=  mysqli_query($conn, "update d_user_lab_mapping set record_status='D',record_updated_on=now() where record_status='A' and user_id='$usrid'");
                                    if($delrlmq)
                                    {
                                        $insrlmq=mysqli_query($conn, "INSERT INTO `d_user_lab_mapping`(`user_id`,
                                                                        `lab_id`,
                                                                        `record_status`,
                                                                        `record_created_on`)
                                                                        VALUES('$usrid','$usrlab','A',now())");
                                        if($insrlmq)
                                        {
                                            ?>
                                                    <div class="alert alert-info alert-dismissable">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Info! </strong> User Role Updated Successfully with Lab allocation 
                                                    </div> 
                                            <?php
                                        }
                                    }
                                    
                                    
                                }
                                else{
                                    ?>
                                    <div class="alert alert-info alert-dismissable">
                                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong>Info! </strong> User Role Updated Successfully
                                    </div> 
                                <?php
                                }
                            }
                        
                        }
                      }
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    <h4>User Role Management</h4>
                    <hr>
                    <form action="#" method="post">
                        <div class="container">
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
                    </div> <br>
                           
                    
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-6 col-lg-offset-6" style="margin-bottom:10px; text-align: right">
                        <input type="hidden" name="userid" value="<?php echo $user_id ?>">
                        <input type="submit" value="Update" class="btn btn-info btn-sm" role="button">
                    </div>
                            
                            
                            
                        </div>
                    
                    </form>
                        
                   
                    </div>
                
                
                
                
                </div>    
            </div>
     <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src="../../js/jscript.js" type="text/javascript"></script>
</body>
</html>