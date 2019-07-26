<?php
$path='local_cdn/'.$_POST['name'];

   if(@unlink($path))
   {
     echo "Success";
   }
   else
   {
     echo "Failed";
   }