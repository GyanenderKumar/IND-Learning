<?php

    $sub="java";
    $pag="28";

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

    <title>Java Class Attributes</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Class Attributes------------ -->
    <div class="container">
        <h1>Java Class Attributes</h1>
        <div>
            <a href="java-27.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-29.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Class Attributes</h3>
        <p>
            In the previous chapter, we used the term "variable" for x in the example (as shown
            below). It is actually an <b>attribute</b> of the class. Or you could say that class attributes
            are variables within a class:
        </p>
        <h5>Example</h5>
        <p>Create a class called " <spam class="text-danger">MyClass</spam> " with two attributes: <spam class="text-danger">x</spam> and <spam class="text-danger">y</spam> :</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
                int y = 3;
            }</pre>
        <p>Another term for class attributes is <b>fields</b>.</p>

        <hr>
        <h3>Accessing Attributes</h3>
        <p>
            You can access attributes by creating an object of the class, and by using the dot
            syntax ( <spam class="text-danger">.</spam> ):
            <br>
            The following example will create an object of the <spam class="text-danger">MyClass</spam> class, with the name
            <spam class="text-danger">myObj</spam> . We use the <spam class="text-danger">x</spam> attribute on the object to print its value:
        </p>
        <h5>Example</h5>
        <p>
            Create an object called " <spam class="text-danger">myObj</spam> " and print the value of <spam class="text-danger">x</spam>
        </p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    System.out.println(myObj.x);
                }
            }</pre>

        <hr>
        <h3>Modify Attributes</h3>
        <p>You can also modify attribute values:</p>
        <h5>Example</h5>
        <p>Set the value of x to 40:</p>
        <pre class="jumbotron">
            public class MyClass {
                int x;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    myObj.x = 40;
                    System.out.println(myObj.x);
                }
            }</pre>
        <p>Or override existing values:</p>
        <h5>Example</h5>
        <p>Change the value of x to 25:</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 10;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    myObj.x = 25; // x is now 25
                    System.out.println(myObj.x);
                }
            }</pre>
        <p>
            If you don't want the ability to override existing values, declare the attribute as
            <spam class="text-danger">final</spam> :
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                final int x = 10;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    myObj.x = 25; // will generate an error: cannot assign a value to a final
                    System.out.println(myObj.x);
                }
            }</pre>
        <p>
            The <spam class="text-danger">final</spam> keyword is useful when you want a variable to always store the same
            value, like PI (3.14159...).
            <br>
            The <spam class="text-danger">final</spam> keyword is called a <b>"modifier"</b>.
        </p>

        <hr>
        <h3>Multiple Objects</h3>
        <p>
            If you create multiple objects of one class, you can change the attribute values in one
            object, without affecting the attribute values in the other:
        </p>
        <h5>Example</h5>
        <p>Change the value of <spam class="text-danger">x</spam> to 25 in <spam class="text-danger">myObj2</spam> , and leave <spam class="text-danger">x</spam> in <spam class="text-danger">myObj1</spam> unchanged:</p>
        <pre class="jumbotron">
            public class MyClass {
                int x = 5;
                public static void main(String[] args) {
                    MyClass myObj1 = new MyClass(); // Object 1
                    MyClass myObj2 = new MyClass(); // Object 2
                    myObj2.x = 25;
                    System.out.println(myObj1.x); // Outputs 5
                    System.out.println(myObj2.x); // Outputs 25
                }
            }</pre>

        <hr>
        <h3>Multiple Attributes</h3>
        <p>You can specify as many attributes as you want:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class Person {
                String fname = "John";
                String lname = "Doe";
                int age = 24;
                public static void main(String[] args) {
                    Person myObj = new Person();
                    System.out.println("Name: " + myObj.fname + " " + myObj.lname);
                    System.out.println("Age: " + myObj.age);
                }
            }</pre>
        <p>The next chapter will teach you how to create class methods and how to access them
            with objects.</p>


        <hr>
        <div class="mb-2">
            <a href="java-27.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-29.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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