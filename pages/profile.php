<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <?php require("../php/header.php"); ?>
    <section>
        <?php require("../php/get_user_info.php"); ?>
        <?php require("../php/change_user_data.php"); ?>
    </section>
</body>
</html>