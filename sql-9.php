<?php

    $sub="sql";
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

    <title>SQL Table</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL Table</h1>
        <div>
            <a href="sql-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>Table is a collection of data, organized in terms of rows and columns. In DBMS term, table is known as relation and row as tuple.</p>
        <p>Table is the simple form of data storage. A table is also considered as a convenient representation of relations.</p>
        <p>Let's see an example of an employee table:</p>
        <table class="table table-striped">
            <caption>Employee</caption>
            <tbody>
                <tr>
                    <th>EMP_NAME</th>
                    <th>ADDRESS</th>
                    <th>SALARY</th>
                </tr>
                <tr>
                    <td>Ankit</td>
                    <td>Lucknow</td>
                    <td>15000</td>
                </tr>
                <tr>
                    <td>Raman</td>
                    <td>Allahabad</td>
                    <td>18000</td>
                </tr>
                <tr>
                    <td>Mike</td>
                    <td>New York</td>
                    <td>20000</td>
                </tr>
        </table><br>
        <p>In the above table, "Employee" is the table name, "EMP_NAME", "ADDRESS" and "SALARY" are the column names. The combination of data of multiple columns forms a row e.g. "Ankit", "Lucknow" and 15000 are the data of one row.</p>
        
        <hr>
        <h3>SQL TABLE Variable</h3>
        <p>The <strong>SQL Table variable</strong> is used to create, modify, rename, copy and delete tables. Table variable was introduced by Microsoft. </p>
        <p>It was introduced with SQL server 2000 to be an alternative of temporary tables.</p>
        <p>It is a variable where we temporary store records and results. This is same like temp table but in the case of temp table we need to explicitly drop it.<p>It was introduced with SQL server 2000 to be an alternative of temporary tables.</p>
        </p>
        <p>Table variables are used to store a set of records. So declaration syntax generally looks like CREATE TABLE syntax.</p>
        <pre class="jumbotron">
        create table "tablename"
        ("column1" "data type",
        "column2" "data type",
        ...
        "columnN" "data type");</pre>
        <p>When a transaction rolled back the data associated with table variable is not rolled back.</p>
        <p>A table variable generally uses lesser resources than a temporary variable.</p>
        <p>Table variable cannot be used as an input or an output parameter.</p>
        <hr>
        <h3>Topics of SQL TABLE Statement</h3>
        <b>SQL TABLE Variable</b>
        <p>What TABLE variable can do?</p>
        <b>SQL CREATE TABLE</b>
        <p>How to create a table using SQL query&gt;</p>
        <b>SQL DROP TABLE</b>
        <p>How to drop a table?</p>
        <b>SQL DELETE TABLE</b>
        <p>How to delete all the records of a table?</p>
        <b>SQL RENAME TABLE</b>
        <p>How to rename a table?</p>
        <b>SQL TRUNCATE TABLE</b>
        <p>How to truncate a table?</p>
        <b>SQL COPY TABLE</b>
        <p>How to copy a table?</p>
        <b>SQL TEMP TABLE</b>
        <p>What is temporary table? What are the advantage of temporary table?</p>
        <b>SQL ALTER TABLE</b>
        <p>How to add, modify, rename and drop column.</p>


        <hr>
        <div class="mb-2">
            <a href="sql-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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