<?php
    session_start();

    session_destroy();

    header("Location: /ind-learning/index.php");
?>