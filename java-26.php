<?php

    $sub="java";
    $pag="26";

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

    <title>Java OOP</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java OOP------------ -->
    <div class="container">
        <h1>Java OOP</h1>
        <div>
            <a href="java-25.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-27.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java - What is OOP?</h3>
        <p>
            OOP stands for <b>Object-Oriented Programming.</b>
            <br>
            Procedural programming is about writing procedures or methods that perform
            operations on the data, while object-oriented programming is about creating objects
            that contain both data and methods.
            <br>
            Object-oriented programming has several advantages over procedural programming:
            <br>

            <ul>
                <li>OOP is faster and easier to execute</li>
                <li>OOP provides a clear structure for the programs</li>
                <li>OOP helps to keep the Java code DRY "Don't Repeat Yourself", and makes the
                    code easier to maintain, modify and debug</li>
                <li>OOP makes it possible to create full reusable applications with less code and
                    shorter development time</li>

            </ul>

            <b>Tip:</b> The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of
            code. You should extract out the codes that are common for the application, and
            place them at a single place and reuse them instead of repeating it.
        </p>


        <hr>
        <h3>Java - What are Classes and Objects?</h3>
        <p>
            Classes and objects are the two main aspects of object-oriented programming.
            <br>
            Look at the following illustration to see the difference between class and objects:
            <br>
            <b>Class : </b>Fruit
            <br>
            <b>Object : </b>Apple, Mango, Banana
        </p>
        <p>
            So, a class is a template for objects, and an object is an instance of a class.
            <br>
            When the individual objects are created, they inherit all the variables and methods
            from the class.

        </p>



        <hr>
        <div class="mb-2">
            <a href="java-25.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-27.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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