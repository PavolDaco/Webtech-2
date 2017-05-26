<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$attr = $_GET["dokument"];
$sql = "INSERT INTO pedagogika (meno) VALUES ('".$attr."')";
$dbh->exec($sql);
