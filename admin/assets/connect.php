<?php
$host="localhost";
$database="excess";
$user="root";
$pass=""; 
try{
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Bağlantı Hatası:" . $e->getMessage();
}

$base_link="http://localhost/excess/";
?>