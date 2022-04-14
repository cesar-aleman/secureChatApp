//Resource used to create this page: https://www.siteground.com/
<?php
    session_start();
    if(isset($_SESSION['unique_id'])){

        include_once "config.php";
        $username = "bb8bdcf73f9d70";
        $password = "6eb93168";
        $database = "heroku_e159c57b3a4bcfd";
        $host = "us-cdbr-east-05.cleardb.net";

?>
        <body>
        <?php 
        // $username = "root"; 
        // $password = ""; 
        // $database = "securechatapp"; 
        // $host = "localhost";
        $mysqli = new mysqli($host, $username, $password, $database); 
        $query = "SELECT * FROM messages INNER JOIN users ON unique_id";
        
        echo '<table border="1" cellspacing="10" cellpadding="10"> 
              <tr> 
                  <td> <font face="Arial">Sender</font> </td> 
                  <td> <font face="Arial">Message ID </font> </td> 
                  <td> <font face="Arial">Message </font> </td> 
                  <td> <font face="Arial">Recipient</font> </td> 
              </tr>';
        
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $sender_id = $row["outgoing_msg_id"];
                $recipient_id = $row ["incoming_msg_id"];
                $msg = $row["msg"];
                $msg_id = $row["msg_id"];
                $unique_id = $row["unique_id"];
              
                if($unique_id == $sender_id){
                    echo '<tr> 
                        <td>'.$sender_id.'</td>
                        <td>'.$msg_id.'</td>  
                        <td>'.$msg.'</td> 
                        <td>'.$recipient_id.'</td>  
                    </tr>';
                }
            }
            $result->free();
        } 
        ?>
        </body>
<?php
    }
    else {
        echo "you are not logged in";
    }
?>