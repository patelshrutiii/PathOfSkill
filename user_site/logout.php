<?php
require_once "connection.php";
// $up=$con->query("update user_register set lastlogin='$_SESSION[logintime]' where userid like '$_SESSION[userid]'");
unset($_SESSION['userid']);
unset($_SESSION['psw']);
unset($_SESSION['username']);

unset($_SESSION['lastlogin']);
header("location:index.php");
?>