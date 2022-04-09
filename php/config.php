<?php 
    // $conn = mysqli_connect("localhost", "root", "", "securechatapp");
    // $conn = mysqli_connect("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "admin", "MUCzzJ8hf!hfhGE", "securechatapp", 3306);
    $conn = new mysqli("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "admin", "MUCzzJ8hf!hfhGE", "securechatapp", 3306);
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>