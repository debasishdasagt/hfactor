<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include_once 'loginhandler.php';
?>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>H-Factor</title>
  
  
  <link rel='stylesheet' href='../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='../css/page_style.css'>

     
  <style>
     
  </style>
  
    </head>
    <body>
         <!-- The sidebar -->
<div class="sidebar">
    <a class="active" href="#home"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
  <a href="#news"><i class="glyphicon glyphicon-user"></i> User Management</a>
  <a href="doctor/newdoctor.php" target="adminframe"><i class="glyphicon glyphicon-plus-sign"></i> Doctors</a>
  <a href="#contact"><i class="glyphicon glyphicon-heart-empty"></i> Patients</a>
  <a href="labs/index.php" target="adminframe"><i class="glyphicon glyphicon-search"></i> Diagnostic Labs</a>
  <a href="#about"><i class="glyphicon glyphicon-briefcase"></i> Nursing Care</a>
  <a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a>
</div>

<!-- Page content -->
<div class="content" id="wrapper">
    <iframe name="adminframe" id="adminframe" src="dashboard.php" class="adminframe"></iframe>
</div> 
        
        <script src='../js/jquery-3.2.1.min.js'></script>
    <script src='../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    
    <script type="text/javascript">
      
      $(function(){
    $('#wrapper').css({'height':($(document).height()-3)+'px'});
    $(window).resize(function(){
        $('#wrapper').css({'height':($(document).height()-3)+'px'});
    });
});
      </script>
    </body>
</html>
