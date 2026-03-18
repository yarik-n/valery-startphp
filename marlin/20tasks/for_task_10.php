<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=tasks', "root", '');
$sql = 'INSERT INTO `task_10`(`name`) VALUES (:username)';
$statement = $pdo->prepare($sql);
$statement->execute($_POST);
header('Location:/marlin/20tasks/task_10.php');
