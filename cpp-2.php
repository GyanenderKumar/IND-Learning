<?php
    $sub="cpp";
    $pag="2";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- ---Font Awesome CDN-- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  

    <title>C++ Getting Started</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
<!-- -----------------Header Module--------------- -->
<?php

include 'modules/_header_module.php';

?>







    <!-- ----------Java Getting Started------------ -->
    <div class="container">
        <h1>C++ Getting Started</h1>
        <div>
            <a href="/ind-learning/cpp-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Previous</a>
            <a href="/ind-learning/cpp-3.php" class="btn btn-outline-primary">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Installing GNU C/C++ Compiler</h3>
        <p>
            C++ installed on your computer, you can download it for free from
            www.mingw.org.
        </p>
        <p>To install C++ on Windows:</p>
        <ol>
            <li>
            To install GCC at Windows you need to install MinGW. To install MinGW, go to the MinGW homepage, www.mingw.org, and follow the link to the MinGW download page. Download the latest version of the MinGW installation program which should be named MinGW-<version>.exe

            </li>
            <li>
              While installing MinGW, at a minimum, you must install gcc-core, gcc-g++, binutils, and the MinGW runtime, but you may wish to install more.
            </li>
            <li>
              Add the bin subdirectory of your MinGW installation to your PATH environment variable so that you can specify these tools on the command line by their simple names.
            </li>
            <li>
              Add the bin subdirectory of your MinGW installation to your PATH environment variable so that you can specify these tools on the command line by their simple names.

            </li>
        </ol>


        <hr>
        <h3>C++ Quickstart</h3>
        <p>
        When we consider a <b>C++</b> program, it can be defined as a collection of objects that communicate via invoking each other's methods. Let us now briefly look into what a class, object, methods, and instant variables mean.
            <br>
            Let's create our first C++ file, called <b>hello.cpp</b> , which can be done in any text
            editor (like Notepad/vscode,etc).
            <br>
            The file should contain a "Hello World" message, which is written with the following
            code:
        </p>
        <pre class="jumbotron">
        
             #include <iostream>
             using namespace std;
             
             // main() is where program execution begins.
             int main() {
                cout << "Hello World"; // prints Hello World
                return 0;
             }</pre>

        <p>
             <h3>Compile and Execute C++ Program</h3>
             <ul>
             <li>open a text editor and add the code as above</li>
             <li>Save the file as:hello.cpp </li>
             <li>Open a command prompt and go to the directory where you saved the file</li>
             <li>Type 'g++ hello.cpp' and press enter to compile your code. If there are no error in your code the command prompt will take you to next line and would generate a.out executable file.</li>
             <li>Now, type 'a.out' to run your program.</li>
             <li>You will be able to see 'hello world' printed on the window.</li>
             </ul>
            
        </p>
        <pre class="jumbotron">
        $ g++ hello.cpp
        $ ./a.out
        Hello World</pre>

        <p>
        Make sure that g++ is in your path and that you are running it in the directory containing file hello.cpp.
        </p>

        <p>
            <b>Congratulations!</b> You have written and executed your first c++ program.
        </p>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>   Previous</a>
            <a href="/ind-learning/cpp-3.php" class="btn btn-outline-primary">Next   <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>

</html>