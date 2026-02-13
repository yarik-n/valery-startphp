<?php
phpinfo();
$pdo = new PDO('mysql:host=localhost;dbname=sandbox', "root", 'password');

$sql = "INSERT INTO users (username) VALUES (:username)";
$statment = $pdo->prepare($sql);
$statment->execute($_POST);

//header('Location: /index.php');
