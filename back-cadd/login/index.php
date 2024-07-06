<?php
    session_start();
    include 'connect.php';
    $conn = OpenCon();

    $user_name = mysqli_real_escape_string($conn,$_POST['user-system']);
    $user_password = mysqli_real_escape_string($conn,$_POST['user-password']);
    $user_company = mysqli_real_escape_string($conn,$_POST['user-company']);

    $query = "SELECT name, company, email FROM users WHERE name='$user_name' AND password='$user_password'";
    $result = mysqli_query($conn, $query);
    $row_founded = mysqli_num_rows($result);

    if($row_founded > 0){
        $_SESSION['user_system'] = $user_name;
        $_SESSION['user_company'] = $user_company;

        echo var_dump($_SESSION['user_system']);
        echo var_dump($_SESSION['user_company']);
        
        // header("location:welcome.php");
    }

    CloseCon($conn);
