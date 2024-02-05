<?php 
    require("conn.php");
    session_start();

    $login = $_POST['login'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE login = '$login' AND password = '$password'";

    if(mysqli_num_rows($result = mysqli_query($conn, $sql)) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['userType'] = $row['user_type'];
        $_SESSION['isLoginned'] = true;
        if($_SESSION['userType'] == 3)
        {
            $sql = "SELECT *, Groupss.id = group_id FROM StudentGroups
            INNER JOIN Groupss ON StudentGroups.group_id = Groupss.id
            INNER JOIN Users ON StudentGroups.student_id = Users.id
            WHERE Users.id = ".$row['id'];
            $_SESSION['group'] = mysqli_fetch_array($conn->query($sql))['group_id'];
        }
        header("Location: http://localhost/School/index.php");
    }
?>