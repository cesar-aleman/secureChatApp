<?php 
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if( (preg_match('/[a-zA-Z]/', $fname)) && (preg_match('/[a-zA-Z]/', $lname)) ) {
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                if(mysqli_num_rows($sql) > 0){
                    echo "$email - This email already exist!";
                }else{
                    $ran_id = rand(time(), 100000000);
                    $status = "Active now";
                    if( (strlen($password) >= 9) && (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) && 
                        (preg_match('/[A-Z]/', $password)) && (preg_match('~[0-9]+~', $password)) ) {
                        //input validation for password here.
                        $encrypt_pass = md5($password);
                        $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, status)
                        VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$status}')");
                        if($insert_query){
                            $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($select_sql2) > 0){
                                $result = mysqli_fetch_assoc($select_sql2);
                                $_SESSION['unique_id'] = $result['unique_id'];
                                echo "success";
                            }else{
                                echo "This email does address not Exist!";
                            }
                        }else{
                            echo "Something went wrong. Please try again!";
                        }
                    }else{
                        echo "Password is not valid. Must contain at least nine characters, an uppercase, a special character, and a number!!";
                    }
                }
            } else {
                echo "First and last name must contain valid characters!";
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>