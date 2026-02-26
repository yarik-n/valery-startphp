<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "SELECT * FROM users WHERE id = :id";
$statment = $pdo->prepare($sql);
$statment->execute($_GET);
$user = $statment->fetch(PDO::FETCH_ASSOC);
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
                 <h1>Edit</h1>

                 <div class="row">
                     <div class="col-md-6">
                             <form action="update.php" method="post">
                                 <input placeholder="Введите имя" type="text" name="name" class="input">
                                 <input placeholder="Введите фамилию" type="text" name="surname" class="input">
                                 <input placeholder="Введите имя пользователя" type="username" name="username" class="input">
                                 <input placeholder="Введите ваш email" type="text" name="email" class="input">
                                 <button type="submit">Update</button>
                         </form>
                     </div>
                 </div>
           </div>
     </div>
</div>
</body>
</html>
