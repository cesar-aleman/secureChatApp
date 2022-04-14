<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        $dir = "path/to/file/";
        $filename = "backup" . date("YmdHis") . ".sql.gz";
        $db_host = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_database = "securechatapp";

        $cmd = "mysqldump -h {$db_host} -u {$db_username} --password={$db_password} {$db_database} | gzip > securechatapp.sql";
        exec($cmd);
        // exec("mysqldump -u root -p securechatapp > securechatapp.sql");
        header("location: ../users.php");
    }
    else {

        echo "you are not logged in";
    }
?>