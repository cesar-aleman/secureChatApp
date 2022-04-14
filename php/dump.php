<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

        include_once "config.php";


        $user = "bb8bdcf73f9d70";
        $password = "6eb93168";
        $dbname = "heroku_e159c57b3a4bcfd";
        $host = "us-cdbr-east-05.cleardb.net";

        $sql = mysqli_query($conn, "SELECT * FROM users");


        // header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>