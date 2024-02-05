<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Администратор</title>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <?php require("../php/header.php"); ?>
    <section>
        <?php require("../php/get_user_info.php"); ?>
        <nav>
            <button class='add_teacher' type='button'>Добавить учителя</button>
            <button class='add_student' type='button'>Добавить ученика</button>
            <button class='change_schedule' type='button'>Изменить расписание</button>
        </nav>
        <?php if(isset($_GET['error'])): ?>
            <p>Введены неверные данные</p>
        <?php endif; ?>
        <div>
            <?php require("add_teacher.php"); ?>
            <?php require("add_student.php"); ?>
            <?php require("change_schedule.php"); ?>
        </div>
    </section>
    <script src="../js/change_content.js"></script>
</body>
</html>