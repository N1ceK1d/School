<div class='schedule'>
    <?php
        require("conn.php");    
        session_start();
        $sql_days = "SELECT * FROM Days";
        $days = $conn->query($sql_days); 
    ?>

    <?php foreach ($days as $day):?>
        <table>
            <caption><?php echo $day['name']; ?></caption>
            <thead>
                <td>Время</td>
                <td>Предмет</td>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT *, Courses.name as course_name FROM Shedules
                INNER JOIN Days ON Shedules.day_id = Days.id
                INNER JOIN Courses ON Shedules.course_id = Courses.id
                INNER JOIN Groupss ON Shedules.group_id = Groupss.id WHERE Days.id = ".$day['id']."
                AND Groupss.id = ".$_SESSION['group'];
                
                foreach ($conn->query($sql) as $row):?>
                    <tr>
                        <td><?php echo $row['schedule_time']; ?></td>
                        <td><?php echo $row['course_name']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</div>