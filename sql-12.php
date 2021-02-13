<?php

    $sub="sql";
    $pag="12";

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

    <title>SQL DELETE TABLE</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL DELETE TABLE</h1>
        <div>
            <a href="sql-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>The DELETE statement is used to delete rows from a table. If you want to remove a specific row from a table
            you should use WHERE condition. </p>
        <pre class="jumbotron">
        DELETE FROM table_name [WHERE condition];</pre>
        <p>But if you do not specify the WHERE condition it will remove all the rows from the table.</p>
        <pre class="jumbotron">
        DELETE FROM table_name;</pre>
        <p>There are some more terms similar to DELETE statement like as DROP statement and TRUNCATE statement but they
            are not exactly same there are some differences between them.</p>

        <hr>
        <h3>Difference between DELETE and TRUNCATE statements</h3>
        <p>There is a slight difference b/w delete and truncate statement. The <b>DELETE statement</b> only deletes the
            rows from the table based on the condition defined by WHERE clause or delete all the rows from the table
            when condition is not specified.</p>
        <p>But it does not free the space containing by the table.</p>
        <p>The <b>TRUNCATE statement:</b> it is used to delete all the rows from the table <b>and free the containing
                space.</b></p>
        <p>Let's see an "employee" table.</p>
        <table class="table table-striped">
            <tr>
                <th>Emp_id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Aryan</td>
                <td>Allahabad</td>
                <td>22000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Shurabhi</td>
                <td>Varanasi</td>
                <td>13000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pappu</td>
                <td>Delhi</td>
                <td>24000</td>
            </tr>
        </table>
        <p>Execute the following query to truncate the table:</p>
        <pre class="jumbotron">
        TRUNCATE TABLE employee;</pre>


        <hr>
        <h3>Difference b/w DROP and TRUNCATE statements</h3>
        <p>When you use the drop statement it deletes the table's row together with the table's definition so all the
            relationships of that table with other tables will no longer be valid.</p>
        <p><b>When you drop a table:</b></p>
        <ul>
            <li>Table structure will be dropped</li>
            <li>Relationship will be dropped</li>
            <li>Integrity constraints will be dropped</li>
            <li>Access privileges will also be dropped</li>
        </ul>
        <p>On the other hand when we <b>TRUNCATE</b> a table, the table structure remains the same, so you will not face
            any of the above problems.</p>


        <hr>
        <div class="mb-2">
            <a href="sql-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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