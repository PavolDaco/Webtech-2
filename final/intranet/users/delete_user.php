<?php
session_start();
include '../includes/dbh.php';
mysqli_set_charset($conn, "utf8");

$name = $_POST['name'];
$surname = $_POST['surname'];

$sql = "DELETE FROM RoleZamestnanci WHERE id_staff = (SELECT id FROM zamestnanci WHERE name = '$name' AND surname = '$surname')";
$result = mysqli_query($conn, $sql);

$sql = "DELETE FROM zamestnanci WHERE name = '$name' AND surname = '$surname'";
$result = mysqli_query($conn, $sql);

header("Location: ../users.php");

