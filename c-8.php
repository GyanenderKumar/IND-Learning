<?php

    $sub="c";
    $pag="8";

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

    <title>Variable in C</title>


    <link rel="stylesheet" href="stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------C Introduction section------------ -->
    <div class="container">
        <h1>Variable in C</h1>
        <div>
            <a href="c-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>
            <li> Variables in C </li>
            A variable is a name of the memory location. It is used to store data. Its value can be changed, and it can be reused many times.<br>
            It is a way to represent memory location through symbol so that it can be easily identified.<br>
            Let's see the syntax to declare a variable:<br>
            <pre class="jumbotron">
            type variable_list;  </pre>
        </p>
        <p>
            <li>Rules for defining variables</li>
            A variable can have alphabets, digits, and underscore.<br>
            A variable name can start with the alphabet, and underscore only. It can't start with a digit.<br>
            No whitespace is allowed within the variable name.<br>
            A variable name must not be any reserved word or keyword, e.g. int, float, etc.<br>
        </p>
        <p>
            <h1> Types of Variables in C </h1>
            There are many types of variables in c: <br>
            <li> local variable</li>
            <li>global variable</li>
            <li>static variable</li>
            <li>automatic variable</li>
            <li>external variable</li>
            <hr>
            <h3>Local Variable</h3>
            A variable that is declared inside the function or block is called a local variable.<br>
            It must be declared at the start of the block.<br>
            <pre class="jumbotron">
      void function1(){  
      int x=10;//local variable  
      }  </pre>


            <h3>Global Variable</h3>
            A variable that is declared outside the function or block is called a global variable. <br>
            Any function can change the value of the global variable. <br>
            It is available to all the functions.<br>
            <pre class="jumbotron">
     int value=20;//global variable  
     void function1(){  
     int x=10;//local variable  
     }  </pre> <br>

            <h3> Static Variable </h3>
            A variable that is declared with the static keyword is called static variable. <br>
            It retains its value between multiple function calls. <br>
            <pre class="jumbotron">
        void function1(){  
	int x=10;//local variable  
	static int y=10;//static variable  
	x=x+1;  
	y=y+1;  
	printf("%d,%d",x,y);  
	} </pre>
            If you call this function many times, the local variable will print the same value for each function call, e.g, 11,11,11 and so on. <br>
            But the static variable will print the incremented value in each function call, e.g. 11, 12, 13 and so on. <br>
            <hr>

            <h3>Automatic Variable </h3>
            All variables in C that are declared inside the block, are automatic variables by default. We can explicitly declare an automatic variable using auto keyword.
            <pre class="jumbotron">
	void main(){  
	int x=10;//local variable (also automatic)  
	auto int y=20;//automatic variable  
	}  </pre> <br>

            <h3>External Variable</h3>
            We can share a variable in multiple C source files by using an external variable. To declare an external variable, you need to use extern keyword.
            <pre class="jumbotron">
	extern int x=10;//external variable (also global)  
	program1.c
	#include "myfile.h"  
	#include <stdio.h>  
	void printValue(){  
  	printf("Global variable: %d", global_variable);  
	}  </pre> <br>
        </p>
        <hr>
        <div class="mb-2">
            <a href="c-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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