<?php
ob_start();
session_start();
$con=new mysqli("localhost","root","","online_cource");
if(mysqli_connect_error())
{
    die ("connection not found".mysqli_connect_error());

}

error_reporting(0);
?>