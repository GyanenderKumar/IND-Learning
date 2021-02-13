<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $querynumber = $_GET["querynumber"];
        $comment = $_POST["comment"];
        $user_no = $_SESSION["no"];
        $user_name = $_SESSION["name"];
        include "_database_connection.php";

        $sql_query = "INSERT INTO `comments` (`comment`, `query_no`, `user_no`, `user_name`) VALUES ('$comment', '$querynumber', '$user_no', '$user_name')";
        $result = mysqli_query($connection, $sql_query);

        if($result){
            header("Location: /ind-learning/modules/_comments_module.php?querynumber=" . $querynumber . "");
        }
    }

?>