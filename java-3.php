<?php

    $sub="java";
    $pag="3";

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

    <title>Java Keywords</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Keywords------------ -->
    <div class="container">
        <h1>Java Keywords</h1>
        <div>
            <a href="java-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Reserved Keywords</h3>
        <p>
            Java has a set of keywords that are reserved words that cannot be used as variables,
            methods, classes, or any other identifiers:
        </p>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th style="width:20%">Keyword</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><a href="#">abstract</a></td>
                    <td>
                        A non-access modifier. Used for classes and methods: An abstract class cannot be used to create
                        objects (to access it, it must be inherited from another class). An abstract method can only be
                        used in an abstract class, and it does not have a body. The body is provided by the subclass
                        (inherited from)
                    </td>
                </tr>
                <tr>
                    <td>assert</td>
                    <td>For debugging</td>
                </tr>
                <tr>
                    <td><a href="#">boolean</a></td>
                    <td>A data type that can only store true and false values</td>
                </tr>
                <tr>
                    <td><a href="#">break</a></td>
                    <td>Breaks out of a loop or a switch block</td>
                </tr>
                <tr>
                    <td><a href="#">byte</a></td>
                    <td>A data type that can store whole numbers from -128 and 127</td>
                </tr>
                <tr>
                    <td><a href="#">case</a></td>
                    <td>Marks a block of code in switch statements</td>
                </tr>
                <tr>
                    <td><a href="#">catch</a></td>
                    <td>Catches exceptions generated by try statements</td>
                </tr>
                <tr>
                    <td><a href="#">char</a></td>
                    <td>A data type that is used to store a single character</td>
                </tr>
                <tr>
                    <td><a href="#">class</a></td>
                    <td>Defines a class</td>
                </tr>
                <tr>
                    <td><a href="#">continue</a></td>
                    <td>Continues to the next iteration of a loop</td>
                </tr>
                <tr>
                    <td>const</td>
                    <td>
                        Defines a constant. <b>Not in use</b> - use <a href="#">final</a> instead
                    </td>
                </tr>
                <tr>
                    <td><a href="#">default</a></td>
                    <td>Specifies the default block of code in a switch statement</td>
                </tr>
                <tr>
                    <td><a href="#">do</a></td>
                    <td>Used together with while to create a do-while loop</td>
                </tr>
                <tr>
                    <td><a href="#">double</a></td>
                    <td>A data type that can store whole numbers from 1.7e−308 to 1.7e+308</td>
                </tr>
                <tr>
                    <td><a href="#">else</a></td>
                    <td>Used in conditional statements</td>
                </tr>
                <tr>
                    <td><a href="#">enum</a></td>
                    <td>Declares an enumerated (unchangeable) type</td>
                </tr>
                <tr>
                    <td>exports</td>
                    <td>Exports a package with a module. New in Java 9</td>
                </tr>
                <tr>
                    <td><a href="#">extends</a></td>
                    <td>Extends a class (indicates that a class is inherited from another class)</td>
                </tr>
                <tr>
                    <td><a href="#">final</a></td>
                    <td>
                        A non-access modifier used for classes, attributes and methods, which makes them non-changeable
                        (impossible to inherit or override)
                    </td>
                </tr>
                <tr>
                    <td><a href="#">finally</a></td>
                    <td>
                        Used with exceptions, a block of code that will be executed no matter if there is an exception
                        or not
                    </td>
                </tr>
                <tr>
                    <td><a href="#">float</a></td>
                    <td>A data type that can store whole numbers from 3.4e−038 to 3.4e+038</td>
                </tr>
                <tr>
                    <td><a href="#">for</a></td>
                    <td>Create a for loop</td>
                </tr>
                <tr>
                    <td>goto</td>
                    <td><b>Not in use</b>, and has no function</td>
                </tr>
                <tr>
                    <td><a href="#">if</a></td>
                    <td>Makes a conditional statement</td>
                </tr>
                <tr>
                    <td><a href="#">implements</a></td>
                    <td>Implements an interface</td>
                </tr>
                <tr>
                    <td><a href="#">import</a></td>
                    <td>Used to import a package, class or interface</td>
                </tr>
                <tr>
                    <td><a href="#">instanceof</a></td>
                    <td>Checks whether an object is an instance of a specific class or an interface</td>
                </tr>
                <tr>
                    <td><a href="#">int</a></td>
                    <td>A data type that can store whole numbers from -2147483648 to 2147483647</td>
                </tr>
                <tr>
                    <td><a href="#">interface</a></td>
                    <td>Used to declare a special type of class that only contains abstract methods</td>
                </tr>
                <tr>
                    <td><a href="#">long</a></td>
                    <td>A data type that can store whole numbers from -9223372036854775808 to 9223372036854775808</td>
                </tr>
                <tr>
                    <td>module</td>
                    <td>Declares a module. New in Java 9</td>
                </tr>
                <tr>
                    <td>native</td>
                    <td>
                        Specifies that a method is not implemented in the same Java source file (but in another
                        language)
                    </td>
                </tr>
                <tr>
                    <td><a href="#">new</a></td>
                    <td>Creates new objects</td>
                </tr>
                <tr>
                    <td><a href="#">package</a></td>
                    <td>Declares a package</td>
                </tr>
                <tr>
                    <td><a href="#">private</a></td>
                    <td>
                        An access modifier used for attributes, methods and constructors, making them only accessible
                        within the declared class
                    </td>
                </tr>
                <tr>
                    <td><a href="#">protected</a></td>
                    <td>An access modifier used for attributes, methods and constructors, making them accessible in the
                        same package and subclasses</td>
                </tr>
                <tr>
                    <td><a href="#">public</a></td>
                    <td>An access modifier used for classes, attributes, methods and constructors, making them
                        accessible by any other class</td>
                </tr>
                <tr>
                    <td>requires</td>
                    <td>Specifies required libraries inside a module. New in Java 9</td>
                </tr>
                <tr>
                    <td><a href="#">return</a></td>
                    <td>Finished the execution of a method, and can be used to return a value from a method</td>
                </tr>
                <tr>
                    <td><a href="#">short</a></td>
                    <td>A data type that can store whole numbers from -32768 to 32767</td>
                </tr>
                <tr>
                    <td><a href="#">static</a></td>
                    <td>A non-access modifier used for methods and attributes. Static methods/attributes can be accessed
                        without creating an object of a class</td>
                </tr>
                <tr>
                    <td>strictfp</td>
                    <td>Restrict the precision and rounding of floating point calculations</td>
                </tr>
                <tr>
                    <td><a href="#">super</a></td>
                    <td>Refers to superclass (parent) objects</td>
                </tr>
                <tr>
                    <td><a href="#">switch</a></td>
                    <td>Selects one of many code blocks to be executed</td>
                </tr>
                <tr>
                    <td>synchronized</td>
                    <td>A non-access modifier, which specifies that methods can only be accessed by one thread at a time
                    </td>
                </tr>
                <tr>
                    <td><a href="#">this</a></td>
                    <td>Refers to the current object in a method or constructor</td>
                </tr>
                <tr>
                    <td><a href="#">throw</a></td>
                    <td>Creates a custom error</td>
                </tr>
                <tr>
                    <td><a href="#">throws</a></td>
                    <td>Indicates what exceptions may be thrown by a method</td>
                </tr>
                <tr>
                    <td>transient</td>
                    <td>A non-accesss modifier, which specifies that an attribute is not part of an object's persistent
                        state</td>
                </tr>
                <tr>
                    <td><a href="#">try</a></td>
                    <td>Creates a try...catch statement</td>
                </tr>
                <tr>
                    <td>var</td>
                    <td>Declares a variable. New in Java 10</td>
                </tr>
                <tr>
                    <td><a href="#">void</a></td>
                    <td>Specifies that a method should not have a return value</td>
                </tr>
                <tr>
                    <td>volatile</td>
                    <td>Indicates that an attribute is not cached thread-locally, and is always read from the "main
                        memory"</td>
                </tr>
                <tr>
                    <td><a href="#">while</a></td>
                    <td>Creates a while loop</td>
                </tr>
            </tbody>
        </table>

        <p><b>Note:</b> true , false , and null are not keywords, but they are literals and reserved
            words that cannot be used as identifiers.</p>


        <hr>
        <div class="mb-2">
            <a href="java-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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