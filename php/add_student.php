<?php
    require("conn.php");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $group_id = $_POST['group'];
    $login = $_POST['login'];

    $sql = "SELECT * FROM Users WHERE login = '$login'";

    if(mysqli_num_rows($conn->query($sql)) == 0)
    {
        $sql = "INSERT INTO Users (first_name, last_name, user_type, login, password) 
        VALUES ('$first_name', '$last_name', 3, '$login', '123456');";
    
        if($result = $conn->query($sql))
        {
            $sql = "INSERT INTO StudentGroups (group_id, student_id)
            VALUES ($group_id, ".$conn->insert_id.")";
    
            if($result = $conn->query($sql))
            {
                header("Location: ../pages/admin.php");
            }
        }
    } else {
        header("Location: ../pages/admin.php?error=1");
    }