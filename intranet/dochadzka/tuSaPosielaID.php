<?php
 session_start();
 mysqli_set_charset($conn, "utf8");
 echo $_SESSION['id'];
?>