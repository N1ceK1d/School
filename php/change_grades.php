<?php
echo '<pre>' . var_export($_POST['grades'], true) . '</pre>';
require("conn.php");
session_start();
$cours_sql = "SELECT *, Courses.id AS course_id
            FROM Teachers
            INNER JOIN Courses ON Teachers.course_id = Courses.id
            INNER JOIN Users ON Teachers.teacher_id = Users.id            
            WHERE Users.id = ".$_SESSION['id'];

$cours_id = mysqli_fetch_assoc($conn->query($cours_sql))['course_id'];

$group_id = $_POST['group_id'];

$grades = $_POST['grades'];

foreach( $grades as $key => $value ) {
    $deleteSQL = "DELETE FROM Ratings WHERE student_id = $key AND course_id = $cours_id";
    $conn->query($deleteSQL);
    echo $deleteSQL."<br>";
    foreach ($value as $key2 => $value2) {
        if($value2 != null)
        {
            $insertSQL = "INSERT INTO Ratings (student_id, course_id, rating)
            VALUES ($key, $cours_id, $value2)";
            $conn->query($insertSQL);
            echo $insertSQL."<br>";
        }
    }
    echo $conn->error;
}

header("Location: ../pages/teacher.php");