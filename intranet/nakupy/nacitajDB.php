<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$json = "";
$request = $dbh->prepare("SELECT * FROM nakupy");
$bunky =  $request->execute() ? $request->fetchAll() : false;
if ($bunky == false)
    echo "empty";
else {
    for ($i = 0; $i < sizeof($bunky); $i++) {
        $json = $json.$bunky[$i]->id."~".$bunky[$i]->text."~";
    }
    echo $json;
}