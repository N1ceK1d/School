<div class='user_info'>
        <?php 
            session_start();
            if(isset($_SESSION['isLoginned']))
            {
                require("conn.php");
                $sql = "SELECT * FROM Users INNER JOIN UserType ON Users.user_type = UserType.id WHERE Users.id = ".$_SESSION['id'];
                if($result = mysqli_fetch_assoc($conn->query($sql)))
                {
                    echo "<h2>".$result['first_name']." ".$result['last_name']."</h2>";
                    echo "<p>".$result['name']."</p>";
                }
                if($_SESSION['userType'] == 2)
                {
                    $sql = "SELECT * FROM Teachers
                    INNER JOIN Courses ON Teachers.course_id = Courses.id 
                    WHERE teacher_id = ".$_SESSION['id'];

                    echo "<p>Предмет: ".mysqli_fetch_assoc($conn->query($sql))['name']."</p>";
                }
            }
        ?>
    </div>