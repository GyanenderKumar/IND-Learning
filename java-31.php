<?php

    $sub="java";
    $pag="31";

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

    <title>Java Modifiers</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Modifiers------------ -->
    <div class="container">
        <h1>Java Modifiers</h1>
        <div>
            <a href="java-30.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-32.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Modifiers</h3>
        <p>
            By now, you are quite familiar with the <spam class="text-danger">public</spam> keyword that appears in almost all of
            our examples:
        </p>
        <pre class="jumbotron">
            public class MyClass</pre>
        <p>
            The <spam class="text-danger">public</spam> keyword is an <b>access modifier</b>, meaning that it is used to set the
            access level for classes, attributes, methods and constructors.
            <br>
            We divide modifiers into two groups:
            <br>
            <ul>
                <li>Access Modifiers - controls the access level</li>
                <li>Non-Access Modifiers - do not control access level, but provides other functionality</li>
            </ul>
        </p>

        <hr>
        <h3>Access Modifiers</h3>
        <p>For <b>classes</b>, you can use either <spam class="text-danger">public</spam> or <spam class="text-danger">default</spam>
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Modifier</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">public</spam>
                    </td>
                    <td>The class is accessible by any other class</td>
                </tr>
                <tr>
                    <td>default</td>
                    <td>The class is only accessible by classes in the same
                        package. This is used when you don't specify a
                        modifier. You will learn more about packages in the
                        Packages chapter
                    </td>
                </tr>
            </tbody>
        </table>
        <p>
            For <b>attributes</b>, <b>methods</b> and <b>constructors</b>, you can use the one of the following:
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Modifier</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">public</spam>
                    </td>
                    <td>The code is accessible for all classes</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">private</spam>
                    </td>
                    <td>The code is only accessible within the declared class</td>
                </tr>
                <tr>
                    <td>default</td>
                    <td>The code is only accessible in the same package. This
                        is used when you don't specify a modifier. You will
                        learn more about packages in the Packages chapter</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">protected</spam>
                    </td>
                    <td>The code is accessible in the same package and
                        <b>subclasses</b>. You will learn more about subclasses and
                        superclasses in the Inheritance chapter</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>Non-Access Modifiers</h3>
        <p>
            For <b>classes</b>, you can use either <spam class="text-danger">final</spam> or <spam class="text-danger">abstract</spam> :
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Modifier</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">final</spam>
                    </td>
                    <td>The class cannot be inherited by other classes (You
                        will learn more about inheritance in the Inheritance
                        chapter)</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">abstract</spam>
                    </td>
                    <td>The class cannot be used to create objects (To access
                        an abstract class, it must be inherited from another
                        class. You will learn more about inheritance and
                        abstraction in the Inheritance and Abstraction
                        chapters)</td>
                </tr>
            </tbody>
        </table>
        <p>
            For <b>attributes</b> and <b>methods</b>, you can use the one of the following:
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Modifier</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">final</spam>
                    </td>
                    <td>Attributes and methods cannot be overridden/modified</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">static</spam>
                    </td>
                    <td>Attributes and methods belongs to the class, rather than an object.</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">abstract</spam>
                    </td>
                    <td>Can only be used in an abstract class, and can only be used on
                        methods. The method does not have a body, for example
                        <b>abstract void run();</b>. The body is provided by the subclass
                        (inherited from). You will learn more about inheritance and
                        abstraction in the Inheritance and Abstraction chapters</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">transient</spam>
                    </td>
                    <td>Attributes and methods are skipped when serializing the object
                        containing them</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">synchronized</spam>
                    </td>
                    <td>Methods can only be accessed by one thread at a time</td>
                </tr>
                <tr>
                    <td>
                        <spam class="text-danger">volatile</spam>
                    </td>
                    <td>The value of an attribute is not cached thread-locally, and is
                        always read from the "main memory"
                    </td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>Final</h3>
        <p>
            If you don't want the ability to override existing attribute values, declare attributes as
            <spam class="text-danger">final</spam> :
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            public class MyClass {
                final int x = 10;
                final double PI = 3.14;
                public static void main(String[] args) {
                    MyClass myObj = new MyClass();
                    myObj.x = 50; // will generate an error: cannot assign a value to a final
                    myObj.PI = 25; // will generate an error: cannot assign a value to a fina
                    System.out.println(myObj.x);
                }
            }</pre>

        <hr>
        <h3>Static</h3>
        <p>
            A <spam class="text-danger">static</spam> method means that it can be accessed without creating an object of the
            class, unlike <spam class="text-danger">public</spam> :
        </p>
        <h5>Example</h5>
        <p>
            An example to demonstrate the differences between <spam class="text-danger">static</spam> and <spam class="text-danger">public</spam> methods:
        </p>
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
                public static void main(String[ ] args) {
                    myStaticMethod(); // Call the static method
                    // myPublicMethod(); This would output an error
                    MyClass myObj = new MyClass(); // Create an object of MyClass
                    myObj.myPublicMethod(); // Call the public method
                }
            }</pre>

        <hr>
        <h3>Abstract</h3>
        <p>
            An <spam class="text-danger">abstract</spam> method belongs to an <spam class="text-danger">abstract</spam> class, and it does not have a body.
            The body is provided by the subclass:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            // Code from filename: Person.java
            // abstract class
            abstract class Person {
                public String fname = "John";
                public int age = 24;
                public abstract void study(); // abstract method
            }
            // Subclass (inherit from Person)
            class Student extends Person {
                public int graduationYear = 2018;
                public void study() { // the body of the abstract method is provided here
                    System.out.println("Studying all day long");
                }
            }
            // End code from filename: Person.java
            // Code from filename: MyClass.java
            class MyClass {
                public static void main(String[] args) {
                    // create an object of the Student class (which inherits attributes and m
                    Student myObj = new Student();
                    System.out.println("Name: " + myObj.fname);
                    System.out.println("Age: " + myObj.age);
                    System.out.println("Graduation Year: " + myObj.graduationYear);
                    myObj.study(); // call abstract method
                }
            }</pre>



        <hr>
        <div class="mb-2">
            <a href="java-30.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-32.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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