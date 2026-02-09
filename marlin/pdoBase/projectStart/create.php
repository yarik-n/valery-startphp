<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Create</h2>

    <?php if(isset($_SESSION['text'])){ ?>
        <div><?php echo $_SESSION['text']; ?></div>
        <?php unset($_SESSION['text']) ?>
    <?php }; ?>

    <form action="store.php" method="post">
        <input placeholder="Введите имя" type="text" name="name" class="input">
        <input placeholder="Введите фамилию" type="text" name="surname" class="input">
        <input placeholder="Введите имя пользователя" type="text" name="username" class="input">
        <input placeholder="Введите ваш email" type="text" name="email" class="input">
        <button type="submit">Добавить</button>
    </form>
    <div>
    </div>

    <style>

        .input{
            padding: 5px;
        }

        button{
            color: white;
            padding: 10px;
            background: blue;
            border: none;
        }

        .good{
            color: green;
        }

        .bad{
            color: red;
        }

    </style>

</body>
</html>