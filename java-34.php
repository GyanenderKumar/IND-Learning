<?php

$sub = "java";
$pag = "34";

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

    <title>Java Inheritance</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Inheritance------------ -->
    <div class="container">
        <h1>Java Inheritance</h1>
        <div>
            <a href="java-33.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-35.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Inheritance (Subclass and Superclass)</h3>
        <p>
            In Java, it is possible to inherit attributes and methods from one class to another. We
            group the "inheritance concept" into two categories:
            <ul>
                <li>subclass (child) - the class that inherits from another class</li>
                <li>superclass (parent) - the class being inherited from</li>
            </ul>
            To inherit from a class, use the <spam class="text-danger">extends</spam> keyword.
            In the example below, the <spam class="text-danger">Car</spam> class (subclass) inherits the attributes and methods
            from the <spam class="text-danger">Vehicle</spam> class (superclass):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            class Vehicle {
                protected String brand = "Ford"; // Vehicle attribute
                public void honk() { // Vehicle method
                    System.out.println("Tuut, tuut!");
                }
            }
            class Car extends Vehicle {
                private String modelName = "Mustang"; // Car attribute
                public static void main(String[] args) {
                    // Create a myCar object
                    Car myCar = new Car();
                    // Call the honk() method (from the Vehicle class) on the myCar object
                    myCar.honk();
                    // Display the value of the brand attribute (from the Vehicle class) and
                    System.out.println(myCar.brand + " " + myCar.modelName);
                }
            }</pre>
        <p>
            Did you notice the protected modifier in Vehicle?
            <br>
            We set the brand attribute in Vehicle to a protected access modifier. If it was set
            to private , the Car class would not be able to access it.
            <br>
            Why And When To Use "Inheritance"?
            <br>
            - It is useful for code reusability: reuse attributes and methods of an existing class
            when you create a new class.
        </p>

        <hr>
        <h3>The final keyword</h3>
        <p>
            If you don't want other classes to inherit from a class, use the <spam class="text-danger">final</spam> keyword:
            <br>
            If you try to access a <spam class="text-danger">final</spam> class, Java will generate an error:
        </p>
        <pre class="jumbotron">
            final class Vehicle {
             ...
            }
            class Car extends Vehicle {
             ...
            }</pre>
        <p>
            The output will be something like this:
        </p>
        <pre class="jumbotron">
            Car.java:8: error: cannot inherit from final Vehicle
            class Car extends Vehicle {
            ^
            1 error)</pre>


        <hr>
        <div class="mb-2">
            <a href="java-33.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-35.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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