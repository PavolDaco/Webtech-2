<?php
session_start();
include '../includes/dbh.php';
mysqli_set_charset($conn, "utf8");

$id = $_POST['id'];
$user = $_POST['user'];
$hr = $_POST['hr'];
$reporter = $_POST['reporter'];
$editor = $_POST['editor'];
$admin = $_POST['admin'];

$sql = "DELETE FROM RoleZamestnanci WHERE id_staff = $id";
$conn->query($sql);

if ($user) {
  $sql = "INSERT INTO RoleZamestnanci (id_staff, id_role) VALUES ('$id',1)";
  $conn->query($sql);
}

if ($hr) {
  $sql = "INSERT INTO RoleZamestnanci (id_staff, id_role) VALUES ('$id',2)";
  $conn->query($sql);
}

if ($reporter) {
  $sql = "INSERT INTO RoleZamestnanci (id_staff, id_role) VALUES ('$id',3)";
  $conn->query($sql);
}

if ($editor) {
  $sql = "INSERT INTO RoleZamestnanci (id_staff, id_role) VALUES ('$id',4)";
  $conn->query($sql);
}

if ($admin) {
  $sql = "INSERT INTO RoleZamestnanci (id_staff, id_role) VALUES ('$id',5)";
  $conn->query($sql);
}

header("Location:  ../roles.php?upd_good");