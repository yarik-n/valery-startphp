<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "INSERT INTO users (username) VALUES (:username)";
$statment = $pdo->prepare($sql);
$users = $statment->fetchAll(PDO::FETCH_ASSOC);
?>