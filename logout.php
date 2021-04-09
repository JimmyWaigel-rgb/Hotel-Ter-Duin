<?php
//stop de sessie en log out
session_start();
unset($_SESSION["medewerkerscode"]);
unset($_SESSION["uname"]);
header("Location:index.php");
?>