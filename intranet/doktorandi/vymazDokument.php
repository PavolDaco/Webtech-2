<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$attr = $_GET["dokument"];
$sql = "DELETE FROM doktorandi WHERE meno='".$attr."'";
$dbh->exec($sql);
