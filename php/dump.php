<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

        $user = "bb8bdcf73f9d70";
        $password = "6eb93168";
        $dbname = "heroku_e159c57b3a4bcfd";
        $host = "us-cdbr-east-05.cleardb.net";

        $DBUSER="bb8bdcf73f9d70";
        $DBPASSWD="6eb93168";
        $DATABASE="heroku_e159c57b3a4bcfd";
        
        $filename = "backup-" . date("d-m-Y") . ".sql.gz";
        $mime = "application/x-gzip";
        
        header( "Content-Type: " . $mime );
        header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
        
        $cmd = "mysqldump -u $DBUSER -h $host --password=$DBPASSWD $DATABASE | gzip --best";   
        
        passthru( $cmd );        

        // $command = "mysqldump -u $dbuser -h localhost -p$password $dbname > dump.sql 2>&1";
        // exec($command, $output);

        // exec("mysqldump -u $dbuser -h $host -p$password $dbname > /users/my_database_dump.sql");

        header("location: ../users.php");
    }
    else {
        echo "you are not logged in";
    }
?>