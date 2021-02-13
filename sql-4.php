<?php

    $sub="sql";
    $pag="4";

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

    <title>SQL Operators</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL Operators</h1>
        <div>
            <a href="sql-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>SQL statements generally contain some reserved words or characters that are used to perform operations such as comparison and arithmetical operations etc. These reserved words or characters are known as operators.</p>
        <p>Generally there are three types of operators in SQL:</p>
        <ol>
            <li>SQL Arithmetic Operators</li>
            <li>SQL Comparison Operators</li>
            <li>SQL Logical Operators</li>
        </ol>


        <hr>
        <h3>SQL Arithmetic Operators:</h3>
        <p>Let's assume two variables "a" and "b". Here "a" is valued 50 and "b" valued 100.</p>
        <p><b>Example:</b></p>
        <table class="table table-striped">
            <tr>
                <th>Operators</th>
                <th>Descriptions</th>
                <th>Examples</th>
            </tr>
            <tr>
                <td>+</td>
                <td>It is used to add containing values of both operands</td>
                <td>a+b will give 150</td>
            </tr>
            <tr>
                <td>-</td>
                <td>It subtracts right hand operand from left hand operand</td>
                <td>a-b will give -50</td>
            </tr>
            <tr>
                <td>*</td>
                <td>It multiply both operand's values</td>
                <td>a*b will give 5000</td>
            </tr>
            <tr>
                <td>/</td>
                <td> It divides left hand operand by right hand operand </td>
                <td>b/a will give 2</td>
            </tr>
            <tr>
                <td>% </td>
                <td>It divides left hand operand by right hand operand and returns reminder</td>
                <td> b%a will give 0</td>
            </tr>
        </table>


        <hr>
        <h3>SQL Comparison Operators:</h3>
        <p>Let's take two variables "a" and "b" that are valued 50 and 100.</p>
        <table class="table table-striped">
            <tr>
                <th>Operator</th>
                <th>Description</th>
                <th>Example</th>
            </tr>
            <tr>
                <td>=</td>
                <td>Examine both operands value that are equal or not,if yes condition become true.</td>
                <td>(a=b) is not true</td>
            </tr>
            <tr>
                <td>!=</td>
                <td>This is used to check the value of both operands equal or not,if not condition become true.</td>
                <td>(a!=b) is true</td>
            </tr>
            <tr>
                <td>&lt; &gt;</td>
                <td>Examines the operand's value equal or not, if values are not equal condition is true</td>
                <td>(a&lt;&gt;b) is true</td>
            </tr>
            <tr>
                <td>&gt;</td>
                <td>Examine the left operand value is greater than right Operand, if yes condition becomes true</td>
                <td>(a&gt;b) is not true</td>
            </tr>
            <tr>
                <td>&lt; </td>
                <td>Examines the left operand value is less than right Operand, if yes condition becomes true</td>
                <td>(a<b) is="" true<="" td=""></b)>
                </td>
            </tr>
            <tr>
                <td>&gt;= </td>
                <td> Examines that the value of left operand is greater than or equal to the value of right operand or not,if yes condition become true</td>
                <td>(a&gt;=b) is not true</td>
            </tr>
            <tr>
                <td>&lt;= </td>
                <td>Examines that the value of left operand is less than or equal to the value of right operand or not, if yes condition becomes true</td>
                <td> (a&lt;=b) is true</td>
            </tr>
            <tr>
                <td>!&lt;</td>
                <td>Examines that the left operand value is not less than the right operand value </td>
                <td>(a!<b) is="" not="" true<="" td=""></b)>
                </td>
            </tr>
            <tr>
                <td>!&gt;</td>
                <td> Examines that the value of left operand is not greater than the value of right operand</td>
                <td> (a!&gt;b) is true</td>
            </tr>
        </table>


        <hr>
        <h3>SQL Logical Operators:</h3>
        <p>This is the list of logical operators used in SQL.</p>
        <table class="table table-striped">
            <tr>
                <th>Operator</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>ALL</td>
                <td> this is used to compare a value to all values in another value set.</td>
            </tr>
            <tr>
                <td>AND</td>
                <td> this operator allows the existence of multiple conditions in an SQL statement.</td>
            </tr>
            <tr>
                <td>ANY</td>
                <td> this operator is used to compare the value in list according to the condition.</td>
            </tr>
            <tr>
                <td>BETWEEN</td>
                <td>this operator is used to search for values, that are within a set of values </td>
            </tr>
            <tr>
                <td>IN</td>
                <td>this operator is used to compare a value to that specified list value</td>
            </tr>
            <tr>
                <td>NOT</td>
                <td>the NOT operator reverse the meaning of any logical operator </td>
            </tr>
            <tr>
                <td>OR </td>
                <td>this operator is used to combine multiple conditions in SQL statements</td>
            </tr>
            <tr>
                <td>EXISTS</td>
                <td> the EXISTS operator is used to search for the presence of a row in a specified table</td>
            </tr>
            <tr>
                <td>LIKE </td>
                <td>this operator is used to compare a value to similar values using wildcard operator</td>
            </tr>
        </table>


        <hr>
        <div class="mb-2">
            <a href="sql-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>