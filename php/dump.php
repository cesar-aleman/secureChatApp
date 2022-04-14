<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        $database = 'securechatapp';
        $user = 'root';
        $pass = '';
        $host = 'localhost';
        $dir = dirname(__FILE__) . '/dump.sql';
        
        echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";
        
        exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);
        // exec("mysqldump -u root -p securechatapp > securechatapp.sql");
        header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>