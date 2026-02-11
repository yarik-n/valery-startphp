<?php
$pdo = new PDO("mysql:host=localhost;dbname=root", "root", '');

$sql = "INSERT INTO users (username) VALUES (:username)";
$statment = $pdo->prepare($sql);
$statment->execute($_POST);

header('Location: index.php');
