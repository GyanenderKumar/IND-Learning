<?php

    $sub="java";
    $pag="4";

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

    <title>Java Syntax</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------Java Syntax------------ -->
    <div class="container">
        <h1>Java Syntax</h1>
        <div>
            <a href="java-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Syntax</h3>
        <p>
            In the previous chapter, we created a Java file called MyClass.java, and we used the
            following code to print "Hello World" to the screen:
        </p>

        <h5>MyClass.java</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    System.out.println("Hello World");
                }
            }</pre>

        <h5>Example explained</h5>
        <p>Every line of code that runs in Java must be inside a class . In our example, we
            named the class <b>MyClass</b>. A class should always start with an uppercase first letter.
            <br>
            <b>Note:</b> Java is case-sensitive: "MyClass" and "myclass" has different meaning.
            <br>
            The name of the java file <b>must match</b> the class name. When saving the file, save it
            using the class name and add ".java" to the end of the filename. To run the example above on your computer,
            make sure that Java is properly installed:
            <a href="java-2.html">Go to the Get Started Chapter</a> for how to install Java. The output should be:
        </p>
        <pre class="jumbotron">
            Hello World</pre>

        <hr>
        <h3>The main Method</h3>
        <p>The main() method is required and you will see it in every Java program:</p>
        <pre class="jumbotron">
            public static void main(String[] args)</pre>
        <p>
            Any code inside the main() method will be executed. You don't have to understand
            the keywords before and after main. You will get to know them bit by bit while
            reading this tutorial.
            <br>
            For now, just remember that every Java program has a class name which must
            match the filename, and that every program must contain the main() method.
        </p>

        <hr>
        <h3>System.out.println()</h3>
        <p>
            Inside the main() method, we can use the println() method to print a line of text
            to the screen:
        </p>
        <pre class="jumbotron">
            public static void main(String[] args) {
                System.out.println("Hello World");
            }</pre>
        <p>
            <b>Note:</b> The curly braces {} marks the beginning and the end of a block of code.
            <br>
            <b>Note:</b> Each code statement must end with a semicolon.
        </p>


        <hr>
        <div class="mb-2">
            <a href="java-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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