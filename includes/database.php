<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "elearning_db";

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);

   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



} catch (PDOException $e) {
    
    die("Connection failed: " . $e->getMessage());
}
?>
