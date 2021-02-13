<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        include "_database_connection.php";

        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $user_type = $_POST["user_type"];

        $sql_query = "Select * from `users` where user_email = '$email'";
        $result = mysqli_query($connection,$sql_query);
        $num_rows = mysqli_num_rows($result);

        if($num_rows > 0){
            $error = "Email Already Registered OR Account Already Created";
            header("Location: /ind-learning/index.php?signupsuccess=false&error=$error");
            exit();
        }else{
            if($password != $cpassword){
                $error = "Password do not match";
                header("Location: /ind-learning/index.php?signupsuccess=false&error=$error");
                exit();
            }else{
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql_query = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`,`user_type`) VALUES ('$name', '$email', '$hash','$user_type')";
                $result = mysqli_query($connection,$sql_query);
                if($result){
                    header("Location: /ind-learning/index.php?signupsuccess=true");
                    exit();
                }
            }
        }
    }
?>
