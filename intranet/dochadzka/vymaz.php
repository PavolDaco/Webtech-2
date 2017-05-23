<?php
require __DIR__ . '/config.php';

if(isset($_POST['zamestnanec_id']) && isset($_POST['datum'])){
    $dbh = connect_to_db();
    $id = intval($_POST['zamestnanec_id']);
    $datum = strval($_POST['datum']);
    $time = strtotime($datum);
    $newformat = date('Y-m-d', $time);
    var_dump($newformat);
    $sql = "DELETE FROM zaznam WHERE (zamestnanec_id=$id && datum='".$newformat."') ";

    return $dbh->exec($sql);
}
?>