<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=human_resource';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Perform database operations here

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
