<?php
    require '../../vendor/autoload.php';
    
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();

    function OpenCon(){
        $dbhost = getenv('DBHOST');
        $dbuser = getenv('DBUSER');
        $dbpass = getenv('DBPASS');
        $dbname = getenv('DBNAME');
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n" . $conn->error);
        return $conn;
    }
    
    function CloseCon($conn){
        $conn->close();
    }
