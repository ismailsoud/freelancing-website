<?php

$host = 'localhost';
$dbname = 'Alloservice';
$user = 'root';
$pass = "1234";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
}catch(PDOException $e){
    echo "Error".$e->getMessage();
}
