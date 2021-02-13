<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        include '_database_connection.php';

        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
        $suggestion = $_POST["suggestion"];

        if($name ==null){
            header("Location: /ind-learning/index.php?contactsuccess=false&&error=Please enter your name then submit the form");
        }elseif($email==null){
            header("Location: /ind-learning/index.php?contactsuccess=false&&error=Please enter your email then submit the form");
        }elseif($phone==null){
            header("Location: /ind-learning/index.php?contactsuccess=false&&error=Please enter your phone number then submit the form");
        }elseif($message==null){
            header("Location: /ind-learning/index.php?contactsuccess=false&&error=Please enter your message then submit the form");
        }elseif($suggestion==null){
            header("Location: /ind-learning/index.php?contactsuccess=false&&error=Please enter your suggestion then submit the form");
        }else{
            $sql_query = "INSERT INTO `contact` (`contact_name`,`contact_email`,`phone_number`, `message`, `suggestion`) VALUES ('$name', '$email', '$phone', '$message', '$suggestion')";
            $result = mysqli_query($connection, $sql_query);
            if($result){
                header("Location: /ind-learning/index.php?contactsuccess=true");
            }
        }
    }

?>