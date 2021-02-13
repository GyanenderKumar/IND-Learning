<?php
    $sub="cpp";
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

    <title>C++ Variables</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------Java Variables------------ -->
    <div class="container">
        <h1>C++ Variables</h1>
        <div>
            <a href="/ind-learning/cpp-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Variables</h3>
        <p>
        A variable provides us with named storage that our programs can manipulate.
        <br>Each variable in C++ has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.
            <br>
            In c++, there are different <b>types</b> of variables, for example:
            <br>
            <ul>
                <li>
                    <spam class="text-danger">Double</spam> - A double-precision floating point value.
                    
                </li>
                <li>
                    <spam class="text-danger">int</spam> - stores integers (whole numbers), without decimals.
                </li>

                <li>
                    <spam class="text-danger">float</spam> - stores floating point numbers, with decimals.
                </li>
                <li>
                    <spam class="text-danger">char</spam> - stores single characters, such as 'a' or 'B'.
                </li>
                <li>
                    <spam class="text-danger">bool</spam> - stores values with two states: true or false.
                </li>
                <li>
                    <spam class="text-danger">Void</spam> - Represents the absence of type.
                </li>
                <li>
                    <spam class="text-danger">wchar_t</spam> - Represents a wide character type
                </li>
            </ul>
        </p>


        <hr>
        <h3>Variable Declaration in C++</h3>
        <p>
        A variable declaration provides assurance to the compiler that there is one variable existing with the given type and name so that compiler proceed for further compilation without needing complete detail about the variable.
        <br>

        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            type variable = value;</pre>

        <p>
            <br>
            To create a variable that should store text, look at the following example:
        </p>
        <h5>Example</h5>
        <p>Create a variable called age of type integer and assign it the value 20:
        </p>
        <pre class="jumbotron">
            int age = 20;
            cout<< age ; </pre>

        <p>Try the following example where a variable has been declared at the top, but it has been defined inside the main function −</p>
        <pre class="jumbotron">
        #include < iostream >
        using namespace std;

        // Variable declaration:
        extern int a, b;
        extern int c;
        extern float f;
  
        int main () {
           // Variable definition:
           int a, b;
           int c;
           float f;
        
           // actual initialization
           a = 10;
           b = 20;
           c = a + b;
        
           cout << c << endl ;

           f = 70.0/3.0;
           cout << f << endl ;
        
                  return 0;
        }
        </pre>
        <p>When the above code is compiled and executed, it produces the following result −</p>
        <pre class="jumbotron">
        30
        23.3333</pre>

        <p>Same concept applies on function declaration where you provide a function name at the time of its declaration and its actual definition can be given anywhere else. For example −</p>
        
        <pre class="jumbotron">
        // function declaration 
        int func();
        int main();
            //function call 
            int i = func();
        }
        
        // function defination
        int func() {
            return 0;
        }</pre>

        <h3>Lvalues and Rvalues</h3>
        <p>There are two kinds of expressions in c++</p>
        <ul>
        <li> <b>lvalue </b> - Expressions that refer to a memory loction is called "lvalue" expression. An lvalue may appear as either the left-hand or right hand side of an assignment. </li>
        <li><b>rvalue</b> − The term rvalue refers to a data value that is stored at some address in memory. An rvalue is an expression that cannot have a value assigned to it which means an rvalue may appear on the right- but not left-hand side of an assignment.</li>
        </ul>

        <p>Variables are lvalues and so may appear on the left-hand side of an assignment. Numeric literals are rvalues and so may not be assigned and can not appear on the left-hand side. Following is a valid statement −
        <pre class="jumbotron">
        int g = 20;</pre>
        <br>
        But the following is not a valid statement and would generate compile-time error - 
        <pre class="jumbotron">
        10 = 20</pre>
        </p>

        <hr>
        <h3>Declare Many Variables</h3>
        <p>To declare more than one variable of the same type, use a comma-separated list:</p>
        <h5>Exapmle</h5>
        <pre class="jumbotron">
            int x = 5, y = 6, z = 50;
            cout<< x,y,z ;</pre>

        <hr>
        <h3>C++ Identifiers</h3>
        <p>A C++ identifier is a name used to identify a variable, function, class, module, or any other user-defined item. An identifier starts with a letter A to Z or a to z or an underscore (_) followed by zero or more letters, underscores, and digits (0 to 9).
            <br>
            C++ does not allow punctuation characters such as @, $, and % within identifiers. C++ is a case-sensitive programming language. Thus, Manpower and manpower are two different identifiers in C++.
            <br>
            Here are some examples of acceptable identifiers −</p>

            <pre class="jumbotron">
            mohd       zara    abc   move_name  a_123
            myname50   _temp   j     a23b9      retVal
            </pre>

        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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