<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "INSERT INTO users (username) VALUES (:username)";
$statment = $pdo->prepare($sql);
$users = $statment->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <hd1>Show user</hd1>

             </div>
     </div>
</div>

