<?php

    $sub="c";
    $pag="4";

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

    <title>Feathure of C language</title>


    <link rel="stylesheet" href="stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------C Introduction section------------ -->
    <div class="container">
        <h1>Features of C</h1>
        <div>
            <a href="c-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Features?</h3>

        <li>
            <b>Simple </b>
            C is a simple language in the sense that it provides a structured approach (to break the problem
            into parts), the rich set of library functions, data types .
        </li>
        <li>
            <b> Machine Independent or Portable </b>
            Unlike assembly language, c programs can be executed on different machines with some
            machine specific changes. Therefore, C is a machine independent language.

        </li>
        <li>
            <b> Mid-level programming language </b>
            Although, C is intended to do low-level programming. It is used to develop system
            applications such as kernel, driver, etc. It also supports the features of a high-level
            language. That is why it is known as mid-level language.
        </li>
        <li>
            <b> Structured programming language </b>
            C is a structured programming language in the sense that we can break the program into
            parts using functions. So, it is easy to understand and modify. Functions also provide code
            reusability.

        </li>
        <li>
            <b> Rich Library </b>
            C provides a lot of inbuilt functions that make the development fast.
        </li>
        <li>
            <b> Memory Management </b>
            It supports the feature of dynamic memory allocation. In C language, we can free the allocated
            memory at any time by calling the free() function.
        </li>
        <li>
            <b>Speed </b>
            The compilation and execution time of C language is fast since there are lesser inbuilt functions
            and hence the lesser overhead.
        </li>
        <li>
            <b> Pointer </b>
            C provides the feature of pointers. We can directly interact with the memory by using the pointers.
            We can use pointers for memory, structures, functions, array, etc
        </li>
        <li>
            <b>Recursion </b>
            In C, we can call the function within the function. It provides code reusability for every
            function. Recursion enables us to use the approach of backtracking.
        </li>
        <li>
            <b> Extensible </b>
            C language is extensible because it can easily adopt new features.
        </li>

        </ul>


        <div class="mb-2">
            <a href="c-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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