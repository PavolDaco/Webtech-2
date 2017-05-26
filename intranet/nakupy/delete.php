<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
if (isset($_POST['id'])){
    $attr = $_POST['id'];
    $sql = "DELETE FROM nakupy WHERE id='".$attr."'";
    $dbh->exec($sql);
}
else echo "error";






