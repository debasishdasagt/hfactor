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
                <a class='btn btn-info' role='button' href="allusers.php">All Users</a>
                <a class='btn btn-info' role='button' href="newuser.php">New User</a>
                <?php } ?>
            </div><hr>
            <div class="row">
               
                    
                
                 <div class="jumbotron">
                     
                     
                    
                    <h4>View / Modify Users</h4>
                    <hr>
                    <div class="container">
                        
                        <div class="row">
                <div class='col-lg-12'>
                    <?php
                    $sql="";
                    
                        $sql="select d_user_info.`user_id`, d_user_info.`full_name`,(select d_user_role.user_role_code from d_user_role where d_user_role.user_id=d_user_info.user_id and d_user_role.record_status='A') as role_cd from d_user_info where d_user_info.record_status='A'";
                    
                    
                    $labs=  mysqli_query($conn, $sql);
                    if(mysqli_num_rows($labs)>0)
                    {
                    ?>
                    <input type="text" class="form-control" id="srchlab" placeholder="Search Labs.."><br>
                    <table class="table table-bordered table-striped table-hover table-responsive" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th>User Office</th>
                                
                                <th>Edit User</th>
                                <th>Activate / Deactivate</th>
                    
                            </tr>
                        </thead>
                        <tbody id="labtable">
                        
                    <?php
                    while($labsr=  mysqli_fetch_array($labs))
                    { ?>
                        <tr>
                            <td>
                                <?php echo $labsr['user_id']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['full_name']; ?>
                            </td>
                            <td>
                                <?php 
                                $rlcd=$labsr['role_cd'];
                                $getusertypq=  mysqli_query($conn, "select role from m_user_roles where role_code='$rlcd' and record_status='A' ");
                                $getusertypr= mysqli_fetch_array($getusertypq);
                                echo $getusertypr['role'];?>
                            </td>
                            <td>
                                <?php 
                                $usrid=$labsr['user_id'];
                                if($rlcd=="1002")
                                {
                                 $getoffcq=  mysqli_query($conn, "select lab_id from d_user_lab_mapping where user_id='$usrid' and record_status='A' ");
                                $getoffcr= mysqli_fetch_array($getoffcq);
                                echo $getoffcr['lab_id'];
                                }
                                else if($rlcd=="1003")
                                {
                                 $getoffcq=  mysqli_query($conn, "select chamber_id from d_user_chamber_mapping where user_id='$usrid' and record_status='A' ");
                                $getoffcr= mysqli_fetch_array($getoffcq);
                                echo $getoffcr['chamber_id'];
                                }
                                
                                ?>
                            </td>
                            
                            
                            <td></td>
                                <td align="center"><a href="deletelab.php?id=<?php echo $labsr['id']; ?>" class="btn btn-danger btn-sm" role="Button"><i class="glyphicon glyphicon-trash"></i></a></td>
                    
                            
                            
                        </tr>
                            
                    <?php }} ?>
                            </tbody>
                    </table>
                </div>
            </div>
                        
                        
                        
                        
                        
                    </div>
                 </div>
     <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script src="../../js/jscript.js" type="text/javascript"></script>
</body>
</html>