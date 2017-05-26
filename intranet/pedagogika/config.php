<?php
$pdo = null;
function connect_to_db()
{
    $dbengine   = 'mysql';
    $dbhost     = 'localhost';
    $dbuser     = 'finaluser';
    $dbpassword = 'finaluser';
    $dbname     = 'Final';

    try{
        $pdo = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $pdo->exec("set names utf8");
        return $pdo;
    }
    catch (PDOException $e){
        $e->getMessage();
    }
}