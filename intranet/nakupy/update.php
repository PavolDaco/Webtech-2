<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
if (isset($_POST['id']) && isset($_POST['text'])){
    $attr = $_POST['id'];
    $attr2 = $_POST['text'];
    $sql = "UPDATE nakupy SET text= '".$attr2."' WHERE id='".$attr."'";
    $dbh->exec($sql);
}
else echo "error";






