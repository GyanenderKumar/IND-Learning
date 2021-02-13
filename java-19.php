<?php

    $sub="java";
    $pag="19";

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

    <title>Java Break and Continue</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Break and Continue------------ -->
    <div class="container">
        <h1>Java Break and Continue</h1>
        <div>
            <a href="java-18.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-20.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Break</h3>
        <p>
            You have already seen the <spam class="text-danger">break</spam> statement used in an earlier chapter of this
            tutorial. It was used to "jump out" of a <spam class="text-danger">switch</spam> statement.
            <br>
            The <spam class="text-danger">break</spam> statement can also be used to jump out of a loop.
            <br>
            This example jumps out of the loop when i is equal to 4:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            for (int i = 0; i < 10; i++) {
                if (i == 4) {
                    break;
                }
                System.out.println(i);
            }</pre>

        <hr>
        <h3>Java Continue</h3>
        <p>
            The <spam class="text-danger">continue</spam> statement breaks one iteration (in the loop), if a specified condition
            occurs, and continues with the next iteration in the loop.
            <br>
            This example skips the value of 4:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            for (int i = 0; i < 10; i++) {
                if (i == 4) {
                    continue;
                }
                System.out.println(i);
            }</pre>

        <hr>
        <h3>Break and Continue in While Loop</h3>
        <p>
            You can also use <spam class="text-danger">break</spam> and <spam class="text-danger">continue</spam> in while loops:
        </p>
        <h5>Break Example</h5>
        <pre class="jumbotron">
            int i = 0;
            while (i < 10) {
                System.out.println(i);
                i++;
                if (i == 4) {
                    break;
                }
            }</pre>
        <h5>Continue Example</h5>
        <pre class="jumbotron">
            int i = 0;
            while (i < 10) {
                if (i == 4) {
                    i++;
                    continue;
                }
                System.out.println(i);
                i++;
            }</pre>
        

        <hr>
        <div class="mb-2">
            <a href="java-18.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-20.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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