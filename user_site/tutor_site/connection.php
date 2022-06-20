<?php
ob_start();
session_start();
$con=new mysqli("localhost:3306","root","","pathofskill");
if(mysqli_connect_error())
{
    die ("connection not found".mysqli_connect_error());

}
error_reporting(0);
?>