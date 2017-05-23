<?php
session_start();
include '../includes/dbh.php';
mysqli_set_charset($conn, "utf8");

$title1 = $_POST['title1'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$title2 = $_POST['title2'];

$ldapLogin = $_POST['ldapLogin'];
$staffRole = $_POST['staffRole'];
$department = $_POST['department'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$function = $_POST['function'];

$sql = "INSERT INTO zamestnanci (name, surname, title1, title2, ldapLogin, room, phone, department, staffRole, function, photo) VALUES ('$name', '$surname', '$title1', '$title2', '$ldapLogin', '$room', '$phone', '$department', '$staffRole', '$function', '')";
 $result = mysqli_query($conn, $sql);

 header("Location: ../users.php");