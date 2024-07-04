<?php
    session_start();
    include 'connect.php';
    $conn = OpenCon();
    echo "Connected Successfully <br>";
    CloseCon($conn);

    

    echo var_dump($_POST);;

    // if (!empty($_POST['user-system'])) {
    //     echo $_POST['user-company'];
    //     echo $_POST['user-system'];
    // }

?>