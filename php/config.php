<?php 
    // $conn = mysqli_connect("localhost", "root", "", "securechatapp");
    // $conn = mysqli_init(); 
    // mysqli_ssl_set($conn, NULL, NULL, <ca-cert-filename>, NULL, NULL); 
    // mysqli_real_connect($conn, "SG-bald-myrtle-9502-6036-mysql-master.servers.mongodirector.com", "admin", "YY@!TSb5SU9ic@v", "securechatapp", 3306)
    // $mysqli = new mysqli("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "<user>", "<password>", "<your-database-name", 3306);
    $conn = mysqli_connect("SG-spiky-nutria-5632-6037-mysql-master.servers.mongodirector.com", "admin", "MUCzzJ8hf!hfhGE", "securechatapp", 3306);
    if(!$conn){
        echo "Database not connected" . mysqli_connect_error();
    }
?>