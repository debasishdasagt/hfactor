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
  <title>i-Health Care Login</title>
  <link rel='stylesheet' href='../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='../css/page_style.css'>

</head>
<body style="background-color: #4288b5">
       
    <div class="jumbotron vertical-center"> 
  <div class="container" id="login_container">
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
                       <input type="text" class="form-control" name="usrid" id="usrid" placeholder="User ID">
                   </div>
                  <br>
                  <div class="input-group logininputs">
                       <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password">
                   </div>
                  <br>
                  <input type="submit" value="Login" class="btn btn-success btn-sm logininputs" role="button"> 
              </form><br>
              <a href="#" class="btn btn-link" role="link">Forget or Reset Password</a>
              
              <br>
          </div>
      </div>
  </div>
</div>
    
    <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    
    </body>
</html>
