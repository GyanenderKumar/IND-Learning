<?php

    $sub="java";
    $pag="22";

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

    <title>Java Method Parameters</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Method Parameters------------ -->
    <div class="container">
        <h1>Java Method Parameters</h1>
        <div>
            <a href="java-21.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-23.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Parameters and Arguments</h3>
        <p>
            Information can be passed to methods as parameter. Parameters act as variables
            inside the method.
            <br>
            Parameters are specified after the method name, inside the parentheses. You can add
            as many parameters as you want, just separate them with a comma.
            <br>
            The following example has a method that takes a <spam class="text-danger">String</spam> called <b>fname</b> as
            parameter. When the method is called, we pass along a first name, which is used
            inside the method to print the full name:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod(String fname) {
                    System.out.println(fname + " Refsnes");
                }
                public static void main(String[] args) {
                    myMethod("Liam");
                    myMethod("Jenny");
                    myMethod("Anja");
                }
            }
            // Liam Refsnes
            // Jenny Refsnes
            // Anja Refsnes</pre>
        <p>
            When a <b>parameter</b> is passed to the method, it is called an <b>argument</b>. So, from the
            example above: <spam class="text-danger">fname</spam> is a <b>parameter</b>, while <spam class="text-danger">Liam </spam>, <spam class="text-danger">Jenny</spam> and <spam class="text-danger">Anja </spam>are
            <b>arguments</b>.
        </p>

        <hr>
        <h3>Multiple Parameters</h3>
        <p>You can have as many parameters as you like:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod(String fname, int age) {
                    System.out.println(fname + " is " + age);
                }
                public static void main(String[] args) {
                    myMethod("Liam", 5);
                    myMethod("Jenny", 8);
                    myMethod("Anja", 31);
                }
            }
            // Liam is 5
            // Jenny is 8
            // Anja is 31</pre>
        <p>
            <b>Note:</b> that when you are working with multiple parameters, the method call must have
            the same number of arguments as there are parameters, and the arguments must be
            passed in the same order.
        </p>

        <hr>
        <h3>Return Values</h3>
        <p>
            The <spam class="text-danger">void</spam> keyword, used in the examples above, indicates that the method should
            not return a value. If you want the method to return a value, you can use a primitive
            data type (such as <spam class="text-danger">int</spam> , <spam class="text-danger">char</spam> , etc.) instead of <spam class="text-danger">void</spam> , and use the <spam class="text-danger">return</spam> keyword
            inside the method:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static int myMethod(int x) {
                    return 5 + x;
                }
                public static void main(String[] args) {
                    System.out.println(myMethod(3));
                }
            }
            // Outputs 8 (5 + 3)</pre>
        <p>This example returns the sum of a method's <b>two parameters:</b></p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static int myMethod(int x, int y) {
                    return x + y;
                }
                public static void main(String[] args) {
                    System.out.println(myMethod(5, 3));
                }
            }
            // Outputs 8 (5 + 3)</pre>
        <p>
            You can also store the result in a variable (recommended, as it is easier to read and
            maintain):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                static int myMethod(int x, int y) {
                    return x + y;
                }
                public static void main(String[] args) {
                    int z = myMethod(5, 3);
                    System.out.println(z);
                }
            }
            // Outputs 8 (5 + 3)</pre>

        <hr>
        <h3>A Method with If...Else</h3>
        <p>It is common to use <spam class="text-danger">if...else</spam> statements inside methods:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                // Create a checkAge() method with an integer variable called age
                static void checkAge(int age) {
                    // If age is less than 18, print "access denied"
                    if (age < 18) {
                        System.out.println("Access denied - You are not old enough!");
                        // If age is greater than 18, print "access granted"
                    } else {
                        System.out.println("Access granted - You are old enough!");
                    }
                }
                public static void main(String[] args) {
                    checkAge(20); // Call the checkAge method and pass along an age of 20
                }
            }
            // Outputs "Access granted - You are old enough!"</pre>



        <hr>
        <div class="mb-2">
            <a href="java-21.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-23.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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