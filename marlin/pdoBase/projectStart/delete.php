<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "DELETE FROM users WHERE id = :id";
$statment = $pdo->prepare($sql);
$statment->execute($_GET);
header('Location:/marlin/pdoBase/projectStart/');
?>
