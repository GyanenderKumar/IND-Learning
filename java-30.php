<?php

    $sub="java";
    $pag="30";

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

    <title>Java Constructors</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Constructors------------ -->
    <div class="container">
        <h1>Java Constructors</h1>
        <div>
            <a href="java-29.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-31.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Constructors</h3>
        <p>
            A constructor in Java is a special method that is used to initialize objects. The
            constructor is called when an object of a class is created. It can be used to set initial
            values for object attributes:
        </p>
        <h5>Example</h5>
        <p>Create a Constructor:</p>
        <pre class="jumbotron">
            // Create a MyClass class
            public class MyClass {
                int x; // Create a class attribute
                // Create a class constructor for the MyClass class
                public MyClass() {
                    x = 5; // Set the initial value for the class attribute x
                }
                public static void main(String[] args) {
                    MyClass myObj = new MyClass(); // Create an object of class MyClass (This
                    System.out.println(myObj.x); // Print the value of x
                }
            }
            // Outputs 5</pre>
        <p>
            Note that the constructor name must match the class name, and it cannot have a
            return type (like void ).
            <br>
            Also note that the constructor is called when the object is created.
            <br>
            All classes have constructors by default: if you do not create a class constructor
            yourself, Java creates one for you. However, then you are not able to set initial values
            for object attributes.
        </p>

        <hr>
        <h3>Constructor Parameters</h3>
        <p>
            Constructors can also take parameters, which is used to initialize attributes.
            <br>
            The following example adds an int y parameter to the constructor. Inside the
            constructor we set x to y (x=y). When we call the constructor, we pass a parameter
            to the constructor (5), which will set the value of x to 5:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                int x;
                public MyClass(int y) {
                    x = y;
                }
                public static void main(String[] args) {
                    MyClass myObj = new MyClass(5);
                    System.out.println(myObj.x);
                }
            }
            // Outputs 5</pre>
        <p>You can have as many parameters as you want:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class Car {
                int modelYear;
                String modelName;
                public Car(int year, String name) {
                    modelYear = year;
                    modelName = name;
                }
                public static void main(String[] args) {
                    Car myCar = new Car(1969, "Mustang");
                    System.out.println(myCar.modelYear + " " + myCar.modelName);
                }
            }
            // Outputs 1969 Mustang</pre>


        <hr>
        <div class="mb-2">
            <a href="java-29.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-31.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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