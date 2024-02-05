<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/School/css/form.css">
</head>
<body>
    <?php require("../php/header.php"); ?>
    
        <form action="../php/login.php" method="POST">
            <input type="text" name="login" placeholder="Логин">
            <input type="password" name="password" placeholder="Пароль">
            <input type="submit" value="Войти">
        </form>
</body>
</html>