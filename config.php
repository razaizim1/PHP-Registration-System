<?php 

$hostname = "localhost";
$database = "practice";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!";
} catch (PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();
}

?>