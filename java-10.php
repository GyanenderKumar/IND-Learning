<?php

    $sub="java";
    $pag="10";

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

    <title>Java Strings</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Strings------------ -->
    <div class="container">
        <h1>Java Strings</h1>
        <div>
            <a href="java-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Strings</h3>
        <p>
            Strings are used for storing text.
            <br>
            A String variable contains a collection of characters surrounded by double quotes:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String greeting = "Hello";</pre>

        <hr>
        <h3>String Length</h3>
        <p>
            A String in Java is actually an object, which contain methods that can perform certain
            operations on strings. For example, the length of a string can be found with the
            <spam class="text-danger">length()</spam> method:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            System.out.println("The length of the txt string is: " + txt.length());</pre>

        <hr>
        <h3>More String Methods</h3>
        <p>
            There are many string methods available, for example <spam class="text-danger">toUpperCase()</spam> and
            <spam class="text-danger">toLowerCase()</spam> :
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "Hello World";
            System.out.println(txt.toUpperCase()); // Outputs "HELLO WORLD"
            System.out.println(txt.toLowerCase()); // Outputs "hello world"</pre>

        <hr>
        <h3>Finding a Character in a String</h3>
        <p>
            The <spam class="text-danger">indexOf()</spam> method returns the index (the position) of the first occurrence of a
            specified text in a string (including whitespace):
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "Please locate where 'locate' occurs!";
            System.out.println(txt.indexOf("locate")); // Outputs 7</pre>

        <hr>
        <h3>String Concatenation</h3>
        <p>
            The <spam class="text-danger">+</spam> operator can be used between strings to combine them. This is called
            <b>concatenation</b>:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String firstName = "John";
            String lastName = "Doe";
            System.out.println(firstName + " " + lastName);</pre>

        <p>
            Note that we have added an empty text (" ") to create a space between firstName
            and lastName on print.
            <br>
            You can also use the <spam class="text-danger">concat()</spam> method to concatenate two strings:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String firstName = "John ";
            String lastName = "Doe";
            System.out.println(firstName.concat(lastName));</pre>

        <hr>
        <h3>Special Characters</h3>
        <p>
            Because strings must be written within quotes, Java will misunderstand this string,
            and generate an error:
        </p>
        <pre class="jumbotron">
            String txt = "We are the so-called "Vikings" from the north.";</pre>

        <p>
            The solution to avoid this problem, is to use the backslash escape character.
            <br>
            The backslash ( \ ) escape character turns special characters into string characters:
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Escape character</th>
                    <th>Result</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>\'</td>
                    <td>'</td>
                    <td>Single quote</td>
                </tr>
                <tr>
                    <td>\"</td>
                    <td>"</td>
                    <td>Double quote</td>
                </tr>
                <tr>
                    <td>\\</td>
                    <td>\</td>
                    <td>Backslash</td>
                </tr>
            </tbody>
        </table>

        <p>The sequence <spam class="text-danger">\"</spam> inserts a double quote in a string:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "We are the so-called \"Vikings\" from the north.";</pre>

        <p>The sequence <spam class="text-danger">\'</spam> inserts a single quote in a string:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "It\'s alright.";</pre>

        <p>The sequence <spam class="text-danger">\\</spam> inserts a single backslash in a string:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String txt = "The character \\ is called backslash.";</pre>

        <p>Six other escape sequences are valid in Java:</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Code</th>
                    <th>Result OR Name</th>
                </tr>
                <tr>
                    <td>\n</td>
                    <td>New Line</td>
                </tr>
                <tr>
                    <td>\r</td>
                    <td>Carriage Return</td>
                </tr>
                <tr>
                    <td>\t</td>
                    <td>Tab</td>
                </tr>
                <tr>
                    <td>\b</td>
                    <td>Backspace</td>
                </tr>
                <tr>
                    <td>\f</td>
                    <td>Form Feed</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>Adding Numbers and Strings</h3>
        <p>
            WARNING!
            <br>
            Java uses the + operator for both addition and concatenation.
            <br>
            Numbers are added. Strings are concatenated.
            <br>
            <br>
            If you add two numbers, the result will be a number:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 10;
            int y = 20;
            int z = x + y; // z will be 30 (an integer/number)</pre>

        <p>If you add two strings, the result will be a string concatenation:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String x = "10";
            String y = "20";
            String z = x + y; // z will be 1020 (a String)</pre>

        <p>If you add a number and a string, the result will be a string concatenation:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            String x = "10";
            int y = 20;
            String z = x + y; // z will be 1020 (a String)</pre>

        

        <hr>
        <div class="mb-2">
            <a href="java-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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