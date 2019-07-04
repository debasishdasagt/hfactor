<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width= device-width, initial-scale = 1">
  <title>eCure365</title>
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
        <div class='col-lg-12'>
                    <?php
                    include_once '../../config.php';
                    if(isset($_GET['lid']))
                    {
                        $lid=  mysqli_real_escape_string($conn,$_GET['lid']);
                    
                    $sql="select get_lab_name(lab_id) as lab_name,get_test_name(test_id) as test_name,test_rate from lab_test_mapping where lab_id='$lid' and record_status='A'";
                    
                    
                    $tests=  mysqli_query($conn, $sql);
                    if(mysqli_num_rows($tests)>0)
                    {
                    ?>
                    <input type="text" class="form-control input-sm" id="srchtest" placeholder="Search Test.."><br>
                    <table class="table table-bordered table-striped table-hover " style="font-size: 12px">
                        <thead>
                            <tr>
                                <th>Test Name</th>
                                <th>Test Price</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody id="testtable">
                        
                    <?php
                    while($testsr=  mysqli_fetch_array($tests))
                    { ?>
                        <tr>
                            <td>
                                <?php echo $testsr['test_name']; ?>
                            </td>
                            <td>
                                <?php echo "Rs. ".$testsr['test_rate']; ?>
                            </td>
                           
                            
                        </tr>
                            
                    <?php }}} ?>
                            </tbody>
                    </table>
                </div>
        
        <script src='../../js/jquery-3.2.1.min.js'></script>
    <script src='../../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
    <script>
$(document).ready(function(){
  $("#srchtest").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#testtable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    </body>
</html>
