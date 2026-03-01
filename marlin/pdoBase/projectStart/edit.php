<?php
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "SELECT * FROM users WHERE id=:id";
$statment = $pdo->prepare($sql);
$statment->execute($_GET);
$user = $statment->fetch(PDO::FETCH_ASSOC);
?>
<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0">
</head>
<body>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1>Update</h1>

                 <div class="row">
                     <div class="col-md-6">
                             <form action="update.php" method="post">
                                 <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                                 <input placeholder="Введите имя" type="text" name="name" class="input" value="<?php echo $user['name'];?>">
                                 <input placeholder="Введите фамилию" type="text" name="surname" class="input" value="<?php echo $user['surname'];?>">
                                 <input placeholder="Введите имя пользователя" type="text" name="username" class="input" value="<?php echo $user['username'];?>">
                                 <input placeholder="Введите ваш email" type="text" name="email" class="input" value="<?php echo $user['email'];?>">
                                 <button type="submit">Update</button>
                             </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
