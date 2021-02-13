<?php

    $sub="java";
    $pag="32";

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

    <title>Java Encapsulation</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Encapsulation------------ -->
    <div class="container">
        <h1>Java Encapsulation</h1>
        <div>
            <a href="java-31.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-33.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Encapsulation</h3>
        <p>
            The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from
            users. To achieve this, you must:
            <br>
            <ul>
                <li>declare class variables/attributes as <spam class="text-danger">private</spam>
                </li>
                <li>provide public get and set methods to access and update the value of a
                    <spam class="text-danger">private</spam> variable</li>

            </ul>
        </p>

        <hr>
        <h3>Get and Set</h3>
        <p>
            You learned from the previous chapter that private variables can only be accessed
            within the same class (an outside class has no access to it). However, it is possible to
            access them if we provide public <spam class="text-danger">get</spam> and <spam class="text-danger">set</spam> methods.
            <br>
            The <spam class="text-danger">get</spam> method returns the variable value, and the <spam class="text-danger">set</spam> method sets the value.
            <br>
            Syntax for both is that they start with either <spam class="text-danger">get</spam> or <spam class="text-danger">set</spam> , followed by the name of
            the variable, with the first letter in upper case:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class Person {
                private String name; // private = restricted access
                // Getter
                public String getName() {
                    return name;
                }
                // Setter
                public void setName(String newName) {
                    this.name = newName;
                }
            }</pre>
        <p>
            <b>Example explained</b>
            <br>
            The <spam class="text-danger">get</spam> method returns the value of the variable name .
            <br>
            The <spam class="text-danger">set</spam> method takes a parameter ( <spam class="text-danger">newName</spam> ) and assigns it to the name variable.
            <br>
            The <spam class="text-danger">this</spam> keyword is used to refer to the current object.
            <br>
            However, as the name variable is declared as private , we cannot access it from
            outside this class:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    Person myObj = new Person();
                    myObj.name = "John"; // error
                    System.out.println(myObj.name); // error
                }
            }</pre>
        <p>If the variable was declared as <spam class="text-danger">public</spam> , we would expect the following output:</p>
        <pre class="jumbotron">
            John</pre>
        <p>However, as we try to access a <spam class="text-danger">private</spam> variable, we get an error:</p>
        <pre class="jumbotron">
            MyClass.java:4: error: name has private access in Person
            myObj.name = "John";
            ^
            MyClass.java:5: error: name has private access in Person
            System.out.println(myObj.name);
            ^
            2 errors</pre>
        <p>
            Instead, we use the <spam class="text-danger">getName()</spam> and <spam class="text-danger">setName()</spam> methods to acccess and update the
            variable:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    Person myObj = new Person();
                    myObj.setName("John"); // Set the value of the name variable to "John"
                    System.out.println(myObj.getName());
                }
            }
            // Outputs "John"</pre>

        <hr>
        <h3>Why Encapsulation?</h3>
        <ul>
            <li>Better control of class attributes and methods</li>
            <li>Class attributes can be made <b>read-only</b> (if you only use the <spam class="text-danger">get</spam> method), or
                <B>write-only</B> (if you only use the <spam class="text-danger">set</spam> method)</li>
            <li>Flexible: the programmer can change one part of the code without affecting
                other parts</li>
            <li>Increased security of data</li>
        </ul>




        <hr>
        <div class="mb-2">
            <a href="java-31.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-33.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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