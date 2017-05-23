<?php
require __DIR__ . '/config.php';

if(isset($_POST['column'])){
    $dbh = connect_to_db(); // function created in dbconnect, remember?

    $column = intval($_POST['column']);

    $sql = "INSERT INTO zamestnanec (meno, priezvisko) VALUES (".$column.", ".$column.")";

    return $dbh->exec($sql);
}

?>