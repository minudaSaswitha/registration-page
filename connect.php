<?php

$server_name ="localhost"; 
$user_name = "root";
$password = "" ;
$dbname = "reg_form1";

$connect = mysqli_connect($server_name, $user_name, $password, $dbname);
if(!$connect){
    die('Could not Connect MySql Server:' .mysql_error());
  }

?>