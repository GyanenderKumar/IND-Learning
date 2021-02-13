<?php

    $sub="java";
    $pag="12";

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

    <title>Java Math</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Math------------ -->
    <div class="container">
        <h1>Java Math</h1>
        <div>
            <a href="java-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>The Java Math class has many methods that allows you to perform
            mathematical tasks on numbers.</p>

        <hr>
        <h3>Math.max(x,y)</h3>
        <p>The <spam class="text-danger">Math.max(x,y)</spam> method can be used to find the highest value of x and y:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            Math.max(5, 15);</pre>

        <hr>
        <h3>Math.min(x,y)</h3>
        <p>The <spam class="text-danger">Math.min(x,y)</spam> method can be used to find the lowest value of of x and y:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            Math.min(15,10);</pre>

        <hr>
        <h3>Math.sqrt(x)</h3>
        <p>The <spam class="text-danger">Math.sqrt(x)</spam> method returns the square root of x:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            Math.sqrt(4);</pre>

        <hr>
        <h3>Math.abs(x)</h3>
        <p>The <spam class="text-danger">Math.abs(x)</spam> method returns the absolute (positive) value of x:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            Math.abs(-5.8);</pre>

        <hr>
        <h3>Random Numbers</h3>
        <p>
            <spam class="text-danger">Math.random()</spam> returns a random number between 0.0 (inclusive), and 1.0
            (exclusive):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            Math.random();</pre>

        <p>To get more control over the random number, e.g. you only want a random number
            between 0 and 100, you can use the following formula:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int randomNum = (int)(Math.random() * 101); // 0 to 100</pre>

        


        <hr>
        <div class="mb-2">
            <a href="java-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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