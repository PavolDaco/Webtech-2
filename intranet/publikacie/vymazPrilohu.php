<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$attr = $_GET["dokument"];
$attr2 = $_GET["priloha"];
$sql = "DELETE FROM publikacie WHERE meno='".$attr."' AND priloha='".$attr2."'";
$dbh->exec($sql);
