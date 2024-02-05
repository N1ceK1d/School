<?php
    require("conn.php");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $cours_id = $_POST['cours'];
    $login = $_POST['login'];
    

$sql = "SELECT * FROM Users WHERE login = '$login'";
    echo mysqli_num_rows($conn->query($sql)) ;
    if(mysqli_num_rows($conn->query($sql)) == 0)
    {
        $sql = "INSERT INTO Users (first_name, last_name, user_type, login, password) 
    VALUES ('$first_name', '$last_name', 2, '$login', '123456');";
        if($result = $conn->query($sql))
        {
            $sql = "INSERT INTO Teachers (course_id, teacher_id)
            VALUES ($cours_id, ".$conn->insert_id.")";
    
            if($result = $conn->query($sql))
            {
                header("Location: ../pages/admin.php");
            }else {
                die($conn->error);
            }
        } else {
            die($conn->error);
        }
    } else {
        header("Location: ../pages/admin.php?error=1");
    }

    