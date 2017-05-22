<?php
session_start();
include 'dbh.php';
mysqli_set_charset($conn, "utf8");

$email = $_POST['email'];
$jazyk = $_POST['jazyk'];

$sql = "SELECT * FROM Newsletter WHERE email = '$email' AND jazyk = '$jazyk'";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
	header("Location:  ../aktuality.php?ins_error=exist");
}
else {
	$sql = "INSERT INTO Newsletter (email, jazyk) VALUES ('$email','$jazyk')";
	if ($conn->query($sql) === TRUE) {
	    header("Location:  ../aktuality.php?ins_good");
	} 
	else {
	    header("Location:  ../aktuality.php?ins_error=empty");
	}
}






