<?php 
require("conn.php");

$days = $_POST['day'];
$groups = $_POST['goup_id'];
$courses = $_POST['course'];
$times = $_POST['time'];
// echo count($days);
// var_dump($days);
// echo '<pre>' . var_export($courses, true) . '</pre>';
// echo '<pre>' . var_export($times, true) . '</pre>';
for ($i = 1; $i <= count($days); $i++) {
    $group = $groups;
    // Удаляем все записи для данного дня и группы
    $deleteSql = "DELETE FROM Shedules WHERE day_id = $i AND group_id = $group";
    $conn->query($deleteSql);

    $courses_on_day = "SELECT COUNT(id) as count FROM Shedules WHERE day_id = $i AND group_id = $group;";
    $numCourses = mysqli_fetch_assoc($conn->query($courses_on_day));
    echo $numCourses['count'];

    for($j = 0; $j <= count($courses); $j++) {
        $course = $courses[$i][$j];
        $time = $times[$i][$j];
        if($course != null && $time != null)
        {
            $insertSql = "INSERT INTO Shedules (course_id, day_id, schedule_time, group_id) VALUES ($course, $i, '$time', $group)";
            echo $insertSql."<br>";
            $conn->query($insertSql);
        }
    }

    echo $conn->error;
}

header("Location: ../pages/admin.php");
// echo "Данные успешно обработаны и добавлены в таблицу Schedules.";
