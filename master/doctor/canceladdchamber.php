<?php

if(!isset($_SESSION))
{session_start();}
unset($_SESSION['doctorid']);
header("location: addchamber.php");
?>