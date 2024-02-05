<?php 
    require("conn.php");
    session_start();
    $sql = "SELECT Courses.name, GROUP_CONCAT(Ratings.rating SEPARATOR ', ') AS grades, ROUND(AVG(Ratings.rating), 1) AS average_grade
    FROM Ratings
    INNER JOIN Users ON Ratings.student_id = Users.id
    INNER JOIN Courses ON Ratings.course_id = Courses.id
    WHERE Users.id = ".$_SESSION['id']."
    GROUP BY Courses.name;";
?>
<div class="ratings">
    <table>
        <caption>Оценки</caption>
        <thead>
            <td>Предмент</td>
            <td>Оценки</td>
            <td>Итог</td>
        </thead>
        <tbody>
            <?php foreach($conn->query($sql) as $row): ?>
                <tr>
                    <td class='cours'><?php echo $row['name']; ?></td>
                    <td><?php echo $row['grades']; ?></td>
                    <td class='res'><?php echo $row['average_grade']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
