<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$db_server="localhost";
$db_name="ihealthcare";
$db_username="root";
$db_password="devdas";
$conn=mysqli_connect($db_server,$db_username,$db_password);
$db= mysqli_select_db($conn, $db_name);

?>