<?php

    $sub="java";
    $pag="24";

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

    <title>Java Scope</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Scope------------ -->
    <div class="container">
        <h1>Java Scope</h1>
        <div>
            <a href="java-23.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-25.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Scope</h3>
        <p>
            In Java, variables are only accessible inside the region they are created. This is called
            <b>scope</b>.
        </p>

        <hr>
        <h3>Method Scope</h3>
        <p>
            Variables declared directly inside a method are available anywhere in the method
            following the line of code in which they were declared.
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    // Code here cannot use x
                    int x = 100;
                    // Code here can use x
                    System.out.println(x);
                }
            }</pre>

        <hr>
        <h3>Block Scope</h3>
        <p>
            A block of code refers to all of the code between curly braces {} . Variables declared
            inside blocks of code are only accessible by the code between the curly braces which
            follows the line in which the variable was declared. A block of code may exist on its
            own or it may belong to an <spam class="text-danger">if</spam> , <spam class="text-danger">while</spam> or <spam class="text-danger">for</spam> statement. In the case of for
            statements, variables declared in the statement itself are also available inside the
            block's scope.
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    // Code here CANNOT use x
                    { 
                        // This is a block
                        // Code here CANNOT use x
                        int x = 100;
                        // Code here CAN use x
                        System.out.println(x);
                    } 
                    // The block ends here
                    // Code here CANNOT use x
                }
            }</pre>
        

        <hr>
        <div class="mb-2">
            <a href="java-23.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-25.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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