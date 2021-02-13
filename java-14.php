<?php

    $sub="java";
    $pag="14";

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

    <title>Java Booleans</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Booleans------------ -->
    <div class="container">
        <h1>Java Booleans</h1>
        <div>
            <a href="java-13.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-15.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Booleans</h3>
        <p>Very often, in programming, you will need a data type that can only have one of two
            values, like:</p>
        <ul>
            <li>YES / NO</li>
            <li>ON / OFF</li>
            <li>TRUE / FALSE</li>
        </ul>
        <p>For this, Java has a <spam class="text-danger">boolean</spam> data type, which can take the values <spam class="text-danger">true</spam> or <spam class="text-danger">false</spam> .
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            boolean isJavaFun = true;
            boolean isFishTasty = false;
            System.out.println(isJavaFun); // Outputs true
            System.out.println(isFishTasty); // Outputs false</pre>
        <p>However, it is more common to return boolean values from boolean expressions, for
            conditional testing (see below).
        </p>

        <hr>
        <h3>Boolean Expression</h3>
        <p>
            A <b>Boolean expression</b> is a Java expression that returns a Boolean value: <spam class="text-danger">true</spam> or
            <spam class="text-danger">false</spam> .
            <br>
            You can use a comparison operator, such as the greater than ( <spam class="text-danger">></spam> ) operator to find
            out if an expression (or a variable) is true:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 10;
            int y = 9;
            System.out.println(x > y); // returns true, because 10 is higher than 9</pre>

        <p>Or even easier:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            System.out.println(10 > 9); // returns true, because 10 is higher than 9</pre>

        <p>In the examples below, we use the equal to ( <spam class="text-danger">==</spam> ) operator to evaluate an
            expression:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 10;
            System.out.println(x == 10); // returns true, because the value of x is equal to 10</pre>
        
        <h5>Example</h5>
        <pre class="jumbotron">
            System.out.println(10 == 15); // returns false, because 10 is not equal to 15</pre>

        





        <hr>
        <div class="mb-2">
            <a href="java-13.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-15.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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