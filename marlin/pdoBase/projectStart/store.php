<?php
$pdo = new PDO("mysql:host=localhost;dbname=valery", "valery", '');

$sql = "INSERT INTO users (введите_имя) VALUES (:введите_имя)";
$statment = $pdo->prepare($sql);
$statment->execute($_POST);

header('Location: index.php');
