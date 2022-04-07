<?php 
    $conn = mysqli_connect("localhost", "root", "", "securechatapp");
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>