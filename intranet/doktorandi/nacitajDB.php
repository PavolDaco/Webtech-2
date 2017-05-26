<?php
require __DIR__ . '/config.php';
$dbh = connect_to_db();
$json = "";
$request = $dbh->prepare("SELECT * FROM doktorandi ORDER BY meno");
$bunky =  $request->execute() ? $request->fetchAll() : false;
if ($bunky == false)
    echo "empty";
else {
    for ($i = 0; $i < sizeof($bunky); $i++) {
        $json = $json.$bunky[$i]->meno.";".$bunky[$i]->priloha.";".$bunky[$i]->href.";";
    }
    echo $json;
}