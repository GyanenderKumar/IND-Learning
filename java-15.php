<?php

    $sub="java";
    $pag="15";

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

    <title>Java If ... Else</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java If ... Else------------ -->
    <div class="container">
        <h1>Java If ... Else</h1>
        <div>
            <a href="java-14.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-16.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Conditions and If Statements</h3>
        <p>
            Java supports the usual logical conditions from mathematics:
            <ul>
                <li>Less than: <spam class="text-danger">a &lt b</spam>
                </li>
                <li>Less than or equal to: <spam class="text-danger">a &lt= b</spam>
                </li>
                <li>Greater than: <spam class="text-danger">a > b</spam>
                </li>
                <li>Greater than or equal to: <spam class="text-danger">a >= b</spam>
                </li>
                <li>Equal to <spam class="text-danger">a == b</spam>
                </li>
                <li>Not Equal to: <spam class="text-danger">a != b</spam>
                </li>
            </ul>
        </p>
        <p>
            You can use these conditions to perform different actions for different decisions.
            <br>
            <br>
            Java has the following conditional statements:
            <ul>
                <li>Use <spam class="text-danger">if</spam> to specify a block of code to be executed, if a specified condition is true</li>
                <li>Use <spam class="text-danger">else</spam> to specify a block of code to be executed, if the same condition is
                    false</li>
                <li>Use <spam class="text-danger">else if</spam> to specify a new condition to test, if the first condition is false</li>
                <li>Use <spam class="text-danger">switch</spam> to specify many alternative blocks of code to be executed</li>
            </ul>

        </p>

        <hr>
        <h3>The if Statement</h3>
        <p>Use the <spam class="text-danger">if</spam> statement to specify a block of Java code to be executed if a condition is
            <spam class="text-danger">true</spam> .</p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            if (condition) {
                // block of code to be executed if the condition is true
            }</pre>
        <p>
            <b>Note</b> that if is in lowercase letters. Uppercase letters (If or IF) will generate an
            error.
            <br>
            <br>
            In the example below, we test two values to find out if 20 is greater than 18. If the
            condition is <spam class="text-danger">true</spam> , print some text:
        </p>

        <h5>Example</h5>
        <pre class="jumbotron">
            if (20 > 18) {
                System.out.println("20 is greater than 18");
            }</pre>
        <p>We can also test variables:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int x = 20;
            int y = 18;
            if (x > y) {
                System.out.println("x is greater than y");
            }</pre>

        <p><b>Example Explained : </b>In the example above we use two variables, x and y, to test whether x is greater
            than y (using the > operator). As x is 20, and y is 18, and we know that 20 is
            greater than 18, we print to the screen that "x is greater than y".
        </p>

        <hr>
        <h3>The else Statement</h3>
        <p>Use the <spam class="text-danger">else</spam> statement to specify a block of code to be executed if the condition is
            <spam class="text-danger">false</spam> .</p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            if (condition) {
                 // block of code to be executed if the condition is true
            } else {
                 // block of code to be executed if the condition is false
            }</pre>

        <h5>Example</h5>
        <pre class="jumbotron">
            int time = 20;
            if (time < 18) {
                System.out.println("Good day.");
            } else {
                System.out.println("Good evening.");
            }
            // Outputs "Good evening."</pre>
        <p><b>Example Explained : </b>In the example above, time (20) is greater than 18, so the condition is <spam class="text-danger">false</spam> .
            Because of this, we move on to the <spam class="text-danger">else</spam> condition and print to the screen "Good
            evening". If the time was less than 18, the program would print "Good day".</p>

        <hr>
        <h3>The else if Statement</h3>
        <p>Use the <spam class="text-danger">else if</spam> statement to specify a new condition if the first condition is <spam class="text-danger">false</spam> .</p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            if (condition1) {
                // block of code to be executed if condition1 is true
            } else if (condition2) {
                // block of code to be executed if the condition1 is false and condition2 i
            } else {
                // block of code to be executed if the condition1 is false and condition2 i
            }</pre>

        <h5>Example</h5>
        <pre class="jumbotron">
            int time = 22;
            if (time < 10) {
                System.out.println("Good morning.");
            } else if (time < 20) {
                System.out.println("Good day.");
            } else {
                System.out.println("Good evening.");
            }
            // Outputs "Good evening."</pre>
        <p><b>Example Explained : </b>In the example above, time (22) is greater than 10, so the first condition is <spam class="text-danger">false</spam> .
            The next condition, in the <spam class="text-danger">else if</spam> statement, is also <spam class="text-danger">false</spam> , so we move on to the <spam class="text-danger">else</spam> condition since condition1 and condition2 is both <spam class="text-danger">false</spam> - and print to the
            screen "Good evening".
            <br>
            However, <spam class="text-danger">if</spam> the time was 14, our program would print "Good day."</p>


        <hr>
        <h3>Short Hand If...Else (Ternary Operator)</h3>
        <p>There is also a short-hand if else, which is known as the <b>ternary operator</b> because
            it consists of three operands. It can be used to replace multiple lines of code with a
            single line. It is often used to replace simple if else statements:</p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            variable = (condition) ? expressionTrue : expressionFalse;</pre>
        <p>Instead of writing:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int time = 20;
            if (time < 18) {
                System.out.println("Good day.");
            } else {
                System.out.println("Good evening.");
            }</pre>
        <p>You can simply write:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int time = 20;
            String result = (time < 18) ? "Good day." : "Good evening.";
            System.out.println(result);</pre>
            


        <hr>
        <div class="mb-2">
            <a href="java-14.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-16.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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