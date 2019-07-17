        

<?php
$test_id="";
$lsavestatus="0";
$usertype="";
$fdate=  mysqli_real_escape_string($conn,$_POST['fdate']);
$tdate=  mysqli_real_escape_string($conn,$_POST['tdate']);
$uid=$_SESSION['loginid'];
$roleck= mysqli_query($conn, "select user_role_code from d_user_role where user_id='$uid' and record_status='A'");
$roleckr=  mysqli_fetch_array($roleck);
$rolecd= $roleckr['user_role_code'];
$doctor_code="";
if($rolecd=='1003')
{
    $docidq=  mysqli_query($conn, "select dc.doctor_code as docid from d_chambers dc inner join d_user_chamber_mapping ducm on
dc.chamber_id=ducm.chamber_id and ducm.user_id='$uid' and dc.record_status='A' and ducm.record_status='A';");
    $docidr=  mysqli_fetch_array($docidq);
    $doctor_code=$docidr['docid'];
    ?>
<h2>Report For Doctor</h2> 

        <?php
        $getlistq=  mysqli_query($conn, "select dca.app_date as ad, concat(dca.app_time_from ,'-', dca.app_time_to) as ts , get_patient_name(dca.patient_id) as pn, if(dca.app_completed='Y','Yes','No') as v
 from d_chambers dc inner join d_user_chamber_mapping ducm inner join d_chamber_appointment dca on
dc.chamber_id=ducm.chamber_id and ducm.user_id='$uid' and dc.record_status='A' and ducm.record_status='A'
and dca.chamber_id=dc.chamber_id and dca.record_status='A' and dca.app_date between '$fdate' and '$tdate';");
        if(mysqli_num_rows($getlistq)>0)
        {
        ?>
<div class="col-lg-12" style="text-align: right"><div class="btn-group btn-group-sm">
                <button class="btn btn-default">PDF</button>
                <a class="btn btn-default" href="reports/r1csv.php?fd=<?php echo $fdate; ?>&td=<?php echo $tdate; ?>" target="blank">CSV</a> 
    </div></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Date</th>
            <th>Time Slot</th>
            <th>Patient Name</th>
            <th>Visited</th>
            
        </tr>
    </thead>
    <tbody>
<?php
        while($getlistr= mysqli_fetch_array($getlistq))
        {
            ?>

        <tr>
            <td><?php echo $getlistr['ad']; ?></td>
            <td><?php echo $getlistr['ts']; ?></td>
            <td><?php echo $getlistr['pn']; ?></td>
            <td><?php echo $getlistr['v']; ?></td>
        </tr>
        <?php
        }?>
    </tbody>
</table>
    <?php }
 else {Echo "No data Found";}
        
}
else if($rolecd=='1001')
{
    ?>
<h2>Report For Admin</h2> 

        <?php
        $getlistq=  mysqli_query($conn, "select get_doctor_name(dc.doctor_code) as dn, dca.app_date as ad, concat(dca.app_time_from ,'-', dca.app_time_to) as ts , get_patient_name(dca.patient_id) as pn, if(dca.app_completed='Y','Yes','No') as v
 from d_chambers dc inner join d_user_chamber_mapping ducm inner join d_chamber_appointment dca on
dc.chamber_id=ducm.chamber_id and dc.record_status='A' and ducm.record_status='A'
and dca.chamber_id=dc.chamber_id and dca.record_status='A' and dca.app_date between '$fdate' and '$tdate';");
        if(mysqli_num_rows($getlistq)>0)
        {
        ?>
<div class="col-lg-12" style="text-align: right"><div class="btn-group btn-group-sm">
                <button class="btn btn-default">PDF</button>
                <a class="btn btn-default" href="reports/r1csv.php?fd=<?php echo $fdate; ?>&td=<?php echo $tdate; ?>" target="blank">CSV</a> 
    </div></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Doctor</th>
            <th>Date</th>
            <th>Time Slot</th>
            <th>Patient Name</th>
            <th>Visited</th>
            
        </tr>
    </thead>
    <tbody>
<?php
        while($getlistr= mysqli_fetch_array($getlistq))
        {
            ?>

        <tr>
            <td><?php echo $getlistr['dn']; ?></td>
            <td><?php echo $getlistr['ad']; ?></td>
            <td><?php echo $getlistr['ts']; ?></td>
            <td><?php echo $getlistr['pn']; ?></td>
            <td><?php echo $getlistr['v']; ?></td>
        </tr>
        <?php
        }?>
    </tbody>
</table>
    <?php }
 else {Echo "No data Found";}
    
}
?>