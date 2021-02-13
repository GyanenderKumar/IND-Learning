<?php

    $sub="java";
    $pag="23";

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

    <title>Java Method Overloading</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Method Overloading------------ -->
    <div class="container">
        <h1>Java Method Overloading</h1>
        <div>
            <a href="java-22.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-24.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Method Overloading</h3>
        <p>
            With <b>method overloading</b>, multiple methods can have the same name with different
            parameters:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int myMethod(int x)
            float myMethod(float x)
            double myMethod(double x, double y)</pre>
        <p>Consider the following example, which have two methods that add numbers of
            different type:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            static int plusMethodInt(int x, int y) {
                return x + y;
            }
            static double plusMethodDouble(double x, double y) {
                return x + y;
            }
            public static void main(String[] args) {
                int myNum1 = plusMethodInt(8, 5);
                double myNum2 = plusMethodDouble(4.3, 6.26);
                System.out.println("int: " + myNum1);
                System.out.println("double: " + myNum2);
            }</pre>
        <p>
            Instead of defining two methods that should do the same thing, it is better to
            overload one.
            <br>
            In the example below, we overload the <spam class="text-danger">plusMethod</spam> method to work for both <spam class="text-danger">int</spam>
            and <spam class="text-danger">double</spam> :
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            static int plusMethod(int x, int y) {
                return x + y;
            }
            static double plusMethod(double x, double y) {
                return x + y;
            }
            public static void main(String[] args) {
                int myNum1 = plusMethod(8, 5);
                double myNum2 = plusMethod(4.3, 6.26);
                System.out.println("int: " + myNum1);
                System.out.println("double: " + myNum2
            }</pre>
        <p>
            <b>Note:</b> Multiple methods can have the same name as long as the number and/or type
            of parameters are different.
        </p>




        <hr>
        <div class="mb-2">
            <a href="java-22.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-24.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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