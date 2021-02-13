<?php

    $sub="java";
    $pag="18";

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

    <title>Java For Loop</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java For Loop------------ -->
    <div class="container">
        <h1>Java For Loop</h1>
        <div>
            <a href="java-17.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-19.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java For Loop</h3>
        <p>
            When you know exactly how many times you want to loop through a block of code,
            use the <spam class="text-danger">for</spam> loop instead of a <spam class="text-danger">while</spam> loop:
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            for (statement 1; statement 2; statement 3) {
                // code block to be executed
            }</pre>
        <p>
            <b>Statement 1</b> is executed (one time) before the execution of the code block.
            <br>
            <b>Statement 2</b> defines the condition for executing the code block.
            <br>
            <b>Statement 3</b> is executed (every time) after the code block has been executed.
            <br>
            The example below will print the numbers 0 to 4:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            for (int i = 0; i < 5; i++) {
                System.out.println(i);
            }</pre>
        <p>
            <b>Example explained</b>
            <br>
            <b>Statement 1</b> sets a variable before the loop starts (int i = 0).
            <br>
            <b>Statement 2</b> defines the condition for the loop to run (i must be less than 5). If the
            condition is true, the loop will start over again, if it is false, the loop will end.
            <br>
            <b>Statement 3</b> increases a value (i++) each time the code block in the loop has been
            executed.
        </p>
        <h5>Another Example</h5>
        <p>This example will only print even values between 0 and 10:</p>
        <pre class="jumbotron">
            for (int i = 0; i <= 10; i = i + 2) {
                System.out.println(i);
            }</pre>

        <hr>
        <h3>For-Each Loop</h3>
        <p>
            There is also a <spam class="text-danger">for-each</spam> loop, which is used exclusively to loop through elements in
            an <spam class="text-danger">array</spam>
        </p>
        <pre class="jumbotron">
            for (type variableName : arrayName) {
                // code block to be executed
            }</pre>
        <p>
            The following example outputs all elements in the <b>cars</b> array, using a <spam class="text-danger">for-each</spam>
            loop:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
            for (String i : cars) {
                System.out.println(i);
            }</pre>
        



        <hr>
        <div class="mb-2">
            <a href="java-17.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-19.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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