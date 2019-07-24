<?php
header("Content-Type: text/javascript");
date_default_timezone_set('Asia/Kolkata');
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$json=array(
    'success'=>false,
    'err'=>'',
    'file'=>'',
    'loga'=>'',
    'lati'=>''
);
$filetype = array('jpeg','jpg','png','gif','PNG','JPEG','JPG');
   foreach ($_FILES as $key )
    {

          $name =time().$key['name'];

          $path='local_cdn/'.$name;
          $file_ext =  pathinfo($name, PATHINFO_EXTENSION);
          if(in_array(strtolower($file_ext), $filetype))
          {
            if($key['name']<5000000)
            {

             @move_uploaded_file($key['tmp_name'],$path);
             $fileName=$path;
             $returned_data = triphoto_getGPS($path);
             $json['success']= true;
             $json['err']='done uploading';
             $json['file']= $path;
             $json['loga']= $returned_data['longitude'];
             $json['lati']= $returned_data['latitude'];
             echo json_encode($json);
            }
           else
           {
               $json['success']= false;
             $json['err']='Size Error';
             $json['file']='';
             echo json_encode($json);
           }
        }
        else
        {
            $json['success']= false;
             $json['err']='Type Error';
             $json['file']='';
             echo json_encode($json);
        }
    }

    
    
    function triphoto_getGPS($fileName)
{
    //get the EXIF all metadata from Images
    $exif = exif_read_data($fileName);
    if(isset($exif["GPSLatitudeRef"])) {
        $LatM = 1; $LongM = 1;
        if($exif["GPSLatitudeRef"] == 'S') {
            $LatM = -1;
        }
        if($exif["GPSLongitudeRef"] == 'W') {
            $LongM = -1;
        }

        //get the GPS data
        $gps['LatDegree']=$exif["GPSLatitude"][0];
        $gps['LatMinute']=$exif["GPSLatitude"][1];
        $gps['LatgSeconds']=$exif["GPSLatitude"][2];
        $gps['LongDegree']=$exif["GPSLongitude"][0];
        $gps['LongMinute']=$exif["GPSLongitude"][1];
        $gps['LongSeconds']=$exif["GPSLongitude"][2];

        //convert strings to numbers
        foreach($gps as $key => $value){
            $pos = strpos($value, '/');
            if($pos !== false){
                $temp = explode('/',$value);
                $gps[$key] = $temp[0] / $temp[1];
            }
        }

        //calculate the decimal degree
        $result['latitude']  = $LatM * ($gps['LatDegree'] + ($gps['LatMinute'] / 60) + ($gps['LatgSeconds'] / 3600));
        $result['longitude'] = $LongM * ($gps['LongDegree'] + ($gps['LongMinute'] / 60) + ($gps['LongSeconds'] / 3600));
        $result['datetime']  = $exif["DateTime"];

        return $result;
    }
}