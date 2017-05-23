<?php
require('config.php');
mysqli_set_charset($conn, "utf8");

$conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>	