<?php

    $sub="sql";
    $pag="11";

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

    <title>SQL DROP TABLE</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL DROP TABLE</h1>
        <div>
            <a href="sql-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>A SQL DROP TABLE statement is used to delete a table definition and all data from a table.</p>
        <p>This is very important to know that once a table is deleted all the information available in the table is lost forever, so we have to be very careful when using this command.</p>
        <p>Let's see the syntax to drop the table from the database.</p>
        <pre class="jumbotron">
        DROP TABLE "table_name";</pre>
        <p>Let us take an example:</p>
        <p>First we verify STUDENTS table and then we would delete it from the database.</p>
        <pre class="jumbotron">
        SQL&gt; DESC STUDENTS;</pre>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>FIELD</th>
                    <th>TYPE</th>
                    <th>NULL</th>
                    <th>KEY</th>
                    <th>DEFAULT</th>
                    <th>EXTRA</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Int(11)</td>
                    <td>NO</td>
                    <td>PRI</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>NAME</td>
                    <td>Varchar(20)</td>
                    <td>NO</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>AGE</td>
                    <td>Int(11)</td>
                    <td>NO</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ADDRESS</td>
                    <td>Varchar(25)</td>
                    <td>YES</td>
                    <td></td>
                    <td>NULL</td>
                    <td></td>
                </tr>
        </table>
        <p>4 rows in set (0.00 sec)</p>
        <p>This shows that STUDENTS table is available in the database, so we can drop it as follows:</p>
        <pre class="jumbotron">
        SQL&gt;DROP TABLE STUDENTS;</pre>
        <p>Now, use the following command to check whether table exists or not.</p>
        <pre class="jumbotron">
        SQL&gt; DESC STUDENTS;</pre>
        <p>Query OK, 0 rows affected (0.01 sec)</p>
        <p>As you can see, table is dropped so it doesn't display it.</p>

        <hr>
        <h3>SQL DROP TABLE Example in MySQL</h3>
        <p>Let's see the command to drop a table from the MySQL database.</p>
        <pre class="jumbotron">
        DROP TABLE table_name;</pre>

        <hr>
        <h3>SQL DROP TABLE Example in Oracle</h3>
        <p>Let's see the command to drop a table from Oracle database. It is same as MySQL.</p>
        <pre class="jumbotron">
        DROP TABLE table_name;</pre>

        <hr>
        <h3>SQL DROP TABLE Example in Microsoft SQLServer</h3>
        <p>Let's see the command to drop a table from SQLServer database. It is same as MySQL.</p>
        <pre class="jumbotron">
        DROP TABLE table_name;</pre>
        
        
        <hr>
        <div class="mb-2">
            <a href="sql-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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