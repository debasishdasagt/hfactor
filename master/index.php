<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>eCure365</title>
  <link rel='stylesheet' href='../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='../css/page_style.css'>

</head>
<body style="background-color: #4288b5; padding: 0px; margin: 0px;">
    
<?php
include_once '../config.php';
$login=false;
$err="";
if($_SERVER['REQUEST_METHOD']=== "POST")
{
    if($_POST['usrid']!="" && $_POST['passwd']!="")
    {
        $userid=  mysqli_real_escape_string($conn,$_POST['usrid']);
        $passwd=  mysqli_real_escape_string($conn,$_POST['passwd']);
        $r=  mysqli_query($conn, "select count(id) as c from d_user_password where user_id='$userid' and user_password=md5('$passwd') and record_status='A'");
        if (!$r) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
        $res=  mysqli_fetch_array($r);
        if($res['c'] >= 1)
        {
            $login=true;
            
            $_SESSION['loginid']=$userid;
            $getroleq=  mysqli_query($conn, "select user_role_code from d_user_role where record_status='A' and user_id='$userid'");
            $rolr=  mysqli_fetch_array($getroleq);
            $_SESSION['rolecode']=$rolr['user_role_code'];
            header("Location: memberdashboard.php");
            
        }
        else
        {
            $login=FALSE;
            $err="Incorrect UserID or Password entered";
        }
    }
    else
    {
        $login=false;
       $err="UserID or Password Not Entered";
       
    }
}



?>
    
     
    <div class="jumbotron vertical-center">
        
  <div class="container" id="login_container">
      
      
      <?php
      if(!$login && $err != "")
      {
      ?>
      <div class="alert alert-danger alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error! </strong> <?php echo $err; ?>
    </div> 
      <?php }
      
      
      ob_end_flush();
      ?>
      
      
      <div class="row">
          <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"><br><br><br>
              <img src="../images/login_icon.png">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br><br>
              <h4>Member Login</h4>
              <hr>
              <form action="#" method="post">
                   <div class="input-group logininputs">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                       <input type="text" class="form-control" name="usrid" id="usrid" placeholder="User ID" autocomplete="off">
                   </div>
                  <br>
                  <div class="input-group logininputs">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password">
                   </div>
                  <br>
                  <input type="submit" value="Login" class="btn btn-success btn-sm logininputs" role="button"> 
                  <a href="javascript:history.go(-1)" class="btn btn-danger btn-sm logininputs" role="button" style="margin-top: 3px">Close</a>
              </form><br>
              
              
              <br>
          </div>
      </div>
  </div>
</div>
    
    <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    
    </body>
</html>
