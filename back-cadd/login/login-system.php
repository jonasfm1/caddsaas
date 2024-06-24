<?php
    include 'connect.php';
    $conn = OpenCon();
    echo "Connected Successfully";
    CloseCon($conn);

    // $errors = [];
    // $data = [];

    // if (empty($_POST['user-system'])) {
    //     $errors['user-system'] = 'Name is required.';
    // }else{
    //     echo $_POST['user-system'];
    // }

    // if (empty($_POST['password-system'])) {
    //     $errors['password-system'] = 'Email is required.';
    // }else{
    //     echo $_POST['password-system'];
    // }

    // if (!empty($errors)) {
    //     $data['success'] = false;
    //     $data['errors'] = $errors;
    // } else {
    //     $data['success'] = true;
    //     $data['message'] = 'Success!';
    // }

    // return json_encode($data);
?>