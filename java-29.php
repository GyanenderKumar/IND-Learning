<?php

    $sub="java";
    $pag="29";

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

    <title>Java Class Methods</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Class Methods------------ -->
    <div class="container">
        <h1>Java Class Methods</h1>
        <div>
            <a href="java-28.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-30.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Class Methods</h3>
        <p>
            You learned from the <a href="java-21.php">Java Methods</a> chapter that methods are declared within a class,
            and that they are used to perform certain actions:
        </p>
        <h5>Example</h5>
        <p>Create a method named <spam class="text-danger">myMethod()</spam> in MyClass:</p>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod() {
                    System.out.println("Hello World!");
                }
            }</pre>
        <p>
            <spam class="text-danger">myMethod()</spam> prints a text (the action), when it is <b>called</b>. To call a method, write the
            method's name followed by two parentheses <b>()</b> and a semicolon<b>;</b>
        </p>
        <h5>Example</h5>
        <p>Inside <spam class="text-danger">main</spam> , call <spam class="text-danger">myMethod()</spam> :</p>
        <pre class="jumbotron">
            public class MyClass {
                static void myMethod() {
                    System.out.println("Hello World!");
                }
                public static void main(String[] args) {
                    myMethod();
                }
            }
            // Outputs "Hello World!"</pre>

        <hr>
        <h3>Static vs. Non-Static</h3>
        <p>
            You will often see Java programs that have either <spam class="text-danger">static</spam> or <spam class="text-danger">public</spam> attributes and
            methods.
            <br>
            In the example above, we created a <spam class="text-danger">static</spam> method, which means that it can be
            accessed without creating an object of the class, unlike <spam class="text-danger">public</spam> , which can only be
            accessed by objects:
        </p>
        <h5>Example</h5>
        <p>An example to demonstrate the differences between <spam class="text-danger">static</spam> and <spam class="text-danger">public</spam> <b>methods</b></p>
        <pre class="jumbotron">
            public class MyClass {
                // Static method
                static void myStaticMethod() {
                    System.out.println("Static methods can be called without creating objects
                }
                // Public method
                public void myPublicMethod() {
                    System.out.println("Public methods must be called by creating objects");
                }
                // Main method
                public static void main(String[] args) {
                    myStaticMethod(); // Call the static method
                    // myPublicMethod(); This would compile an error
                    MyClass myObj = new MyClass(); // Create an object of MyClass
                    myObj.myPublicMethod(); // Call the public method on the object
                }
            }</pre>


        <hr>
        <h3>Access Methods With an Object</h3>
        <h5>Example</h5>
        <p>
            Create a Car object named <spam class="text-danger">myCar</spam> . Call the <spam class="text-danger">fullThrottle()</spam> and <spam class="text-danger">speed()</spam> methods
            on the <spam class="text-danger">myCar</spam> object, and run the program:
        </p>
        <pre class="jumbotron">
            // Create a Car class
            public class Car {
                // Create a fullThrottle() method
                public void fullThrottle() {
                    System.out.println("The car is going as fast as it can!");
                }
                // Create a speed() method and add a parameter
                public void speed(int maxSpeed) {
                    System.out.println("Max speed is: " + maxSpeed);
                }
                // Inside main, call the methods on the myCar object
                public static void main(String[] args) {
                    Car myCar = new Car(); // Create a myCar object
                    myCar.fullThrottle(); // Call the fullThrottle() method
                    myCar.speed(200); // Call the speed() method
                }
            }
            // The car is going as fast as it can!
            // Max speed is: 200</pre>
        <p>
            <b>Example Explained</b>
            <ol>
                <li> We created a custom Car class with the class keyword.</li>
                <li> We created the fullThrottle() and speed() methods in the Car class.</li>
                <li> The fullThrottle() method and the speed() method will print out some text,
                    when they are called.</li>
                <li> The speed() method accepts an int parameter called maxSpeed - we will use
                    this in 8).</li>
                <li> In order to use the Car class and its methods, we need to create an object of the
                    Car Class.</li>
                <li> Then, go to the main() method, which you know by now is a built-in Java method
                    that runs your program (any code inside main is executed).</li>
                <li> By using the new keyword we created a Car object with the name myCar .</li>
                <li> Then, we call the fullThrottle() and speed() methods on the myCar object,
                    and run the program using the name of the object ( myCar ), followed by a dot ( . ),
                    followed by the name of the method ( fullThrottle(); and speed(200); ). Notice
                    that we add an int parameter of 200 inside the speed() method.</li>
            </ol>
            <b>Remember that..</b>
            <br>
            The dot ( . ) is used to access the object's attributes and methods.
            <br>
            To call a method in Java, write the method name followed by a set of parentheses (),
            followed by a semicolon ( ; ).
            <br>
            A class must have a matching filename ( Car and Car.java).
        </p>

        <hr>
        <h3>Using Multiple Classes</h3>
        <p>
            Like we specified in the Classes chapter, it is a good practice to create an object of a
            class and access it in another class.
            <br>
            Remember that the name of the java file should match the class name. In this
            example, we have created two files in the same directory:
            <br>
            <ul>
                <li>Car.java</li>
                <li>OtherClass.java</li>
            </ul>
        </p>
        <h5>Car.java</h5>
        <pre class="jumbotron">
            public class Car {
                public void fullThrottle() {
                    System.out.println("The car is going as fast as it can!");
                }
                public void speed(int maxSpeed) {
                    System.out.println("Max speed is: " + maxSpeed);
                }
            }</pre>
        <h5>OtherClass.java</h5>
        <pre class="jumbotron">
            class OtherClass {
                public static void main(String[] args) {
                    Car myCar = new Car(); // Create a myCar object
                    myCar.fullThrottle(); // Call the fullThrottle() method
                    myCar.speed(200); // Call the speed() method
                }
            }</pre>
        <h5>When both files have been compiled:</h5>
        <pre class="jumbotron">
            C:\Users\Your Name>java OtherClass</pre>
        <h5>And the output will be:</h5>
        <pre class="jumbotron">
            The car is going as fast as it can!
            Max speed is: 200</pre>




        <hr>
        <div class="mb-2">
            <a href="java-28.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-30.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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