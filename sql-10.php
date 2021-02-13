<?php

    $sub="sql";
    $pag="10";

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

    <title>SQL CREATE TABLE</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL CREATE TABLE</h1>
        <div>
            <a href="sql-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>SQL CREATE TABLE statement is used to create table in a database.</p>
        <p>If you want to create a table, you should name the table and define its column and each column's data type.
        </p>
        <p>Let's see the simple syntax to create the table.</p>
        <pre class="jumbotron">
        create table "tablename"
        ("column1" "data type",
        "column2" "data type",
        "column3" "data type",
        ...
        "columnN" "data type");</pre>
        <p>The data type of the columns may vary from one database to another. For example, NUMBER is supported in
            Oracle database for integer value whereas INT is supported in MySQL.</p>
        <p>Let us take an example to create a STUDENTS table with ID as primary key and NOT NULL are the constraint
            showing that these fields cannot be NULL while creating records in the table.</p>
        <pre class="jumbotron">
        CREATE TABLE STUDENTS (
        ID INT                           NOT NULL,
        NAME VARCHAR (20) NOT NULL,
        AGE INT                         NOT NULL,
        ADDRESS CHAR (25),
        PRIMARY KEY (ID)
        );</pre>
        <p>You can verify it, if you have created the table successfully by looking at the message displayed by the SQL
            Server, else you can use DESC command as follows:</p>
        <p>SQL&gt; DESC STUDENTS;</p>
        <table class="table table-striped">
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
        <p>Now you have the STUDENTS table available in your database and you can use to store required information
            related to students.</p>

        <hr>
        <h3>SQL CREATE TABLE Example in MySQL</h3>
        <p>Let's see the command to create a table in MySQL database.</p>
        <pre class="jumbotron">
        CREATE TABLE Employee
        (
        EmployeeID int,
        FirstName varchar(255),
        LastName varchar(255),
        Email varchar(255),
        AddressLine varchar(255),
        City varchar(255)
        );</pre>

        <hr>
        <h3>SQL CREATE TABLE Example in Oracle</h3>
        <p>Let's see the command to create a table in Oracle database.</p>
        <pre class="jumbotron">
        CREATE TABLE Employee
        (
        EmployeeID number(10),
        FirstName varchar2(255),
        LastName varchar2(255),
        Email varchar2(255),
        AddressLine varchar2(255),
        City varchar2(255)
        );</pre>

        <hr>
        <h3>SQL CREATE TABLE Example in Microsoft SQLServer</h3>
        <p>Let's see the command to create a table in SQLServer database. It is same as MySQL and Oracle.</p>
        <pre class="jumbotron">
        CREATE TABLE Employee
        (
        EmployeeID int,
        FirstName varchar(255),
        LastName varchar(255),
        Email varchar(255),
        AddressLine varchar(255),
        City varchar(255)
        );</pre>

        <hr>
        <h3>Create a Table using another table</h3>
        <p>We can create a copy of an existing table using the create table command. The new table gets the same column
            signature as the old table. We can select all columns or some specific columns.</p>
        <p>If we create a new table using an old table, the new table will be filled with the existing value from the
            old table.</p>
        <p>The basic syntax for creating a table with the other table is:</p>
        <pre class="jumbotron">
        CREATE TABLE table_name  AS
        SELECT column1, column2,... 
        FROM old_table_name WHERE ..... ;
        The following SQL creates a copy of the employee table.
        CREATE TABLE EmployeeCopy AS
        SELECT EmployeeID, FirstName, Email
        FROM Employee;</pre>

        <hr>
        <h3>SQL Primary Key with CREATE TABLE Statement </h3>
        <p>The following query creates a PRIMARY KEY on the "D" column when the "Employee" table is created.</p>
        <h5>MySQL</h5>
        <pre class="jumbotron">
        CREATE TABLE Employee(
        EmployeeID NOT NULL,
        FirstName varchar(255) NOT NULL,
        LastName varchar(255),
        City varchar(255),
        PRIMARY KEY (EmployeeID)
        );</pre>

        <hr>
        <h3>SQL Server / Oracle / MS Access</h3>
        <pre class="jumbotron">
        CREATE TABLE Employee(
        EmployeeID NOT NULL PRIMARY KEY,
        FirstName varchar(255) NOT NULL,
        LastName varchar(255),
        City varchar(255)
        );</pre>
        <p>Use the following query to define a PRIMARY KEY constraints on multiple columns, and to allow naming of a
            PRIMARY KEY constraints. </p>

        <hr>
        <h3>For MySQL / SQL Server /Oracle / MS Access</h3>
        <pre class="jumbotron">
        CREATE TABLE Employee(
        EmployeeID NOT NULL,
        FirstName varchar(255) NOT NULL,
        LastName varchar(255),
        City varchar(255),
        CONSTRAINT     PK_Employee PRIMARY KEY (EmployeeID, FirstName)
        );</pre>


        <hr>
        <div class="mb-2">
            <a href="sql-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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