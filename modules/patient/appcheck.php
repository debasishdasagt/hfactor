<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
include_once '../../config.php';
if(isset($_GET['cid']))
{
    $res=array(
        'succss' => false,
        'appdate' => '',
        'appwd' => '',
        'apptim1' => '',
        'apptim2' => '',
        'cremarks' => '',
        'info' => '');
    $dc=false;
    $cid=$_GET['cid'];
    $dt= date("Y-m-d");
    $timing="";
    $wday=date("l",  strtotime($dt));
    $cremarksq=  mysqli_query($conn, "select ifnull(chamber_remarks,'') as r from d_chambers where chamber_id='$cid' and record_status='A'");
    $cremarksr= mysqli_fetch_array($cremarksq);
    $res['cremarks']=$cremarksr['r'];
    if(wdavailable($conn,$dt,$cid) && bkavailable($conn, $dt, $cid) !="0")
    {
        $timing = bkavailable($conn, $dt, $cid);
        $dc=true;
    }
    else
    {
        for($i=0;$i<=2;$i++)
        {
            $dt=date("Y-m-d",  strtotime($dt."+1 day"));
            if(wdavailable($conn,$dt,$cid))
            {
                $timing = bkavailable($conn, $dt, $cid);
                if($timing!="0")
                {$dc=true;
                $wday=date("l",  strtotime($dt));
                break;}
                
            }
        } 
    }
    if($dc)
        {
        if(strlen($timing)> 12)
        {
        $times=  explode("~",$timing);
        $res['apptim1']= $times[0];
        $res['apptim2']= $times[1];
        }
        else{$res['apptim1']= $timing; }
        $res['succss']= true;
        $res['appdate']= $dt;
        $res['appwd']= $wday;        
        $res['info']= "Nothing";
        }
        else{ $res['succss']=false;
        $res['info']="Exceeded 3 days";}
        
        echo json_encode($res);
}



function wdavailable($conn,$dt,$cid)
{
   
    $wday= date("l",  strtotime($dt));
    //check week day availability
    $wdq=  mysqli_query($conn, "select limit1,limit2 from d_chamber_days where week_day='$wday' and record_status='A' and chamber_id='$cid'");
    if(mysqli_num_rows($wdq)>0)
    {
        //echo $dt."YO<br>";
        return TRUE;
    }
 else {
     //echo $dt."NO<br>";
    return FALSE;    
    }
}


function bkavailable($conn,$dt,$cid)
{
    $wday= date("l",  strtotime($dt));
    $getlimq=mysqli_query($conn, "select opening_time1,closing_time1,limit1,opening_time2,closing_time2,limit2 from d_chamber_days where week_day='$wday' and record_status='A' and chamber_id='$cid'");
    $getlimr=  mysqli_fetch_array($getlimq);
    $ot1=$getlimr['opening_time1'];
    $ct1=$getlimr['closing_time1'];
    $l1=$getlimr['limit1'];
    $ot2=$getlimr['opening_time2'];
    $ct2=$getlimr['closing_time2'];
    $l2=$getlimr['limit2'];
    $curtime=new DateTime('now');
    $otime1=new DateTime($dt." ".$ot1);
    $otime2=new DateTime($dt." ".$ot2);
    
    //echo $curtime->format("Y-m-d H:i:s")."<br>";
    //echo $otime1->format("Y-m-d H:i:s")."<br>";
    //echo $otime2->format("Y-m-d H:i:s")."<br>";
    
    $timing="0";
    $getappcount1q=  mysqli_query($conn, "select count(id) as c from d_chamber_appointment where app_date='$dt' and chamber_id='$cid' and record_status='A' and app_time between '$ot1' and '$ct1'");
    $getappcount1r=  mysqli_fetch_array($getappcount1q);
    if($getappcount1r['c'] < $l1 && $curtime < $otime1)
    {
        $timing=substr($ot1,0,5)."-".substr($ct1,0,5);
    }
    $getappcount2q=  mysqli_query($conn, "select count(id) as c from d_chamber_appointment where app_date='$dt' and chamber_id='$cid' and record_status='A' and app_time between '$ot2' and '$ct2'");
    $getappcount2r=  mysqli_fetch_array($getappcount2q);
    if($getappcount2r['c'] < $l2 && $curtime < $otime2)
    {
        if($timing=="0")
        {$timing=substr($ot2,0,5)."-".substr($ct2,0,5);}
         else {$timing=$timing."~".substr($ot2,0,5)."-".substr($ct2,0,5);}
    }
    
    return $timing;
}
