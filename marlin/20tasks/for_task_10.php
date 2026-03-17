<?php

$pdo = new PDO('mysql:host=MySQL-8.4;dbname=tasks', "root", '');
$sql = 'INSERT INTO task_10 (name) VALUES :name';
$statement = $pdo->prepare($sql);
$statement->execute($_POST);

