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
                     ?>
                
                 <div class="jumbotron">
                    
                    <h3>Current / Selected User Information</h3>
                    <hr>
                    <form action="#" method="post">
                        <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">User Full Name</span>
                            <input type="text" class="form-control" name="userfname" value="<?php echo $uinfo['full_name']; ?>">
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
                        <a href="#" class="btn btn-info btn-sm" onclick="" role="button">Update</a>
                    </div>
                            
                            
                            
                        </div>
                    <?php
                    }
                    else{echo "No Information Found";};
                    
                    ?>
                    </form>
                        
                   
                    </div>
                
                
                <div class="jumbotron">
                    
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
                        <a href="#" class="btn btn-info btn-sm" onclick="" role="button">Update</a>
                    </div>
                            
                            
                            
                        </div>
                    
                    </form>
                        
                   
                    </div>
                
                
                
                
                <div class="jumbotron">
                    
                    <h4>User Role Management</h4>
                    <hr>
                    <form action="#" method="post">
                        <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:10px">
                        <div class="input-group input-group-sm">
                            <span class="input-group-addon">User Role</span>
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
                        <a href="#" class="btn btn-info btn-sm" onclick="" role="button">Update</a>
                    </div>
                            
                            
                            
                        </div>
                    
                    </form>
                        
                   
                    </div>
                
                
                
                
                </div>    
            </div>
     <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
</body>
</html>