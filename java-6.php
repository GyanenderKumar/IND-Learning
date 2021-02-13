<?php

    $sub="java";
    $pag="6";

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

    <title>Java Variables</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Variables------------ -->
    <div class="container">
        <h1>Java Variables</h1>
        <div>
            <a href="java-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Variables</h3>
        <p>
            Variables are containers for storing data values.
            <br>
            In Java, there are different <b>types</b> of variables, for example:
            <br>
            <ul>
                <li>
                    <spam class="text-danger">String</spam> - stores text, such as "Hello". String values are surrounded by double
                    quotes
                </li>
                <li>
                    <spam class="text-danger">int</spam> - stores integers (whole numbers), without decimals, such as 123 or -123
                </li>

                <li>
                    <spam class="text-danger">float</spam> - stores floating point numbers, with decimals, such as 19.99 or -19.99
                </li>
                <li>
                    <spam class="text-danger">char</spam> - stores single characters, such as 'a' or 'B'. Char values are surrounded
                    by single quotes
                </li>
                <li>
                    <spam class="text-danger">boolean</spam> - stores values with two states: true or false
                </li>
            </ul>
        </p>


        <hr>
        <h3>Declaring (Creating) Variables</h3>
        <p>
            To create a variable, you must specify the type and assign it a value:
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            type variable = value;</pre>

        <p>
            Where type is one of Java's types (such as int or String ), and variable is the name
            of the variable (such as x or name). The equal sign is used to assign values to the
            variable.
            <br>
            To create a variable that should store text, look at the following example:
        </p>
        <h5>Example</h5>
        <p>Create a variable called name of type String and assign it the value "John":
        </p>
        <pre class="jumbotron">
            String name = "John";
            System.out.println(name);</pre>

        <p>To create a variable that should store a number, look at the following example:</p>
        <h5>Example</h5>
        <p>Create a variable called myNum of type int and assign it the value 15:</p>
        <pre class="jumbotron">
            int myNum = 15;
            System.out.println(myNum);</pre>

        <p>You can also declare a variable without assigning the value, and assign the value
            later:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int myNum;
            myNum = 15;
            System.out.println(myNum);</pre>

        <p>Note that if you assign a new value to an existing variable, it will overwrite the
            previous value:</p>

        <h5>Example</h5>
        <p>Change the value of muNum from 15 to 20:</p>

        <pre class="jumbotron">
            int myNum = 15;
            myNum = 20; // myNum is now 20
            System.out.println(myNum);</pre>

        <hr>
        <h3>Final Variables</h3>
        <p>However, you can add the final keyword if you don't want others (or yourself) to
            overwrite existing values (this will declare the variable as "final" or "constant", which
            means unchangeable and read-only):</p>

        <h5>Example</h5>
        <pre class="jumbotron">
            final int myNum = 15;
            myNum = 20; // will generate an error: cannot assign a value to a final variable</pre>


        <hr>
        <h3>Other Types</h3>
        <p>A demonstration of how to declare variables of other types:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int myNum = 5;
            float myFloatNum = 5.99f;
            char myLetter = 'D';
            boolean myBool = true;
            String myText = "Hello";</pre>

        <hr>
        <h3>Display Variables</h3>
        <p>The println() method is often used to display variables.
            <br>
            To combine both text and a variable, use the + character:
        </p>
        <h5>Exapmle</h5>
        <pre class="jumbotron">
            String name = "John";
            System.out.println("Hello " + name);</pre>

        <p>You can also use the + character to add a variable to another variable:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String firstName = "John ";
            String lastName = "Doe";
            String fullName = firstName + lastName;
            System.out.println(fullName);</pre>

        <p>For numeric values, the + character works as a mathematical operator (notice that
            we use int (integer) variables here):
        </p>

        <h5>Exapmle</h5>
        <pre class="jumbotron">
            int x = 5;
            int y = 6;
            System.out.println(x + y); // Print the value of x + y</pre>

        <p>From the example above, you can expect:</p>
        <ul>
            <li>x stores the value 5</li>
            <li>y stores the value 6</li>
            <li>Then we use the println() method to display the value of x + y, which is 11</li>
        </ul>


        <hr>
        <h3>Declare Many Variables</h3>
        <p>To declare more than one variable of the same type, use a comma-separated list:</p>
        <h5>Exapmle</h5>
        <pre class="jumbotron">
            int x = 5, y = 6, z = 50;
            System.out.println(x + y + z);</pre>

        <hr>
        <h3>Java Identifiers</h3>
        <p>All Java variables must be identified with unique names.
            These unique names are called identifiers.
            <br>
            Identifiers can be short names (like x and y) or more descriptive names (age, sum,
            totalVolume).
            <br>
            Note: It is recommended to use descriptive names in order to create understandable
            and maintainable code:</p>

        <h5>Exapmle</h5>
        <pre class="jumbotron">
            // Good
            int minutesPerHour = 60;
            // OK, but not so easy to understand what m actually is
            int m = 60;</pre>

        <p>The general rules for constructing names for variables (unique identifiers) are:</p>
        <ul>
            <li>Names can contain letters, digits, underscores, and dollar signs</li>
            <li>Names must begin with a letter</li>
            <li>Names should start with a lowercase letter and it cannot contain whitespace</li>
            <li>Names can also begin with $ and _ (but we will not use it in this tutorial)</li>
            <li>Names are case sensitive ("myVar" and "myvar" are different variables)
            </li>
            <li>Reserved words (like Java keywords, such as int or boolean ) cannot be used
                as names</li>

        </ul>


        <hr>
        <div class="mb-2">
            <a href="java-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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