<?php

$server = 'localhost';
$username = 'root';
$password = 'G3r4rd0';
$database = 'prestamo_bd';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
