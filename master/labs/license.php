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
            <?php include_once 'menu.php'; ?><hr>
            
                    
                   
            
            
            <div class="row">
                <div class='col-lg-12'>
                    <?php
                    $sql="";
                    
                        $sql="SELECT `d_labs`.`id`,`d_labs`.`lab_id`,
    `d_labs`.`lab_name`,
    `d_labs`.`lab_address`,
    (select d_lab_sw_lic.lic_type from d_lab_sw_lic where d_lab_sw_lic.lab_id=`d_labs`.`lab_id` and d_lab_sw_lic.record_status='A') as lic_typ,
    (select ifnull(d_lab_sw_lic.requested_on,'Not Requested') from d_lab_sw_lic where d_lab_sw_lic.lab_id=`d_labs`.`lab_id` and d_lab_sw_lic.record_status='A') as req_on
FROM `d_labs` where record_status='A'";
                    
                    
                    $labs=  mysqli_query($conn, $sql);
                    if(mysqli_num_rows($labs)>0)
                    {
                    ?>
                    <input type="text" class="form-control" id="srchlab" placeholder="Search Labs.."><br>
                    <table class="table table-bordered table-striped table-hover table-responsive" style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>Lab. Code</th>
                                <th>Lab. Name</th>
                                <th>Lab. Address</th>
                                <th>License Type</th>
                                
                                <th>License Applied</th>
                                <th>Licensing</th>
                    
                            </tr>
                        </thead>
                        <tbody id="labtable">
                        
                    <?php
                    while($labsr=  mysqli_fetch_array($labs))
                    { ?>
                        <tr>
                            <td>
                                <?php echo $labsr['lab_id']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['lab_name']; ?>
                            </td>
                            <td>
                                <?php echo $labsr['lab_address']; ?>
                            </td>
                            <td>
                               <?php echo $labsr['lic_typ']; ?> 
                            </td>
                            
                            
                                <td><?php echo $labsr['req_on']; ?> </td>
                                <td align="center"><button  class="btn btn-warning btn-sm" role="Button" onclick="licensingmodal('<?php  echo $labsr['lab_id'];  ?>')"><i class="glyphicon glyphicon-barcode"></i> License</button></td>
                    
                            
                            
                        </tr>
                            
                    <?php }} ?>
                            </tbody>
                    </table>
                </div>
            </div>
<div id="licensemodal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" id="clsbtn">&times;</button>
        <h5 class="modal-title">Lab Software Licensing</h5>
      </div>
      <div class="modal-body">
          <iframe id='licensingframe' style="height: 300px"></iframe>   
        
        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
            
            
            
            
            
            
            
            
            
            
            
            
    </div>
    <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="../../js/jscript.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <script type="text/javascript">
        
    $(document).ready(function(){
  $("#srchlab").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#labtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    
    
        </script>
        </body>
</html>
