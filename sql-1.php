<?php

    $sub="sql";
    $pag="1";

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

    <title>SQL Tutorial</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>

    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL Tutorial</h1>
        <div>
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>SQL tutorial provides basic and advanced concepts of SQL. Our SQL tutorial is designed for beginners and
            professionals.</p>
        <p><strong>SQL</strong> (<em>Structured Query Language</em>) is used to perform operations on the records stored
            in the database such as updating records, deleting records, creating and modifying tables, views, etc.</p>
        <p>SQL is just a query language; it is not a database. To perform SQL queries, you need to install any database,
            for example, Oracle, MySQL, MongoDB, PostGre SQL, SQL Server, DB2, etc.</p>
        <h3>What is SQL</h3>
        <ul>
            <li>SQL stands for <strong>Structured Query Language</strong>.</li>
            <li>It is designed for managing data in a relational database management system (RDBMS).</li>
            <li>It is pronounced as S-Q-L or sometime <strong>See-Qwell</strong>.</li>
            <li>SQL is a database language, it is used for database creation, deletion, fetching rows, and modifying
                rows, etc.</li>
            <li>SQL is based on relational algebra and tuple relational calculus.</li>
        </ul>
        <p>All <b>DBMS</b> like <b>MySQL</b>, <b>Oracle</b>, MS Access, Sybase, Informix, <b>PostgreSQL</b>, and <b>SQL
                Server</b> use SQL as standard database language.
        <ul>
            <li>SQL stands for <strong>Structured Query Language</strong>.</li>
            <li>It is designed for managing data in a relational database management system (RDBMS).</li>
            <li>It is pronounced as S-Q-L or sometime <strong>See-Qwell</strong>.</li>
            <li>SQL is a database language, it is used for database creation, deletion, fetching rows, and modifying
                rows, etc.</li>
            <li>SQL is based on relational algebra and tuple relational calculus.</li>
        </ul>
        </p>
        <h3>Why SQL is required</h3>
        <p>SQL is required:</p>
        <ul>
            <li>To create new databases, tables and views</li>
            <li>To insert records in a database</li>
            <li>To update records in a database</li>
            <li>To delete records from a database</li>
            <li>To retrieve data from a database</li>
        </ul>
        <h3>What SQL does</h3>
        <ul>
            <li>With SQL, we can query our database in several ways, using English-like statements.</li>
            <li>With SQL, a user can access data from a relational database management system.</li>
            <li>It allows the user to describe the data.</li>
            <li>It allows the user to define the data in the database and manipulate it when needed.</li>
            <li>It allows the user to create and drop database and table.</li>
            <li>It allows the user to create a view, stored procedure, function in a database.</li>
            <li>It allows the user to set permission on tables, procedures, and views.</li>
        </ul>
        <hr>

        <div class="mb-2">
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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