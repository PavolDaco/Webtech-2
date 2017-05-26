<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$attr = $_GET["dokument"];
$sql = "DELETE FROM sluzobneCesty WHERE meno='".$attr."'";
$dbh->exec($sql);
