<?php

    $sub="java";
    $pag="8";

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

    <title>Java Type Casting</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Type Casting------------ -->
    <div class="container">
        <h1>Java Type Casting</h1>
        <div>
            <a href="java-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Type Casting</h3>
        <p>Type casting is when you assign a value of one primitive data type to another type.
            <br>
            In Java, there are two types of casting:
            <ul>
                <li>Widening Casting (automatically) - converting a smaller type to a larger type
                    size
                    <br>
                    byte -> short -> char -> int -> long -> float -> double</li>
                <li>Narrowing Casting (manually) - converting a larger type to a smaller size type
                    <br>
                    double -> float -> long -> int -> char -> short -> byte</li>
            </ul>
        </p>

        <hr>
        <h3>Widening Casting</h3>
        <p>Widening casting is done automatically when passing a smaller size type to a larger
            size type:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    int myInt = 9;
                    double myDouble = myInt; // Automatic casting: int to double
                    System.out.println(myInt); // Outputs 9
                    System.out.println(myDouble); // Outputs 9.0
                }
            }</pre>

        <hr>
        <h3>Narrowing Casting</h3>
        <p>Narrowing casting must be done manually by placing the type in parentheses in front
            of the value:</p>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    double myDouble = 9.78;
                    int myInt = (int) myDouble; // Manual casting: double to int
                    System.out.println(myDouble); // Outputs 9.78
                    System.out.println(myInt); // Outputs 9
                }
            }</pre>



        <hr>
        <div class="mb-2">
            <a href="java-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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