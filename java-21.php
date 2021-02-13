<?php

    $sub="java";
    $pag="21";

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

    <title>Java Methods</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Methods------------ -->
    <div class="container">
        <h1>Java Methods</h1>
        <div>
            <a href="java-20.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-22.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <p>
            A <b>method</b> is a block of code which only runs when it is called.
            <br>
            You can pass data, known as parameters, into a method.
            <br>
            Methods are used to perform certain actions, and they are also known as
            <b>functions</b>.
            <br>
            Why use methods? To reuse code: define the code once, and use it many times.
        </p>

        <hr>
        <h3>Create a Method</h3>
        <p>
            A method must be declared within a class. It is defined with the name of the method,
            followed by parentheses (). Java provides some pre-defined methods, such as
            <spam class="text-danger">System.out.println()</spam> , but you can also create your own methods to perform
            certain actions:
        </p>
        <h5>Example</h5>
        <p>Create a method inside MyClass:</p>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod() {
                    // code to be executed
                }
            }</pre>
        <p>
            <b>Example Explained</b>
            <ul>
                <li>
                    <spam class="text-danger">myMethod()</spam> is the name of the method
                </li>
                <li>
                    <spam class="text-danger">static</spam> means that the method belongs to the MyClass class and not an object
                    of the MyClass class. You will learn more about objects and how to access
                    methods through objects later in this tutorial.
                </li>
                <li>
                    <spam class="text-danger">void</spam> means that this method does not have a return value. You will learn more
                    about return values later in this chapter
                </li>
            </ul>
        </p>

        <hr>
        <h3>Call a Method</h3>
        <p>
            To call a method in Java, write the method's name followed by two parentheses <b>()</b>
            and a semicolon;
            <br>
            In the following example, <spam class="text-danger">myMethod()</spam> is used to print a text (the action), when it is
            called:
        </p>
        <h5>Example</h5>
        <p>Inside <spam class="text-danger">main</spam> , call the <spam class="text-danger">myMethod()</spam> method:</p>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod() {
                    System.out.println("I just got executed!");
                }
                public static void main(String[] args) {
                    myMethod();
                }
            }
            // Outputs "I just got executed!"</pre>
        <p>A method can also be called multiple times:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod() {
                    System.out.println("I just got executed!");
                }
                public static void main(String[] args) {
                    myMethod();
                    myMethod();
                    myMethod();
                }
            }
            // I just got executed!
            // I just got executed!
            // I just got executed!</pre>



        <hr>
        <div class="mb-2">
            <a href="java-20.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-22.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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