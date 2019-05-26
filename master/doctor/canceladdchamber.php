<?php

session_start();
unset($_SESSION['doctorid']);
header("location: addchamber.php");
?>