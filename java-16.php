<?php

    $sub="java";
    $pag="16";

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

    <title>Java Switch</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------Java Switch------------ -->
    <div class="container">
        <h1>Java Switch</h1>
        <div>
            <a href="java-15.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-17.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>Java Switch Statements</h3>
        <p>Use the <spam class="text-danger">switch</spam> statement to select one of many code blocks to be executed.</p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
            switch(expression) {
                case x:
                // code block
                break;
                case y:
                // code block
                break;
                default:
                // code block
            }</pre>
        <p>This is how it works:
            <ul>
                <li>The <spam class="text-danger">switch</spam> expression is evaluated once.</li>
                <li>The value of the expression is compared with the values of each <spam class="text-danger">case</spam> .</li>
                <li>If there is a match, the associated block of code is executed.</li>
                <li>The <spam class="text-danger">break</spam> and <spam class="text-danger">default</spam> keywords are optional, and will be described later in
                    this chapter</li>
            </ul>
            The example below uses the weekday number to calculate the weekday name:
        </p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int day = 4;
            switch (day) {
                 case 1:
                     System.out.println("Monday");
                     break;
                 case 2:
                     System.out.println("Tuesday");
                     break;
                 case 3:
                     System.out.println("Wednesday");
                     break;
                 case 4:
                     System.out.println("Thursday");
                     break;
                 case 5:
                     System.out.println("Friday");
                     break;
                 case 6:
                     System.out.println("Saturday");
                     break;
                 case 7:
                     System.out.println("Sunday");
                     break;
            }
            // Outputs "Thursday" (day 4)</pre>

        <hr>
        <h3>The break Keyword</h3>
        <p>When Java reaches a <spam class="text-danger">break</spam>, it breaks out of the <spam class="text-danger">switch</spam> block.
            <br>
            This will stop the execution of more code and case testing inside the block.
            <br>
            When a match is found, and the job is done, it's time for a break. There is no need
            for more testing.
            <br>
            A <spam class="text-danger">break</spam> can save a lot of execution time because it "ignores" the execution of all the
            rest of the code in the <spam class="text-danger">switch</spam> block.
        </p>

        <hr>
        <h3>The default Keyword</h3>
        <p>The <spam class="text-danger">default</spam> keyword specifies some code to run if there is no case match:</p>
        <h5>Example</h5>
        <pre class="jumbotron">
            int day = 4;
            switch (day) {
                 case 6:
                     System.out.println("Today is Saturday");
                     break;
                 case 7:
                     System.out.println("Today is Sunday");
                     break;
                 default:
                     System.out.println("Looking forward to the Weekend");
            }
            // Outputs "Looking forward to the Weekend"</pre>
        <p><b>Note</b> that if the <spam class="text-danger">default</spam> statement is used as the last statement in a <spam class="text-danger">switch</spam> block, it
            does not need a <spam class="text-danger">break</spam>.</p>




        <hr>
        <div class="mb-2">
            <a href="java-15.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-17.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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