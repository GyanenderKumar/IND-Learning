<?php

    $sub="java";
    $pag="1";

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

    <title>Java Introduction</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Introduction section------------ -->
    <div class="container">
        <h1>Java Introduction</h1>
        <div>
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>What is Java?</h3>
        <p>Java is a popular programming language, created in 1995.
            <br>
            It is owned by Oracle, and more than 3 billion devices run Java.
            <br>
            It is used for:
        </p>
        <ul>
            <li>
                Applications (specially Android apps)
            </li>
            <li>
                Desktop applications
            </li>
            <li>
                Web applications
            </li>
            <li>
                Web servers and application servers
            </li>
            <li>
                Games
            </li>
            <li>
                Database connection
            </li>
            <li>
                And much, much more!
            </li>
        </ul>


        <hr>
        <h3>Why Use Java?</h3>
        <ul>
            <li>Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
            <li>It is one of the most popular programming language in the world</li>
            <li>It is easy to learn and simple to use</li>
            <li>It is open-source and free</li>
            <li>It is secure, fast and powerful</li>
            <li>It has a huge community support (tens of millions of developers)</li>
            <li>Java is an object oriented language which gives a clear structure to programs
                and allows code to be reused, lowering development costs</li>
            <li>As Java is close to C++ and C#, it makes it easy for programmers to switch to
                Java or vice versa</li>
        </ul>


        <hr>
        <h3>Get Started</h3>
        <p>This tutorial will teach you the basics of Java.
            <br>
            It is not necessary to have any prior programming experience.
        </p>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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