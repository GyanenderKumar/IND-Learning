<?php

    $sub="java";
    $pag="25";

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

    <title>Java Recursion</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Recursion------------ -->
    <div class="container">
        <h1>Java Recursion</h1>
        <div>
            <a href="java-24.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-26.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Recursion</h3>
        <p>
            Recursion is the technique of making a function call itself. This technique provides a
            way to break complicated problems down into simple problems which are easier to
            solve.
            <br>
            Recursion may be a bit difficult to understand when encountering it for the first time,
            the best way to figure out how it works is to experiment with it.
        </p>

        <hr>
        <h3>Recursion Example</h3>
        <p>
            Adding two numbers together is easy to do, but adding a range of numbers is more
            complicated. In the following example, recursion is used to add a range of numbers
            together by breaking it down into the simple task of adding two numbers:
        </p>
        <h5>Example</h5>
        <p>Use recursion to add all of the numbers up to 10.</p>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    int result = sum(10);
                    System.out.println(result);
                }
                public static int sum(int k) {
                    if (k > 0) {
                        return k + sum(k - 1);
                    } else {
                        return 0;
                    }
                }
            }</pre>
        <p>
            <b>Example Explained</b>
            <br>
            When the sum() function is called, it adds parameter k to the sum of all numbers
            smaller than k and returns the result. When k becomes 0, the function just returns
            0. When running, the program follows these steps:
            <ul>
                <li>10 + sum(9)</li>
                <li>10 + ( 9 + sum(8) )</li>
                <li>10 + ( 9 + ( 8 + sum(7) ) )</li>
                <li>...</li>
                <li>10 + 9 + 8 + 7 + 6 + 5 + 4 + 3 + 2 + 1 + sum(0)</li>
                <li>10 + 9 + 8 + 7 + 6 + 5 + 4 + 3 + 2 + 1 + 0</li>
            </ul>
            Since the function does not call itself when k is 0, the program stops there and
            returns the result.
        </p>

        <hr>
        <h3>Halting Condition</h3>
        <p>
            Just as loops can run into the problem of infinite looping, recursive functions can run
            into the problem of infinite recursion. Infinite recursion is when the function never
            stops calling itself. Every recursive function should have a halting condition, which is
            the condition where the function stops calling itself. In the previous example, the
            halting condition is when the parameter k becomes 0.
            <br>
            It is helpful to see a variety of different examples to better understand the concept.
            In this example, the function adds a range of numbers between a start and an end.
            The halting condition for this recursive function is when <b>end</b> is not greater than
            <b>start</b>:
        </p>
        <h5>Example</h5>
        <p>Use recursion to add all of the numbers between 5 to 10.</p>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    int result = sum(5, 10);
                    System.out.println(result);
                }
                public static int sum(int start, int end) {
                    if (end > start) {
                        return end + sum(start, end - 1);
                    } else {
                        return end;
                    }
                }
            }</pre>


        <hr>
        <div class="mb-2">
            <a href="java-24.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-26.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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