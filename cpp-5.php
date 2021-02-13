<?php
$sub = "cpp";
$pag = "5";
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

    <title>C++ Comments</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>







    <!-- ----------C++ Comments------------ -->
    <div class="container">
        <h1>C++ Comments</h1>
        <div>
            <a href="/ind-learning/cpp-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Comments</h3>
        <p>
            Program comments are explanatory statements that you can include in the C++ code. These comments help anyone reading the source code. All programming languages allow for some form of comments.
            <br>
            C++ supports single-line and multi-line comments. All characters available inside any comment are ignored by C++ compiler.
            <br>
            C++ comments start with /* and end with */. For example −
            <br>
            <pre class="jumbotron">
        /* This is a comment */

        /* C++ comments can also
          * span multiple lines
        */</pre>

            <p>
                A comment can also start with //, extending to the end of the line. For example −
            </p>
            <pre class="jumbotron">
        #include <iostream>
        using namespace std;

        main() {
           cout << "Hello World"; // prints Hello World
   
           return 0;
        }
        </pre>
            <p>When the above code is compiled, it will ignore // prints Hello World and final executable will produce the following result −</p>
            <pre class="jumbotron">
        Hello World</pre>
            <p>Within a /* and */ comment, // characters have no special meaning. Within a // comment, /* and */ have no special meaning. Thus, you can "nest" one kind of comment within the other kind. For example −
            </p>

            <pre class="jumbotron">
        /* Comment out printing of Hello World:

        cout << "Hello World"; // prints Hello World

        */
        </pre>



            <hr>
            <div class="mb-2">
                <a href="/ind-learning/cpp-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
                <a href="/ind-learning/cpp-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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