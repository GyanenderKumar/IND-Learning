<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        include "_database_connection.php";

        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql_query = "Select * from `users` where user_email = '$email'";
        $result = mysqli_query($connection,$sql_query);
        $num_rows = mysqli_num_rows($result);

        if($num_rows == 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['user_password'])){
                session_start();
                $_SESSION["loggedin"] = true;
                $_SESSION["no"] = $row["s_no"];
                $_SESSION["name"] = $row["user_name"];
                $_SESSION["email"] = $row["user_email"];
                header("Location: /ind-learning/index.php?loginsuccess=true");
                exit();
            }else{
                $error = "Password wrong";
                header("Location: /ind-learning/index.php?loginsuccess=false&error=$error");
                exit();
            }
        }else{
            $error = "you are not created account please signup first";
            header("Location: /ind-learning/index.php?loginsuccess=false&error=$error");
            exit();
        }
    }
?>