<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        $dbhost = 'localhost:3036';
        $dbuser = 'root';
        $dbpass = '';
        
        $backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
        $command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
        
        system($command);
        // exec("mysqldump -u root -p securechatapp > securechatapp.sql");
        header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>