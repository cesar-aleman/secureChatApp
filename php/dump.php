<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

        exec("mysqldump -u root -p -h localhost securechatapp > securechatapp.sql");
        header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>