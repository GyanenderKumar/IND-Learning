<?php
$sub = "cpp";
$pag = "13";
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

    <title>C++ Loops</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------C++ loops------------ -->
    <div class="container">
        <h1>C++ Loops</h1>
        <div>
            <a href="/ind-learning/cpp-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <p>There may be a situation, when you need to execute a block of code several number of times. In general, statements are executed sequentially: The first statement in a function is executed first, followed by the second, and so on.
            <br>
            Programming languages provide various control structures that allow for more complicated execution paths.
            <br>
            A loop statement allows us to execute a statement or group of statements multiple times and following is the general from of a loop statement in most of the programming languages −
            <br>
            C++ programming language provides the following type of loops to handle looping requirements.
        </p>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Sr. no</th>
                    <th>Loop Type & Description</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th><b>While loop </b> <br>Repeats a statement or group of statements while a given condition is true. It tests the condition before executing the loop body.</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th><b> for loop </b> <br> for loop
                        Execute a sequence of statements multiple times and abbreviates the code that manages the loop variable.</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th><b>do...While loop </b> <br>Like a ‘while’ statement, except that it tests the condition at the end of the loop body.</th>
                </tr>


            </tbody>
        </table>

        <h3>while loop</h3>
        <p>A while loop statement repeatedly executes a target statement as long as a given condition is true.</p>

        <h4>Syntax</h4>
        The syntax of a while loop in C++ is −
        <pre class="jumbotron">
        while(condition) {
            statement(s);
        }
        </pre>

        <li> Here, statement(s) may be a single statement or a block of statements. The condition may be any expression, and true is any non-zero value. The loop iterates while the condition is true.</li>
        <li>
            When the condition becomes false, program control passes to the line immediately following the loop.
        </li>
        <li>
            Here, key point of the while loop is that the loop might not ever run. When the condition is tested and the result is false, the loop body will be skipped and the first statement after the while loop will be executed
        </li>
        </p>
        <h4>Example</h4>
        <pre class="jumbotron">
        #include <iostream>
        using namespace std;
 
        int main () {
        // Local variable declaration:
        int a = 10;

         // while loop execution
           while( a < 20 ) {
              cout << "value of a: " << a << endl;
              a++;
   }

           return 0;
        }</pre>

        <p>When the above code is compiled and executed, it produces the following result −</p>
        <pre class="jumbotron">
        value of a: 10
        value of a: 11
        value of a: 12
        value of a: 13
        value of a: 14
        value of a: 15
        value of a: 16
        value of a: 17
        value of a: 18
        value of a: 19</pre>

        <h3>for loop</h3>
        <p>A for loop is a repetition control structure that allows you to efficiently write a loop that needs to execute a specific number of times.</p>

        <h4>Syntax</h4>
        The syntax of a for loop in C++ is −
        <pre class="jumbotron">
        for ( init; condition; increment ) {
           statement(s);
        }
        </pre>
        <p>Here is the flow of control in a for loop-</p>
        <li>The init step is executed first, and only once. This step allows you to declare and initialize any loop control variables. You are not required to put a statement here, as long as a semicolon appears.</li>
        <li>Next, the condition is evaluated. If it is true, the body of the loop is executed. If it is false, the body of the loop does not execute and flow of control jumps to the next statement just after the for loop.</li>
        <li>After the body of the for loop executes, the flow of control jumps back up to the increment statement. This statement can be left blank, as long as a semicolon appears after the condition.</li>
        <li>The condition is now evaluated again. If it is true, the loop executes and the process repeats itself (body of loop, then increment step, and then again condition). After the condition becomes false, the for loop terminates.</li>
        <h5>Example</h5>
        <pre class="jumbotron">

        #include <iostream>
        using namespace std;
 
        int main () {
           // for loop execution
           for( int a = 10; a < 20; a = a + 1 ) {
              cout << "value of a: " << a << endl;
           }
 
           return 0;
        }
        </pre>
        <p>When the above code is compiled and executed, it produces the following result −</p>
        <pre class="jumbotron">
        value of a: 10
        value of a: 11
        value of a: 12
        value of a: 13
        value of a: 14
        value of a: 15
        value of a: 16
        value of a: 17
        value of a: 18
        value of a: 19</pre>

        <h3>do...while loop</h3>
        <p>Unlike for and while loops, which test the loop condition at the top of the loop, the do...while loop checks its condition at the bottom of the loop.
            <br>
            A do...while loop is similar to a while loop, except that a do...while loop is guaranteed to execute at least one time.
        </p>

        <h4>Syntax</h4>
        The syntax of a do...while loop in C++ is −
        <pre class="jumbotron">
        do {
           statement(s);
        } 
        while( condition );
        </pre>
        <p>Notice that the conditional expression appears at the end of the loop, so the statement(s) in the loop execute once before the condition is tested.
            <br>
            If the condition is true, the flow of control jumps back up to do, and the statement(s) in the loop execute again. This process repeats until the given condition becomes false.
        </p>
        <pre class="jumbotron">
        #include <iostream>
        using namespace std;
 
        int main () {
           // Local variable declaration:
           int a = 10;

          // do loop execution
       do {
          cout << "value of a: " << a << endl;
            a = a + 1;
        } while( a < 20 );
 
       return 0;
    }
        </pre>
        <p>When the above code is compiled and executed, it produces the following result −</p>
        <pre class="jumbotron">
        value of a: 10
        value of a: 11
        value of a: 12
        value of a: 13
        value of a: 14
        value of a: 15
        value of a: 16
        value of a: 17
        value of a: 18
        value of a: 19</pre>








        <h3>Loop Control Statements</h3>
        <p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic objects that were created in that scope are destroyed. <br>
            C++ supports the following control statements.</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Sr.No</th>
                    <th>Control Statement and Description</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th><b> break statement </b> <br>Terminates the loop or switch statement and transfers execution to the statement immediately following the loop or switch.loop.</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th><b> continue statement</b> <br>Causes the loop to skip the remainder of its body and immediately retest its condition prior to reiterating.</th>
                </tr>
                <tr>
                    <th>1</th>
                    <th><b> goto statement </b> <br>Transfers control to the labeled statement. Though it is not advised to use goto statement in your program.</th>
                </tr>
            </tbody>
        </table>

        <h3>The Infinite Loop</h3>
        <p>A loop becomes infinite loop if a condition never becomes false. The for loop is traditionally used for this purpose. Since none of the three expressions that form the ‘for’ loop are required, you can make an endless loop by leaving the conditional expression empty.
        </p>
        <pre class="jumbotron">
        #include < iostream>
        using namespace std;
 
        int main () {
            for( ; ; ) {
            printf("This loop will run forever.\n");
          }

              return 0;
            }
        </pre>
        <P>When the conditional expression is absent, it is assumed to be true. You may have an initialization and increment expression, but C++ programmers more commonly use the ‘for (;;)’ construct to signify an infinite loop.</P>
        <B>NOTE</B>-You can terminate an infinite loop by pressing Ctrl + C keys


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-12.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-14.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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