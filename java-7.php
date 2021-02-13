<?php

    $sub="java";
    $pag="7";

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

    <title>Java Data Types</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------Java Data Types------------ -->
    <div class="container">
        <h1>Java Data Types</h1>
        <div>
            <a href="java-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Data Types</h3>
        <p>
            As explained in the previous chapter, a variable in Java must be a specified data type:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int myNum = 5; // Integer (whole number)
            float myFloatNum = 5.99f; // Floating point number
            char myLetter = 'D'; // Character
            boolean myBool = true; // Boolean
            String myText = "Hello"; // String</pre>

        <p>
            Data types are divided into two groups:
            <ul>
                <li>Primitive data types - includes byte , short , int , long , float , double ,
                    boolean and char</li>
                <li>Non-primitive data types - such as String, Arrays and Classes (you will learn
                    more about these in a later chapter)
                </li>
            </ul>
        </p>

        <hr>
        <h3>Primitive Data Types</h3>
        <p>
            A primitive data type specifies the size and type of variable values, and it has no
            additional methods.
            <br>
            There are eight primitive data types in Java:
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th style="width:20%">Data Type </th>
                        <th>Size</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>byte</td>
                        <td>1 byte</td>
                        <td>Stores whole numbers from -128 to 127</td>
                    </tr>
                    <tr>
                        <td>short</td>
                        <td>2 bytes</td>
                        <td>Stores whole numbers from -32,768 to 32,767</td>
                    </tr>
                    <tr>
                        <td>int</td>
                        <td>4 bytes</td>
                        <td>Stores whole numbers from -2,147,483,648 to
                            2,147,483,647</td>
                    </tr>
                    <tr>
                        <td>long</td>
                        <td>8 bytes</td>
                        <td>Stores whole numbers from
                            -9,223,372,036,854,775,808 to
                            9,223,372,036,854,775,807</td>
                    </tr>
                    <tr>
                        <td>float</td>
                        <td>4 bytes</td>
                        <td>Stores fractional numbers. Sufficient for storing 6
                            to 7 decimal digits</td>
                    </tr>
                    <tr>
                        <td>double</td>
                        <td>8 bytes</td>
                        <td>Stores fractional numbers. Sufficient for storing 15
                            decimal digits</td>
                    </tr>
                    <tr>
                        <td>boolean</td>
                        <td>1 byte</td>
                        <td>Stores true or false values</td>
                    </tr>
                    <tr>
                        <td>char</td>
                        <td>2 bytes</td>
                        <td>Stores a single character/letter or ASCII values</td>
                    </tr>
                </tbody>
            </table>
        </p>

        <hr>
        <h3>Numbers</h3>
        <p>
            Primitive number types are divided into two groups:
            <br>
            Integer types stores whole numbers, positive or negative (such as 123 or -456),
            without decimals. Valid types are byte , short , int and long . Which type you
            should use, depends on the numeric value.
            <br>
            Floating point types represents numbers with a fractional part, containing one or
            more decimals. There are two types: float and double .
            <br>
            Even though there are many numeric types in Java, the most used for numbers are
            int (for whole numbers) and double (for floating point numbers). However, we will
            describe them all as you continue to read.
        </p>

        <hr>
        <h3>Integer Types</h3>
        <h5>Byte</h5>
        <p>The byte data type can store whole numbers from -128 to 127. This can be used
            instead of int or other integer types to save memory when you are certain that the
            value will be within -128 and 127:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            byte myNum = 100;
            System.out.println(myNum);</pre>

        <h5>Short</h5>
        <p>The short data type can store whole numbers from -32768 to 32767:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            short myNum = 5000;
            System.out.println(myNum);</pre>

        <h5>Int</h5>
        <p>The int data type can store whole numbers from -2147483648 to 2147483647. In
            general, and in our tutorial, the int data type is the preferred data type when we
            create variables with a numeric value.</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int myNum = 100000;
            System.out.println(myNum);</pre>

        <h5>Long</h5>
        <p>The long data type can store whole numbers from -9223372036854775808 to
            9223372036854775807. This is used when int is not large enough to store the value.
            Note that you should end the value with an "L":</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            long myNum = 15000000000L;
            System.out.println(myNum);</pre>

        <hr>
        <h3>Floating Point Types</h3>
        <p>You should use a floating point type whenever you need a number with a decimal,
            such as 9.99 or 3.14515.</p>

        <h5>Float</h5>
        <p>The float data type can store fractional numbers from 3.4e−038 to 3.4e+038. Note
            that you should end the value with an "f":</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            float myNum = 5.75f;
            System.out.println(myNum);</pre>

        <h5>Double</h5>
        <p>The double data type can store fractional numbers from 1.7e−308 to 1.7e+308.
            Note that you should end the value with a "d":
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            double myNum = 19.99d;
            System.out.println(myNum);</pre>

        <p>Use float or double ?
            <br>
            The precision of a floating point value indicates how many digits the value can have
            after the decimal point. The precision of float is only six or seven decimal digits,
            while double variables have a precision of about 15 digits. Therefore it is safer to
            use double for most calculations.</p>

        <h5>Scientific Numbers</h5>
        <p>A floating point number can also be a scientific number with an "e" to indicate the
            power of 10:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            float f1 = 35e3f;
            double d1 = 12E4d;
            System.out.println(f1);
            System.out.println(d1);</pre>

        <hr>
        <h3>Booleans</h3>
        <p>A boolean data type is declared with the boolean keyword and can only take the
            values true or false :</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            boolean isJavaFun = true;
            boolean isFishTasty = false;
            System.out.println(isJavaFun); // Outputs true
            System.out.println(isFishTasty); // Outputs false</pre>
        <p>Boolean values are mostly used for conditional testing, which you will learn more
            about in a later chapter.
        </p>

        <hr>
        <h3>Characters</h3>
        <p>The char data type is used to store a single character. The character must be
            surrounded by single quotes, like 'A' or 'c':</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            char myGrade = 'B';
            System.out.println(myGrade);</pre>
        <p>Alternatively, you can use ASCII values to display certain characters:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            char a = 65, b = 66, c = 67;
            System.out.println(a);
            System.out.println(b);
            System.out.println(c);</pre>

        <hr>
        <h3>Strings</h3>
        <p>The String data type is used to store a sequence of characters (text). String values
            must be surrounded by double quotes:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String greeting = "Hello World";
            System.out.println(greeting);</pre>
        <p>The String type is so much used and integrated in Java, that some call it "the special
            ninth type".
            <br>
            A String in Java is actually a non-primitive data type, because it refers to an object.
            The String object has methods that are used to perform certain operations on strings.</p>

        <hr>
        <h3>Non-Primitive Data Types</h3>
        <p>
            Non-primitive data types are called reference types because they refer to objects.
            <br>
            The main difference between primitive and non-primitive data types are:

            <ul>
                <li>Primitive types are predefined (already defined) in Java. Non-primitive types are
                    created by the programmer and is not defined by Java (except for String ).
                </li>
                <li>Non-primitive types can be used to call methods to perform certain operations,
                    while primitive types cannot.
                </li>
                <li>A primitive type has always a value, while non-primitive types can be null .
                </li>
                <li>A primitive type starts with a lowercase letter, while non-primitive types starts
                    with an uppercase letter.
                </li>
                <li>The size of a primitive type depends on the data type, while non-primitive types
                    have all the same size.</li>
            </ul>
            Examples of non-primitive types are Strings, Arrays, Classes, Interface, etc.
        </p>



        <hr>
        <div class="mb-2">
            <a href="java-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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