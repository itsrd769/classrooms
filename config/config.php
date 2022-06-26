<?php 
ob_start(); 
session_start();

$timezone = date_default_timezone_set("Asia/Dhaka");
$con = mysqli_connect("sql6.freemysqlhosting.net", "sql6502208", "FUzmpqeMK3", "sql6502208");

if(mysqli_connect_errno())
{
 echo "Failed to connect" . mysqli_connect_errno();
}
?>
