<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

        $dbuser = 'bb8bdcf73f9d70';
        $password = '6eb93168';
        $dbname = 'heroku_e159c57b3a4bcfd';
        $host = 'us-cdbr-east-05.cleardb.net';

        // $command = "mysqldump -u $dbuser -h localhost -p$password $dbname > dump.sql 2>&1";
        // exec($command, $output);

        exec("mysqldump -u $dbuser -h $host -p$password $dbname > my_database_dump.sql");

        header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>