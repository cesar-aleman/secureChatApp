<?php 
    // $conn = mysqli_connect("localhost", "root", "", "securechatapp");
    $conn = mysqli_connect("us-cdbr-east-05.cleardb.net", "bb8bdcf73f9d70", "6eb93168", "heroku_e159c57b3a4bcfd");
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>