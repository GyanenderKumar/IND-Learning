<?php

$sub = "java";
$pag = "33";

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

    <title>Java Packages</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Packages------------ -->
    <div class="container">
        <h1>Java Packages</h1>
        <div>
            <a href="java-32.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-34.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Packages & API</h3>
        <p>
            A package in Java is used to group related classes. Think of it as a folder in a file
            directory. We use packages to avoid name conflicts, and to write a better
            maintainable code. Packages are divided into two categories:
            <ul>
                <li>Built-in Packages (packages from the Java API)</li>
                <li>User-defined Packages (create your own packages)</li>
            </ul>
        </p>

        <hr>
        <h3>Built-in Packages</h3>
        The Java API is a library of prewritten classes, that are free to use, included in the
        Java Development Environment.
        <br>
        The library contains components for managing input, database programming, and
        much much more. The complete list can be found at Oracles website:
        <br>
        <a href="https://docs.oracle.com/javase/8/docs/api/">https://docs.oracle.com/javase/8/docs/api/.</a>
        <br>
        The library is divided into packages and classes. Meaning you can either import a
        single class (along with its methods and attributes), or a whole package that contain
        all the classes that belong to the specified package.
        <br>
        To use a class or a package from the library, you need to use the <spam class="text-danger">import</spam> keyword:

        <h5>Syntax</h5>
        <pre class="jumbotron">
            import package.name.Class; // Import a single class
            import package.name.*; // Import the whole package</pre>

        <hr>
        <h3>Import a Class</h3>
        <p>
            If you find a class you want to use, for example, the Scanner class, which is used
            to get user input, write the following code:
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            import java.util.Scanner;</pre>
        <p>
            In the example above, <spam class="text-danger">java.util</spam> is a package, while <spam class="text-danger">Scanner</spam> is a class of the
            <spam class="text-danger">java.util</spam> package.
            <br>
            To use the <spam class="text-danger">Scanner</spam> class, create an object of the class and use any of the available
            methods found in the <spam class="text-danger">Scanner</spam> class documentation. In our example, we will use the
            <spam class="text-danger">nextLine()</spam> method, which is used to read a complete line:
        </p>
        <h5>Example</h5>
        <p>Using the <spam class="test-danger">Scanner</spam> class to get user input:</p>
        <pre class="jumbotron">
            import java.util.Scanner;
            class MyClass {
                public static void main(String[] args) {
                    Scanner myObj = new Scanner(System.in);
                    System.out.println("Enter username");
                    String userName = myObj.nextLine();
                    System.out.println("Username is: " + userName);
                }
            }</pre>

        <hr>
        <h3>Import a Package</h3>
        <p>
            There are many packages to choose from. In the previous example, we used the
            Scanner class from the java.util package. This package also contains date and
            time facilities, random-number generator and other utility classes.
            <br>
            To import a whole package, end the sentence with an asterisk sign ( * ). The following
            example will import ALL the classes in the java.util package:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            import java.util.*;</pre>


        <hr>
        <h3>User-defined Packages</h3>
        <p>
            To create your own package, you need to understand that Java uses a file system
            directory to store them. Just like folders on your computer:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            └── root
                └── mypack
                    └── MyPackageClass.java</pre>
        <p>To create a package, use the <spam class="text-danger">package</spam> keyword:</p>
        <h5>MyPackageClass.java</h5>
        <pre class="jumbotron">
            package mypack;
            class MyPackageClass {
                public static void main(String[] args) {
                    System.out.println("This is my package!");
                }
            }</pre>
        <p>Save the file as MyPackageClass.java, and compile it:</p>
        <pre class="jumbotron">
            C:\Users\Your Name>javac MyPackageClass.java</pre>
        <p>Then compile the package:</p>
        <pre class="jumbotron">
            C:\Users\Your Name>javac -d . MyPackageClass.java</pre>

        <p>To run the MyPackageClass.java file, write the following:</p>
        <pre class="jumbotron">
            C:\Users\Your Name>java mypack.MyPackageClass</pre>



        <hr>
        <div class="mb-2">
            <a href="java-32.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-34.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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