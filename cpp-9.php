<?php
    $sub="cpp";
    $pag="9";
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

    <title>C++ Operators</title>

    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------Java Operators------------ -->
    <div class="container">
        <h1>C++ Operators</h1>
        <div>
            <a href="/ind-learning/cpp-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>C++ Operators</h3>
        <p>Operators are used to perform operations on variables and values.
            <br>
            In the example below, we use the + operator to add together two values:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 100 + 50;</pre>
        <p>Although the + operator is often used to add together two values, like in the
            example above, it can also be used to add together a variable and a value, or a
            variable and another variable:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int sum1 = 100 + 50; // 150 (100 + 50)
            int sum2 = sum1 + 250; // 400 (150 + 250)
            int sum3 = sum2 + sum2; // 800 (400 + 400)</pre>
        <p>cpp divides the operators into the following groups:
            <ul>
                <li>Arithmetic operators</li>
                <li>Assignment operators</li>
                <li>Relational operators</li>
                <li>Logical operators</li>
                <li>Bitwise operators</li>
                </ul>
        </p>

        <hr>
        <h3>Arithmetic Operators</h3>
        <p>Arithmetic operators are used to perform common mathematical operations.
        </p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td>+</td>
                    <td>Addition</td>
                    <td>Adds together two values</td>
                    <td>x+y</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>Subtracts one value from
                        another</td>
                    <td>x-y</td>
                </tr>
                <tr>
                    <td>*</td>
                    <td>Multiplication</td>
                    <td>Multiplies two values</td>
                    <td>x*y</td>
                </tr>
                <tr>
                    <td>/</td>
                    <td>Division</td>
                    <td>Divides one value by another</td>
                    <td>x/y</td>
                </tr>
                <tr>
                    <td>%</td>
                    <td>Modulus</td>
                    <td>Returns the division
                        remainder</td>
                    <td>x%y</td>
                </tr>
                <tr>
                    <td>++</td>
                    <td>Increment</td>
                    <td>Increases the value of a
                        variable by 1</td>
                    <td>++i</td>
                </tr>
                <tr>
                    <td>--</td>
                    <td>Decrement</td>
                    <td>Decreases the value of a
                        variable by 1</td>
                    <td>--i</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>C++ Assignment Operators</h3>
        <p>Assignment operators are used to assign values to variables.
            <br>
            In the example below, we use the assignment operator ( = ) to assign the value 10
            to a variable called x:</p>

        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 10;</pre>
        <p>The addition assignment operator ( += ) adds a value to a variable:</p>

        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 10;
            x += 5;</pre>

        <p>A list of all assignment operators:</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Example</th>
                    <th>Same As </th>
                </tr>
                <tr>
                    <td>=</td>
                    <td>x=6</td>
                    <td>x=6</td>
                </tr>
                <tr>
                    <td>+=</td>
                    <td>x+=5</td>
                    <td>x=x+5</td>
                </tr>
                <tr>
                    <td>-=</td>
                    <td>x-=3</td>
                    <td>x=x-3</td>
                </tr>
                <tr>
                    <td>*=</td>
                    <td>x*=2</td>
                    <td>x=x*2</td>
                </tr>
                <tr>
                    <td>/=</td>
                    <td>x/=3</td>
                    <td>x=x/3</td>
                </tr>
                <tr>
                    <td>%=</td>
                    <td>x%=2</td>
                    <td>x=x%2</td>
                </tr>
                <tr>
                    <td>&=</td>
                    <td>x&=6</td>
                    <td>x=x&6</td>
                </tr>
                <tr>
                    <td>|=</td>
                    <td>x|=6</td>
                    <td>x=x|6</td>
                </tr>
                <tr>
                    <td>^=</td>
                    <td>x^=6</td>
                    <td>x=x^6</td>
                </tr>
                <tr>
                    <td>>>=</td>
                    <td>x>>=6</td>
                    <td>x=x>>6</td>
                </tr>
                <tr>
                    <td>&lt &lt=</td>
                    <td>x&lt &lt=6</td>
                    <td>x=x&lt &lt6</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>C++ Comparison Operators</h3>
        <p>Comparison operators are used to compare two values:</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td>==</td>
                    <td>Equal to</td>
                    <td>x==y</td>
                </tr>
                <tr>
                    <td>!=</td>
                    <td>Not Equal</td>
                    <td>x!=y</td>
                </tr>
                <tr>
                    <td>></td>
                    <td>Greater then</td>
                    <td>x>y</td>
                </tr>
                <tr>
                    <td> & </td>
                    <td>Less then</td>
                    <td>x & y</td>
                </tr>
                <tr>
                    <td>>=</td>
                    <td>Greater then equal to</td>
                    <td>x>=y</td>
                </tr>
                <tr>
                    <td>
                        &lt=</td>
                    <td>Less then equal to
                    </td>
                    <td>x &lt =y</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>C++ Logical Operators</h3>
        <p>Logical operators are used to determine the logic between variables or values:</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Example</th>
                </tr>
                <tr>
                    <td>&&</td>
                    <td>Logical and</td>
                    <td>Returns true if both
                        statements are true</td>
                    <td>x &lt 5 && x &lt
                        10</td>
                </tr>
                <tr>
                    <td>||</td>
                    <td>Logical or</td>
                    <td>Returns true if one of the
                        statements is true</td>
                    <td>x &lt 5 || x &lt 4</td>
                </tr>
                <tr>
                    <td>!</td>
                    <td>Logical not</td>
                    <td>Reverse the result,
                        returns false if the result
                        is true</td>
                    <td>!(x &lt 5 && x &lt 10)</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <h3>C++ Bitwise Operators</h3>
        <p>Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &, |, and ^ are as follows −</p>
        <br>
        <table class="table table-striped">
        <tbody>
        <tr
        ><th>p</th>
        ><th>q</th>
        ><th>p & q</th>
        ><th>p | q</th>
        ><th>p ^ q</th>
        </tr>
        <tr
        ><th>0</th>
        ><th>0</th>
        ><th>0</th>
        ><th>0</th>
        ><th>0</th>
        </tr>
        <tr
        ><th>0</th>
        ><th>1</th>
        ><th>0</th>
        ><th>1</th>
        ><th>1</th>
        </tr>
        <tr
        ><th>1</th>
        ><th>1</th>
        ><th>0</th>
        ><th>1</th>
        ><th>1</th>
        </tr>
        <tr
        ><th>1</th>
        ><th>0</th>
        ><th>0</th>
        ><th>1</th>
        ><th>1</th>
        </tr>
        
        </tbody>
        </table>
        <br>
        <p>Assume if A = 60; and B = 13; now in binary format they will be as follows −

                A = 0011 1100

                B = 0000 1101

                -----------------

                A&B = 0000 1100

                A|B = 0011 1101

                A^B = 0011 0001

                ~A  = 1100 0011

                The Bitwise operators supported by C++ language are listed in the following table.</p>
                <br>

        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Operator</th>
                    <th>Description</th>
                    <th>Example</th>
                    <th>Same As</th>
                    <th>Result</th>
                    <th>Decimal</th>
                </tr>
                <tr>
                    <td>&</td>
                    <td>AND - Sets each bit to 1 if
                        both bits are 1</td>
                    <td>5 & 1</td>
                    <td>0101 &
                        0001</td>
                    <td>0001</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>|</td>
                    <td>OR - Sets each bit to 1 if any
                        of the two bits is 1</td>
                    <td>5 | 1</td>
                    <td>0101 |
                        0001</td>
                    <td>0101</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>~</td>
                    <td>NOT - Inverts all the bits</td>
                    <td>~5</td>
                    <td> ~0101</td>
                    <td>1010</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>^</td>
                    <td>XOR - Sets each bit to 1 if
                        only one of the two bits is 1</td>
                    <td>5 ^ 1</td>
                    <td>0101 ^
                        0001</td>
                    <td>0100</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>&lt &lt</td>
                    <td>Zero-fill left shift - Shift left
                        by pushing zeroes in from
                        the right and letting the
                        leftmost bits fall off
                    </td>
                    <td>9&lt &lt1</td>
                    <td>1001 &lt &lt 1</td>
                    <td>0010</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>>></td>
                    <td>Signed right shift - Shift
                        right by pushing copies of
                        the leftmost bit in from the
                        left and letting the rightmost
                        bits fall off</td>
                    <td>9 >> 1</td>
                    <td>1001
                        >> 1</td>
                    <td>1100</td>
                    <td>12</td>
                </tr>
                <tr>
                    <td>>>></td>
                    <td>Zero-fill right shift - Shift
                        right by pushing zeroes in
                        from the left and letting the
                        rightmost bits fall off</td>
                    <td>9 >>> 1</td>
                    <td>1001>>>1</td>
                    <td>0100</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
        <p>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/cpp-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="/ind-learning/cpp-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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