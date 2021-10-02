<?php
    $severname = "localhost";
    $username = "db21_023";
    $password ="db21_023";
    $dbname = "db21_023";
    $conn = mysqli_connect($severname,$username,$password);
    mysqli_set_charset($conn, "utf8");
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo "Successfully connected to server <br>";
    }

    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        echo "Successfully connected to databse <br>";
    }
?>