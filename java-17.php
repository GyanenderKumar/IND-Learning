<?php

    $sub="java";
    $pag="17";

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

    <title>Java While Loop</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java While Loop------------ -->
    <div class="container">
        <h1>Java While Loop</h1>
        <div>
            <a href="java-16.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-18.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Loops</h3>
        <p>
            Loops can execute a block of code as long as a specified condition is reached.
            <br>
            Loops are handy because they save time, reduce errors, and they make code more
            readable.
        </p>

        <hr>
        <h3>Java While Loop</h3>
        <p>
            The <spam class="text-danger">while</spam> loop loops through a block of code as long as a specified condition is
            <spam class="text-danger">true</spam>:
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            while (condition) {
                // code block to be executed
            }</pre>
        <p>
            In the example below, the code in the loop will run, over and over again, as long as a
            variable (i) is less than 5:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int i = 0;
            while (i < 5) {
                System.out.println(i);
                i++;
            }</pre>
        <p>
            <b>Note:</b> Do not forget to increase the variable used in the condition, otherwise the loop
            will never end!
        </p>

        <hr>
        <h3>The Do/While Loop</h3>
        <p>
            The <spam class="text-danger">do/while</spam> loop is a variant of the <spam class="text-danger">while</spam> loop. This loop will execute the code
            block once, before checking if the condition is <spam class="text-danger">true</spam>, then it will repeat the loop as long
            as the condition is <spam class="text-danger">true</spam>.
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            do {
                // code block to be executed
            }
            while (condition);</pre>
        <p>
            The example below uses a <spam class="text-danger">do/while</spam> loop. The loop will always be executed at least
            once, even if the condition is false, because the code block is executed before the
            condition is tested:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int i = 0;
            do {
                System.out.println(i);
                i++;
            }
            while (i < 5);</pre>
        <p>
            Do not forget to increase the variable used in the condition, otherwise the loop will
            never end!
        </p>



        <hr>
        <div class="mb-2">
            <a href="java-16.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-18.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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