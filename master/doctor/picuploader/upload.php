<?php
include_once '../../../config.php';
$output_dir = "uploads/";
if(isset($_FILES["myfile"]))
{
	$ret = "";
	
//	This is for custom errors;	
/*	$custom_error= array();
	$custom_error['jquery-upload-file-error']="File already exists";
	echo json_encode($custom_error);
	die();
*/
	$error =$_FILES["myfile"]["error"];
	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["myfile"]["name"])) //single file
	{
            if(!isset($_SESSION))
{session_start();}
            $did=$_SESSION['doctorid'];
 	 	$fileName = $did."_".$_FILES["myfile"]["name"];
 		move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$fileName);
                $r=  mysqli_query($conn,"update d_doctor_info set d_profile_image='$fileName' where doctor_code='$did' and record_status='A'");
	}
	else  //Multiple files, file[]
	{
	  $fileCount = count($_FILES["myfile"]["name"]);
	  for($i=0; $i < $fileCount; $i++)
	  {
	  	$fileName = $_FILES["myfile"]["name"][$i];
		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$fileName);
	  	
	  }
	
	}
    echo $fileName;
 }
 ?>