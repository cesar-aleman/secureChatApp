<?php 
    //$conn = mysqli_connect("localhost", "root", "", "securechatapp");
    // $conn = mysqli_connect("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "admin", "MUCzzJ8hf!hfhGE", "securechatapp", 3306);
    // $conn = new mysqli("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "sgroot", "Au28FOWP1.rcswOd", "securechatapp");
    $conn = mysqli_connect("us-cdbr-east-05.cleardb.net", "b78e3ab1f35a9b", "1a5030b5", "heroku_55926cc9f910752");
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>