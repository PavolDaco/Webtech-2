<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$attr = $_GET["dokument"];
$attr2 = $_GET["priloha"];
$attr3 = $_GET["href"];

$sql = "INSERT INTO doktorandi (meno, priloha, href) VALUES ('".$attr."', '".$attr2."', '".$attr3."')";
$dbh->exec($sql);
