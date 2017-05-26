<?php
session_start();

if (isset($_SESSION['login'])) {
      header("Location: intro.php");
 }

else 
	header("Location: ../login.php"); 
?>