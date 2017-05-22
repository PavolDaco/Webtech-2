<?php
session_start();
include '../includes/dbh.php';
mysqli_set_charset($conn, "utf8");

$id = $_POST['id'];
$title1 = $_POST['title1'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$title2 = $_POST['title2'];

$ldapLogin = $_POST['ldapLogin'];
$staffRole = $_POST['staffRole'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$room = $_POST['room'];

 $sql = "UPDATE zamestnanci SET name = '$name', surname = '$surname',
 								title1 = '$title1', title2 = '$title2',
 								ldapLogin = '$ldapLogin', staffRole = '$staffRole',
 								department = '$department', phone = '$phone',
 								room = '$room'
 		 WHERE id = '$id'";
 $result = mysqli_query($conn, $sql);

 header("Location: ../users.php");