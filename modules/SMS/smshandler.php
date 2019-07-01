<?php

function sendsms($numbr,$msg)
{
    //$m= mysqli_real_escape_string($conn,$msg);
    //$n=  mysqli_real_escape_string($conn,$numbr);
    $curl = curl_init();
    $msg=  str_replace(' ', '%20', $msg);

    curl_setopt_array($curl, array(
      CURLOPT_URL =>"http://".$_SERVER['HTTP_HOST']."/hfactor/modules/SMS/sendsms.php?msg=$msg&numbr=$numbr", 
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $json=  json_decode($response);
    }
    
    if($json->type=='success')
    {
        $r=$json->type;
        $ref=$json->message;
        //$insmsgq=mysqli_query($conn,"INSERT INTO `m_sms_sent`(`sms_body`,`sms_sent_to`,`sms_response`,`sms_ref`,`record_creted_on`) VALUES('$m','$n','$r','$ref',now())");
        return TRUE;
    }
    else
    {return FALSE;}
}



?>

