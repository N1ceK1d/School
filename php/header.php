<link rel="stylesheet" href="http://localhost/School/style.css">
<header>
    <h1>МОУ "Краснопольская" СОШ</h1>
    <nav>
        <a href="http://localhost/School/index.php">Главная</a>
        <?php 
            session_start();
            if(isset($_SESSION['isLoginned']))
            {
                if($_SESSION['userType'] == 1)
                {
                    echo "<a href='http://localhost/School/pages/admin.php'>Администратор</a>";
                }
                if($_SESSION['userType'] == 2)
                {
                    echo "<a href='http://localhost/School/pages/teacher.php'>Учитель</a>";
                }
                if($_SESSION['userType'] == 3)
                {
                    echo "<a href='http://localhost/School/pages/student.php'>Ученик</a>";
                    echo "<a href='http://localhost/School/pages/schedule.php'>Расписание</a>";
                }
                echo "<a href='http://localhost/School/pages/profile.php'>Профиль</a>";
                echo "<a href='http://localhost/School/php/exit.php'>Выйти</a>";
            }
            else 
            {
                echo "<a href='http://localhost/School/pages/login.php'>Войти</a>";
            }
        ?>
    </nav>
</header>