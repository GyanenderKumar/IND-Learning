<?php

    $sub="c";
    $pag="2";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- ---Font Awesome CDN-- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  

    <title>Introduction to C Language</title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------C Introduction section------------ -->
    <div class="container">
        <h1>C Introduction</h1>
        <div>
            <a href="c-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
            <a href="c-3.php" class="btn btn-outline-primary">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>What is C?</h3>
        <p>C is a general-purpose high level language that was originally developed by Dennis Ritchie for the Unix operating system.
            <br>
            It was first implemented on the Digital Eqquipment Corporation PDP-11 computer in 1972. The Unix operating system and virtually all Unix applications are written in the C language.
            <br>
            It is used for:
        </p>
        <ul>
            <li>
                Operating system
            </li>
            <li>
                Games
            </li>
            <li>
                Web applications
            </li>
            <li>
                Application requires calculations
            </li>
            <li>
                Database connection
            </li>
            <li>
                And much, much more!
            </li>
        </ul>


        <hr>
        <h3>Why Use C?</h3>
        <ul>
            <li> C is a structured programming language which allows a complex program to be broken into simpler programs called functions</li>
            <li> It also allows free movement of data across these functions.</li>
            <li> C is highly portable and is used for scripting system </li>
            <li> Applications which form a major part of Windows, UNIX, and Linux operating system. </li>
            <li>It is easy to learn and simple to use</li>
            <li>It is open-source and free</li>
        </ul>


        <hr>
        <h3>Get Started</h3>
        <p>This tutorial will teach you the basics of C language.
            <br>
            It is not necessary to have any prior programming experience.
        </p>


        <hr>
        <div class="mb-2">
            <a href="c-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
            <a href="c-3.php" class="btn btn-outline-primary">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <div class="mb-2">
            <?php

            include 'modules/_query_module.php';

            ?>
        </div>

    </div>




    <!-- ------Footer Module----- -->
    <?php

    include 'modules/_footer_module.php';

    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>