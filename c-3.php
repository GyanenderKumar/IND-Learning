<?php

    $sub="c";
    $pag="3";

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


    <title>Java Getting Started</title>


    <link rel="stylesheet" href="stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!--Login Module -->
    <?php

    include 'modules/_login_module.php';

    ?>




    <!--Signup Module -->
    <?php

    include 'modules/_signup_module.php';


    ?>
    <div class="container">
        <h1> Installation process </h1>
        <div>
            <a href="c-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C Install</h3>
        <p>
            Use https://developerinsider.co
        </p>
        <p>To install C on Windows:</p>
        <ol>
            <li>
                Download Turbo C++
            </li>
            <li>Create turboc directory inside c drive and extract the tc3.zip inside c:\turboc
            </li>
            <li>
                Double click on install.exe file
            </li>
            <li>Click on the tc application file located inside c:\TC\BIN to write the c program
            </li>
        </ol>


        <hr>
        <h3>C Quickstart</h3>
        <p>
            First C Program
            Before starting the abcd of C language, you need to learn how to write, compile and run the first c program.

            To write the first c program, open the C console and write the following code:
        </p>


        <pre class="jumbotron">
            #include <stdio.h>
            int main(){
                printf("Hello C Language");
                return 0;
            }</pre>


        <p>
            How to compile and run the c program
            There are 2 ways to compile and run the c program, by menu and by shortcut.

            <br>
            <b>By menu</b>
            Now click on the compile menu then compile sub menu to compile the c program.
            Then click on the run menu then run sub menu to run the c program.

            <br>
            <b>By shortcut</b>
            Or, press ctrl+f9 keys compile and run the program directly.

            <br>
            You will see the following output on user screen.

            <br>
            <b>Congratulations!</b> You have written and executed your first C program.
        </p>


        <hr>
        <div class="mb-2">
            <a href="c-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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