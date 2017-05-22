<?php
session_start();
include 'dbh.php';
mysqli_set_charset($conn, "utf8");

$email = $_POST['email'];
$jazyk = $_POST['jazyk'];

$sql = "DELETE FROM Newsletter WHERE email = '$email' AND jazyk = '$jazyk'";
if ($conn->query($sql) === TRUE) {
   header("Location:  ../aktuality.php?del_good");
} else {
    header("Location:  ../aktuality.php?del_error=empty");
}
