<?php 
require("conn.php");
$password = $_POST['password'];
$user_id = $_POST['user_id'];
$sql = "UPDATE Users SET password = $password WHERE id = $user_id";

$conn->query( $sql );

header("Location: ../pages/profile.php");