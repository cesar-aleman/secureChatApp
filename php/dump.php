<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        exec("mysqldump -u root -p securechatapp > securechatapp.sql");
    }
    else {
        echo "you are not logged in";
    }
?>