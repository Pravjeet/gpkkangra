<?php

$dsn="mysql:host;dbname=myfirstdatabase";
$dbusername="root";
$dbpassword="";

try{
    $pdo=new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} CATCH (PDOException $e){
    echo"Connection failed:" .$e->getMessage();
}