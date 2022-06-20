<?php
ob_start();
session_start();
$con=new mysqli("localhost:3306","root","","pathofskill");
if(mysqli_connect_error())
{
    die ("connection not found".mysqli_connect_error());

}

if(isset($_REQUEST['subscribe']))
                {
                  $in=$con->query("insert into email_subscribe values(0,'$_REQUEST[email]')");
                }
    error_reporting(0);
?>