<?php

    $sub="java";
    $pag="27";

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

    <title>Java Classes and Objects</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Classes and Objects------------ -->
    <div class="container">
        <h1>Java Classes and Objects</h1>
        <div>
            <a href="java-26.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-28.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Classes/Objects</h3>
        <p>
            Java is an object-oriented programming language.
            <br>
            Everything in Java is associated with classes and objects, along with its attributes and
            methods. For example: in real life, a car is an object. The car has <b>attributes</b>, such as
            weight and color, and <b>methods</b>, such as drive and brake.
            <br>
            A Class is like an object constructor, or a "blueprint" for creating objects.
        </p>

        <hr>
        <h3>Create a Class</h3>
        <p>
            To create a class, use the keyword <spam class="text-danger">class</spam> :
        </p>
        <h5>MyClass.java</h5>
        <p>Create a class named " <spam class="text-danger">MyClass</spam> " with a variable x:</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
            }</pre>

        <hr>
        <h3>Create an Object</h3>
        <p>
            In Java, an object is created from a class. We have already created the class named
            <spam class="text-danger">MyClass</spam> , so now we can use this to create objects.
            <br>
            To create an object of <spam class="text-danger">MyClass</spam> , specify the class name, followed by the object name,
            and use the keyword <spam class="text-danger">new</spam> :
        </p>
        <h5>Example</h5>
        <p>Create an object called " <spam class="text-danger">myObj</spam> " and print the value of x:</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    System.out.println(myObj.x);
                }
            }</pre>

        <hr>
        <h3>Multiple Objects</h3>
        <p>You can create multiple objects of one class:</p>
        <h5>Example</h5>
        <p>Create two objects of <spam class="text-danger">MyClass</spam> :</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
                public static void main(String[] args) {
                    MyClass myObj1 = new MyClass(); // Object 1
                    MyClass myObj2 = new MyClass(); // Object 2
                    System.out.println(myObj1.x);
                    System.out.println(myObj2.x);
                }
            }</pre>

        <hr>
        <h3>Using Multiple Classes</h3>
        <p>
            You can also create an object of a class and access it in another class. This is often
            used for better organization of classes (one class has all the attributes and methods,
            while the other class holds the <spam class="text-danger">main()</spam> method (code to be executed)).
            <br>
            Remember that the name of the java file should match the class name. In this
            example, we have created two files in the same directory/folder:
            <ul>
                <li>MyClass.java</li>
                <li>OtherClass.java</li>
            </ul>
        </p>
        <h5>MyClass.java</h5>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
            }</pre>

        <h5>OtherClass.java</h5>
        <pre class="jumbotron">
            class OtherClass {
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    System.out.println(myObj.x);
                }
            }</pre>
        <p>When both files have been compiled:</p>
        <pre class="jumbotron">
            C:\Users\Your Name>javac MyClass.java
            C:\Users\Your Name>javac OtherClass.java</pre>
        <p>Run the OtherClass.java file:</p>
        <pre class="jumbotron">
            C:\Users\Your Name>java OtherClass</pre>
        <p>And the output will be:</p>
        <pre class="jumbotron">
            5</pre>



        <hr>
        <div class="mb-2">
            <a href="java-26.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-28.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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