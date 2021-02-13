<?php

    $sub="sql";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>SQL Syntax</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL Syntax</h1>
        <div>
            <a href="sql-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>SQL follows some unique set of rules and guidelines called syntax. Here, we are providing all the basic SQL
            syntax. </p>
        <ul>
            <li><b>SQL</b> is not case sensitive. Generally SQL keywords are written in uppercase.</li>
            <li>SQL statements are dependent on text lines. We can place a single SQL statement on one or multiple text
                lines.</li>
            <li>You can perform most of the action in a database with SQL statements.</li>
            <li>SQL depends on relational algebra and tuple relational calculus.</li>
        </ul>
        <h3>SQL statement</h3>
        <p>SQL statements are started with any of the SQL commands/keywords like SELECT, INSERT, UPDATE, DELETE, ALTER,
            DROP etc. and the statement ends with a semicolon (;). </p>
        <p>Example of SQL statement:</p>
        <pre class="jumbotron">
        SELECT "column_name" FROM "table_name";</pre>
        <p>Why semicolon is used after SQL statements: </p>
        <p>Semicolon is used to separate SQL statements. It is a standard way to separate SQL statements in a database
            system in which more than one SQL statements are used in the same call.</p>
        <p>In this tutorial, we will use semicolon at the end of each SQL statement. </p>
        <h3>SQL Commands</h3>
        <p>These are the some important SQL command:</p>
        <ul>
            <li><strong>SELECT:</strong> it extracts data from a database.</li>
            <li><strong>UPDATE:</strong> it updates data in database.</li>
            <li><strong>DELETE:</strong> it deletes data from database.</li>
            <li><strong>CREATE TABLE:</strong> it creates a new table.</li>
            <li><strong>ALTER TABLE:</strong> it is used to modify the table.</li>
            <li><strong>DROP TABLE:</strong> it deletes a table.</li>
            <li><strong>CREATE DATABASE:</strong> it creates a new database.</li>
            <li><strong>ALTER DATABASE:</strong> It is used to modify a database.</li>
            <li><strong>INSERT INTO:</strong> it inserts new data into a database.</li>
            <li><strong>CREATE INDEX:</strong> it is used to create an index (search key).</li>
            <li><strong>DROP INDEX:</strong> it deletes an index.</li>
        </ul>
        <hr>

        <div class="mb-2">
            <a href="sql-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
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
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>