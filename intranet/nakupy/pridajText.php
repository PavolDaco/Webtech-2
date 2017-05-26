<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
if (isset($_POST['text'])){
    $attr = $_POST['text'];
    var_dump($attr);
    $sql = "INSERT INTO nakupy (text) VALUES ('".$attr."')";
    $dbh->exec($sql);
}
else echo "error";






