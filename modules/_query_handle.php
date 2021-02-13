<?php

    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        include '_database_connection.php';

        $query = $_POST["query"];
        $subject = $_GET["subject"];
        $page = $_GET["page"];
        $no = $_SESSION["no"];
        $name = $_SESSION["name"];

        $sql_query = "INSERT INTO `querys` (`query`,`subject`,`page`, `user_no`, `user_name`) VALUES ('$query', '$subject', '$page', '$no', '$name')";
        $result = mysqli_query($connection, $sql_query);
        if($result){
            header("Location: /ind-learning/" . $subject . "-" . $page . ".php");
        }
    }

?>