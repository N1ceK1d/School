<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учитель</title>
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/jquery.mask.js"></script>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <?php require("../php/header.php"); ?>
    <section>
    <?php require("../php/get_user_info.php"); ?>
    <?php 
    require("../php/conn.php");
    session_start();
    $group_id = 0;
    $cours_sql = "SELECT *, Courses.id AS course_id
            FROM Teachers
            INNER JOIN Courses ON Teachers.course_id = Courses.id
            INNER JOIN Users ON Teachers.teacher_id = Users.id            
            WHERE Users.id = ".$_SESSION['id'];
    $cours_id = mysqli_fetch_assoc($conn->query($cours_sql))['course_id'];
    
    if(isset($_GET['button']))
    {
       $group_id = $_GET['button'];
    }
    ?>
        <div class="ratings">
        <div class='nav_buttons'>
            <form action="" method="get" class='form_schedule'>
                <?php foreach($conn->query("SELECT * FROM Groupss") as $row):?>
                    <button name="button" value='<?php echo $row['id'] ?>' class='select_group'><?php echo $row['name'] ?> класс</button>
                <?php endforeach; ?>
            </form>
        </div>
            <?php
            echo $_SESSION['cours'];
            $group_id == 0 ? "" : show_grade_table($group_id, $cours_id); ?>
        </div>
    </section>
    <script src="../js/grades.js"></script>
</body>
</html>

<?php

// Выводит студентов
function get_students($group_id) 
{
    require("../php/conn.php");
    $students_sql = "SELECT Users.id as student_id, CONCAT(Users.first_name, ' ', Users.last_name) as full_name FROM StudentGroups
    INNER JOIN Users ON StudentGroups.student_id = Users.id
    INNER JOIN Groupss ON StudentGroups.group_id = Groupss.id
    WHERE Groupss.id = $group_id";

    return $conn->query($students_sql);
}

// Выводит оценки ориентируясь на предмет и ученика
function get_grades($cours_id, $student_id) 
{
    require("../php/conn.php");
    $grades_sql = "SELECT 
    GROUP_CONCAT(Ratings.rating SEPARATOR ', ') AS grades,
    Users.id as student_id
    FROM Ratings
    INNER JOIN Users ON Ratings.student_id = Users.id
    INNER JOIN Courses ON Ratings.course_id = Courses.id
    WHERE Ratings.course_id = $cours_id AND Users.id = $student_id
    GROUP BY student_id;";

    return $grades = $conn->query($grades_sql);
}

// Выводит итоговую оценку
function get_averages($cours_id, $student_id)
{
    require("../php/conn.php");
    $avg_sql = "SELECT ROUND(AVG(Ratings.rating), 1) AS average_grade
    FROM Ratings WHERE Ratings.course_id = $cours_id AND student_id = $student_id";

    foreach($conn->query($avg_sql) as $avg)
    {
        echo $avg['average_grade'] == 0 ? 0 : $avg['average_grade'] ;
    }
}

// Выводит оценки которые можно изменять
function show_grades($student_id, $student, $cours_id)
{
    foreach (get_grades($cours_id, $student['student_id']) as $grade)
    {
        foreach(explode(', ', $grade['grades']) as $grade)
        {
            echo "<input class='grade' maxlength='1' type='text' name='grades[$student_id][]' value='$grade'>";
        }
    }
}

// Выводит таблицу учеников
function show_grade_table($group_id, $cours_id) 
{?>
    <form action='../php/change_grades.php' method='POST' class='form_schedule grades-form'>
    <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
    <table>
        <caption>Оценки</caption>
        <thead>
            <td>Ученик</td>
            <td>Оценки</td>
            <td>Итог</td>
        </thead>
        <tbody>
            <?php foreach(get_students($group_id) as $student): ?>
                <tr>
                    <td class='cours'><?php echo $student['full_name']; ?></td>
                    <td>
                        <?php show_grades($student['student_id'], $student, $cours_id) ?>
                        <input class='grade' maxlength="1" type="text" name="grades[<?php echo $student['student_id'] ?>][]" value=''>
                    </td>
                    <td class='res'>
                        <?php get_averages($cours_id, $student['student_id']);?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <input type="submit" value="Изменить">
        </tfoot>
    </table>
</form>
<?php }