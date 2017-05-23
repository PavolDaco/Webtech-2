<?php

require('config.php');
mysqli_set_charset($conn, "utf8");

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}