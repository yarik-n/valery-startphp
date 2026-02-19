<?php

$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "INSERT INTO users (name,surname,username,email) VALUES (:name, :surname, :username, :email)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header('Location:/marlin/pdoBase/projectStart/');
?>