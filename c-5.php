<?php

    $sub="c";
    $pag="5";

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

    <title>Keywords in the C Language</title>


    <link rel="stylesheet" href="stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------C Keywords------------ -->
    <div class="container">
        <h1>C Keywords</h1>
        <div>
            <a href="c-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <p>
            C has a set of keywords that are reserved words that cannot be used as variables,
            or any other identifiers:
        </p>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width:20%">Keyword</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><a href="#">auto</a></td>
                    <td>The auto keyword declares automatic variables. </td>
                </tr>
                <tr>
                    <td><a href="#">char</a></td>
                    <td>The char keyword declares a character variable. </td>
                </tr>
                <tr>
                    <td><a href="#">const</a></td>
                    <td> An identifier can be declared constant by using the const keyword.</td>
                </tr>
                <tr>
                    <td><a href="#">enum</a></td>
                    <td>Enumeration types are declared in C programming using keyword enum.</td>
                </tr>
                <tr>
                    <td><a href="#">extern</a></td>
                    <td>The extern keyword declares that a variable or a function has external linkage outside of the file it is declared.</td>
                </tr>
                <tr>
                    <td><a href="#">int</a></td>
                    <td>The int keyword is used to declare integer type variables. </td>
                </tr>
                <tr>
                    <td><a href="#">short, long, signed and unsigned</a></td>
                    <td>The short, long, signed and unsigned keywords are type modifiers that alter the meaning of a base data type to yield a new type.</td>
                </tr>
                <tr>
                    <td><a href="#">return</a></td>
                    <td>The return keyword terminates the function and returns the value.</td>
                </tr>
                <tr>
                    <td><a href="#">size of</a></td>
                    <td>
                        The sizeof keyword evaluates the size of data (a variable or a constant).
                    </td>
                </tr>
                <tr>
                    <td><a href="#">register</a></td>
                    <td>The register keyword creates register variables which are much faster than normal variables.</td>
                </tr>
                <tr>
                    <td><a href="#">static</a></td>
                    <td>The static keyword creates a static variable. The value of the static variables persists until the end of the program.</td>
                </tr>
                <tr>
                    <td><a href="#">struct</a></td>
                    <td>The struct keyword is used for declaring a structure. A structure can hold variables of different types under a single name.</td>
                </tr>
                <tr>
                    <td><a href="#">else</a></td>
                    <td>Used in conditional statements</td>
                </tr>
                <tr>
                    <td><a href="#">type def</a></td>
                    <td>The typedef keyword is used to explicitly associate a type with an identifier.</td>
                </tr>
                <tr>
                    <td><a href="3">union</a></td>
                    <td>A union is used for grouping different types of variables under a single name.</td>
                </tr>
                <tr>
                    <td><a href="#">void</a></td>
                    <td>The void keyword meaning nothing or no value.</td>
                </tr>
                <tr>
                    <td><a href="#">volatile</a></td>
                    <td>The volatile keyword is used for creating volatile objects. A volatile object can be modified in an unspecified way by the hardware.
                    </td>
                </tr>

            </tbody>
        </table>

        <hr>
        <div class="mb-2">
            <a href="c-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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