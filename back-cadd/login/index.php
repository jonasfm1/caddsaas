<?php
    session_start();
    include 'connect.php';
    $conn = OpenCon();

    $user_name = mysqli_real_escape_string($conn,$_POST['user-system']);
    $user_password = mysqli_real_escape_string($conn,$_POST['user-password']);

    $query = "SELECT name, company, email FROM users WHERE name='$user_name' AND password='$user_password'";

    $result = mysqli_query($conn, $query);
    $row_founded = mysqli_num_rows($result);
    $count = mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['user_system'] = $user_name;
        echo var_dump($_SESSION['user_system']);
    }

    echo "Connected Successfully <br>";

    CloseCon($conn);
