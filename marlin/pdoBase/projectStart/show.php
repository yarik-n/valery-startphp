<?php
$exampleArray=[
        'id'=>'2'
];
$pdo = new PDO('mysql:host=MySQL-8.4;dbname=users', "root", '');
$sql = "SELECT * FROM users WHERE id =: id";
$statment = $pdo->prepare($sql);
$statment->execute($exampleArray);
$user = $statment->fetch(PDO::FETCH_ASSOC);

var_dump($_POST);
var_dump($_GET);
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
                 <hd1>Show user - <?php echo
                         $user['id'],
                         $user['name'],
                         $user['surname'],
                         $user['username'],
                         $user['email']
                     ;?></hd1>


           </div>
     </div>
</div>
</body>
</html>
