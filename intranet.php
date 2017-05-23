<?php
session_start();

if (isset($_SESSION['login'])) {
      header("Location: intranet/intro.php");
 }

else 
	header("Location: login.php"); 
?>