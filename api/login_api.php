<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
include_once '../config.php';
$json=array(
    'success'=>false,
    'error'=>"",
    'lab_id'=>"",
    'lab_name'=>"",
    'lab_address'=>"",
    'lab_contact'=>"",
    'lab_area_pin'=>"",
    'lab_doctor'=>"",
    'lab_opening_time'=>"",
    'lab_closing_time'=>"",
    'record_created_on'=>"",
    'user_full_name'=>"",
    'user_address'=>"",
    'user_email_id'=>"",
    'user_mobile'=>"",
    'user_reg_date'=>"",
    'user_dob'=>"",
    
);

if($_SERVER['REQUEST_METHOD']=== "GET")
{
    if($_GET['usrid']!="" && $_GET['passwd']!="")
    {
        $userid=  mysqli_real_escape_string($conn,$_GET['usrid']);
        $passwd=  mysqli_real_escape_string($conn,$_GET['passwd']);
        $r=  mysqli_query($conn, "select count(id) as c from d_user_password where user_id='$userid' and user_password=md5('$passwd') and record_status='A'");
        if (!$r) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
        $res=  mysqli_fetch_array($r);
        if($res['c'] >= 1)
        {
            $s="SELECT `lab_id`,`lab_name`,`lab_address`,`lab_contact`,`lab_area_pin`,`lab_doctor`,`opening_time`,`closing_time`,
    `record_status`,`record_created_on`,`record_updated_on` FROM `d_labs` where lab_id = (select lab_id from d_user_lab_mapping where user_id='$userid' and record_status='A') and record_status='A'";
            $rr=  mysqli_query($conn,$s);
            if(mysqli_num_rows($rr) >= 1)
            {
                $rres=mysqli_fetch_array($rr);
                $json['success']=true;
                $json['error']="";
                $lid=$rres['lab_id'];
                $json['lab_name']=$rres['lab_name'];
                $json['lab_address']=$rres['lab_address'];
                $json['lab_contact']=$rres['lab_contact'];
                $json['lab_area_pin']=$rres['lab_area_pin'];
                $json['lab_doctor']=$rres['lab_doctor'];
                $json['lab_opening_time']=$rres['opening_time'];
                $json['lab_closing_time']=$rres['closing_time'];
                $json['record_created_on']=$rres['record_created_on'];
                
                $s="SELECT `full_name`,`aadress`,`email_id`,`mobile_number`,`reg_date`,`user_dob` FROM `d_user_info` where user_id='$userid' and record_status='A' limit 1";
                $ur=  mysqli_query($conn, $s);
                $ures=  mysqli_fetch_array($ur);
                $json['user_full_name']=$ures['full_name'];
                $json['user_address']=$ures['aadress'];
                $json['user_email_id']=$ures['email_id'];
                $json['user_mobile']=$ures['mobile_number'];
                $json['user_reg_date']=$ures['reg_date'];
                $json['user_dob']=$ures['user_dob'];
                
                $json['lab_id']=$lid;
                $s="SELECT `d_lab_sw_lic`.`valid_upto`,`d_lab_sw_lic`.`lic_type`,`d_lab_sw_lic`.`lic_key` FROM `d_lab_sw_lic` where lab_id='$lid' and record_status='A' limit 1";
                $llic=  mysqli_query($conn, $s);
                if(mysqli_num_rows($llic)>0)
                {
                $licr=  mysqli_fetch_array($llic);
                $json['lic_valid_upto']=$licr['valid_upto'];
                $json['lic_type']=$licr['lic_type'];
                $json['lic_key']=$licr['lic_key'];
                }
            }
            else
            {
                $json['success']=false;
                $json['error']="No linked Lab found";
            }
        }
        else
        {
            $json['success']=false;
            $json['error']="Incorrect UserID or Password entered";
        }
    }
    else
    {
        $json['success']=false;
        $json['error']="UserID or Password Not Entered";
       
    }
}

echo json_encode($json);

?>
