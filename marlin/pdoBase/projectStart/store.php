<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "INSERT INTO users (username) VALUES (:username)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header('Location: /index.php');
?>