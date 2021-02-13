<?php
$sub = "cpp";
$pag = "4";
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

    <title>C++ Syntax</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------C++ Syntax------------ -->
    <div class="container">
        <h1> C++ Syntax</h1>
        <div>
            <a href="/ind-learning/cpp-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Syntax</h3>
        <p>
            In the previous chapter, we created a C++ file called hello.cpp, and we used the
            following code to print "Hello World" to the screen:
        </p>

        <h5>hello.cpp </h5>
        <pre class="jumbotron">
        #include <iostream>
        using namespace std;

        // main() is where program execution begins.
        int main() {
        cout << "Hello World"; // prints Hello World
        return 0;
        }</pre>

        <h5>Example explained</h5>
        <p>
            Let us look at the various parts of the above program −
            <ul>
                <li>The C++ language defines several headers, which contain information that is either necessary or useful to your program. For this program, the header < iostream> is needed.</li>
                <li>The line <b>using namespace std;</b> tells the compiler to use the std namespace. Namespaces are a relatively recent addition to C++.</li>
                <li>The next line <b>'// main() is where program execution begins.'</b> is a single-line comment available in C++. Single-line comments begin with // and stop at the end of the line.</li>
                <li>The line <b>int main()</b> is the main function where program execution begins.</li>
                <li>The next line <b> cout << "Hello World" ;</b> causes the message "Hello World" to be displayed on the screen.</li> <li>The next line <b> return 0;</b> terminates main( )function and causes it to return the value 0 to the calling process.</li>
            </ul>
        </p>
        <pre class="jumbotron">
            Hello World</pre>

        <h3>Semicolons and Blocks in c++</h3>
        <p>In C++, the semicolon is a statement terminator. That is, each individual statement must be ended with a semicolon. It indicates the end of one logical entity.
            <br>
            For example, following are three different statements −
        </p>
        <pre class="jumbotron">
        x = y;
        y = y + 1;
        add(x, y);</pre>
        <p>
            A block is a set of logically connected statements that are surrounded by opening and closing braces. For example −
        </p>
        </p>
        <pre class="jumbotron">
        {
   cout << "Hello World"; // prints Hello World
   return 0;
}  
        </pre>
        <p>
            <p>C++ does not recognize the end of the line as a terminator. For this reason, it does not matter where you put a statement in a line. For example −</p>
        </p>
        <pre class="jumbotron">
        x = y;
         y = y + 1;
         add(x, y);
        </pre>
        </p>
        <p>is the same as</p>
        <pre class="jumbotron">
        x = y; y = y + 1; add(x, y);
        </pre>
        </p>
        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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