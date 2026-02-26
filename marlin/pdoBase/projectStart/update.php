<?php
$examplePost = [
    'id' => 24,
    'name' => 'Jane',
    'surname' => 'Scott',
    'username' => 'jane_user',
    'email' => 'jane3@gmail.com'
];
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id = :id";
$statement = $pdo->prepare($sql);
$statement->execute($examplePost);
?>