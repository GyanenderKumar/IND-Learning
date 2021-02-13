<?php

    $sub="sql";
    $pag="3";

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

    <title>SQL Data Types</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------SQL Introduction section------------ -->
    <div class="container">
        <h1>SQL Data Types</h1>
        <div>
            <a href="sql-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <p>Data types are used to represent the nature of the data that can be stored in the database table. For example, in a particular column of a table, if we want to store a string type of data then we will have to declare a string data type of this column.</p>
        <p>Data types mainly classified into three categories for every database.</p>
        <ul>
            <li>String Data types</li>
            <li>Numeric Data types</li>
            <li>Date and time Data types</li>
        </ul>

        <hr>
        <h3>Data Types in MySQL, SQL Server and Oracle Databases </h3>
        <h4>MySQL Data Types</h4>
        <p>A list of data types used in MySQL database. This is based on MySQL 8.0. </p>
        <p><strong>MySQL String Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>CHAR(Size)</strong></td>
                <td>It is used to specify a fixed length string that can contain numbers, letters, and special characters. Its size can be 0 to 255 characters. Default is 1. </td>
            </tr>
            <tr>
                <td><strong>VARCHAR(Size)</strong></td>
                <td>It is used to specify a variable length string that can contain numbers, letters, and special characters. Its size can be from 0 to 65535 characters.</td>
            </tr>
            <tr>
                <td><strong>BINARY(Size)</strong></td>
                <td>It is equal to CHAR() but stores binary byte strings. Its size parameter specifies the column length in the bytes. Default is 1.</td>
            </tr>
            <tr>
                <td><strong>VARBINARY(Size)</strong></td>
                <td>It is equal to VARCHAR() but stores binary byte strings. Its size parameter specifies the maximum column length in bytes.</td>
            </tr>
            <tr>
                <td><strong>TEXT(Size)</strong></td>
                <td>It holds a string that can contain a maximum length of 255 characters.</td>
            </tr>
            <tr>
                <td><strong>TINYTEXT</strong></td>
                <td>It holds a string with a maximum length of 255 characters.</td>
            </tr>
            <tr>
                <td><strong>MEDIUMTEXT</strong></td>
                <td>It holds a string with a maximum length of 16,777,215.</td>
            </tr>
            <tr>
                <td><strong>LONGTEXT</strong></td>
                <td>It holds a string with a maximum length of 4,294,967,295 characters.</td>
            </tr>
            <tr>
                <td><strong>ENUM(val1, val2, val3,...)</strong></td>
                <td>It is used when a string object having only one value, chosen from a list of possible values. It contains 65535 values in an ENUM list. If you insert a value that is not in the list, a blank value will be inserted.</td>
            </tr>
            <tr>
                <td><strong>SET( val1,val2,val3,....)</strong></td>
                <td>It is used to specify a string that can have 0 or more values, chosen from a list of possible values. You can list up to 64 values at one time in a SET list.</td>
            </tr>
            <tr>
                <td><strong>BLOB(size)</strong></td>
                <td>It is used for BLOBs (Binary Large Objects). It can hold up to 65,535 bytes.</td>
            </tr>
        </table>
        <p><strong>MySQL Numeric Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>BIT(Size)</strong></td>
                <td>It is used for a bit-value type. The number of bits per value is specified in size. Its size can be 1 to 64. The default value is 1.</td>
            </tr>
            <tr>
                <td><strong>INT(size)</strong></td>
                <td>It is used for the integer value. Its signed range varies from -2147483648 to 2147483647 and unsigned range varies from 0 to 4294967295. The size parameter specifies the max display width that is 255. </td>
            </tr>
            <tr>
                <td><strong>INTEGER(size)</strong></td>
                <td>It is equal to INT(size).</td>
            </tr>
            <tr>
                <td><strong>FLOAT(size, d)</strong></td>
                <td>It is used to specify a floating point number. Its size parameter specifies the total number of digits. The number of digits after the decimal point is specified by <strong>d</strong> parameter.</td>
            </tr>
            <tr>
                <td><strong>FLOAT(p)</strong></td>
                <td>It is used to specify a floating point number. MySQL used p parameter to determine whether to use FLOAT or DOUBLE. If p is between 0 to24, the data type becomes FLOAT (). If p is from 25 to 53, the data type becomes DOUBLE().</td>
            </tr>
            <tr>
                <td><strong>DOUBLE(size, d)</strong></td>
                <td>It is a normal size floating point number. Its size parameter specifies the total number of digits. The number of digits after the decimal is specified by d parameter.</td>
            </tr>
            <tr>
                <td><strong>DECIMAL(size, d)</strong></td>
                <td>It is used to specify a fixed point number. Its size parameter specifies the total number of digits. The number of digits after the decimal parameter is specified by <strong>d</strong> parameter. The maximum value for the size is 65, and the default value is 10. The maximum value for <strong>d</strong> is 30, and the default value is 0.</td>
            </tr>
            <tr>
                <td><strong>DEC(size, d)</strong></td>
                <td>It is equal to DECIMAL(size, d).</td>
            </tr>
            <tr>
                <td><strong>BOOL</strong></td>
                <td>It is used to specify Boolean values true and false. Zero is considered as false, and nonzero values are considered as true.</td>
            </tr>
        </table>
        <p><strong>MySQL Date and Time Data Types : </strong></p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td><strong>DATE</strong></td>
                    <td>It is used to specify date format YYYY-MM-DD. Its supported range is from '1000-01-01' to '9999-12-31'. </td>
                </tr>
                <tr>
                    <td><strong>DATETIME(fsp)</strong></td>
                    <td>It is used to specify date and time combination. Its format is YYYY-MM-DD hh:mm:ss. Its supported range is from '1000-01-01 00:00:00' to 9999-12-31 23:59:59'.</td>
                </tr>
                <tr>
                    <td><strong>TIMESTAMP(fsp)</strong></td>
                    <td>It is used to specify the timestamp. Its value is stored as the number of seconds since the Unix epoch('1970-01-01 00:00:00' UTC). Its format is YYYY-MM-DD hh:mm:ss. Its supported range is from '1970-01-01 00:00:01' UTC to '2038-01-09 03:14:07' UTC.</td>
                </tr>
                <tr>
                    <td><strong>TIME(fsp)</strong></td>
                    <td>It is used to specify the time format. Its format is hh:mm:ss. Its supported range is from '-838:59:59' to '838:59:59'</td>
                </tr>
                <tr>
                    <td><strong>YEAR</strong></td>
                    <td>It is used to specify a year in four-digit format. Values allowed in four digit format from 1901 to 2155, and 0000. </td>
                </tr>
        </table>

        <hr>
        <h3>SQL Server Data Types</h3>
        <p><strong>SQL Server String Data Type : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>char(n)</strong></td>
                <td>It is a fixed width character string data type. Its size can be up to 8000 characters. </td>
            </tr>
            <tr>
                <td><strong>varchar(n)</strong></td>
                <td>It is a variable width character string data type. Its size can be up to 8000 characters.</td>
            </tr>
            <tr>
                <td><strong>varchar(max)</strong></td>
                <td>It is a variable width character string data types. Its size can be up to 1,073,741,824 characters.</td>
            </tr>
            <tr>
                <td><strong>text</strong></td>
                <td>It is a variable width character string data type. Its size can be up to 2GB of text data. </td>
            </tr>
            <tr>
                <td><strong>nchar</strong></td>
                <td>It is a fixed width Unicode string data type. Its size can be up to 4000 characters.</td>
            </tr>
            <tr>
                <td><strong>nvarchar</strong></td>
                <td>It is a variable width Unicode string data type. Its size can be up to 4000 characters.</td>
            </tr>
            <tr>
                <td><strong>ntext</strong></td>
                <td>It is a variable width Unicode string data type. Its size can be up to 2GB of text data.</td>
            </tr>
            <tr>
                <td><strong>binary(n)</strong></td>
                <td>It is a fixed width Binary string data type. Its size can be up to 8000 bytes.</td>
            </tr>
            <tr>
                <td><strong>varbinary</strong></td>
                <td>It is a variable width Binary string data type. Its size can be up to 8000 bytes.</td>
            </tr>
            <tr>
                <td><strong>image</strong></td>
                <td>It is also a variable width Binary string data type. Its size can be up to 2GB.</td>
            </tr>
        </table>
        <p><strong>SQL Server Numeric Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>bit</strong></td>
                <td>It is an integer that can be 0, 1 or null.</td>
            </tr>
            <tr>
                <td><strong>tinyint</strong></td>
                <td>It allows whole numbers from 0 to 255.</td>
            </tr>
            <tr>
                <td><strong>Smallint</strong></td>
                <td>It allows whole numbers between -32,768 and 32,767.</td>
            </tr>
            <tr>
                <td><strong>Int</strong></td>
                <td>It allows whole numbers between -2,147,483,648 and 2,147,483,647.</td>
            </tr>
            <tr>
                <td><strong>bigint</strong></td>
                <td>It allows whole numbers between -9,223,372,036,854,775,808 and 9,223,372,036,854,775,807.</td>
            </tr>
            <tr>
                <td><strong>float(n)</strong></td>
                <td>It is used to specify floating precision number data from -1.79E+308 to 1.79E+308. The n parameter indicates whether the field should hold the 4 or 8 bytes. Default value of n is 53.</td>
            </tr>
            <tr>
                <td><strong>real</strong></td>
                <td>It is a floating precision number data from -3.40E+38 to 3.40E+38.</td>
            </tr>
            <tr>
                <td><strong>money</strong></td>
                <td>It is used to specify monetary data from -922,337,233,685,477.5808 to 922,337,203,685,477.5807.</td>
            </tr>
        </table>
        <p><strong>SQL Server Date and Time Data Type : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>datetime</strong></td>
                <td>It is used to specify date and time combination. It supports range from January 1, 1753, to December 31, 9999 with an accuracy of 3.33 milliseconds.</td>
            </tr>
            <tr>
                <td><strong>datetime2</strong></td>
                <td>It is used to specify date and time combination. It supports range from January 1, 0001 to December 31, 9999 with an accuracy of 100 nanoseconds</td>
            </tr>
            <tr>
                <td><strong>date</strong></td>
                <td>It is used to store date only. It supports range from January 1, 0001 to December 31, 9999</td>
            </tr>
            <tr>
                <td><strong>time</strong></td>
                <td>It stores time only to an accuracy of 100 nanoseconds</td>
            </tr>
            <tr>
                <td><strong>timestamp</strong></td>
                <td>It stores a unique number when a new row gets created or modified. The time stamp value is based upon an internal clock and does not correspond to real time. Each table may contain only one-time stamp variable.</td>
            </tr>
        </table>
        <p><strong>SQL Server Other Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>Sql_variant</strong></td>
                <td>It is used for various data types except for text, timestamp, and ntext. It stores up to 8000 bytes of data.</td>
            </tr>
            <tr>
                <td><strong>XML</strong></td>
                <td>It stores XML formatted data. Maximum 2GB.</td>
            </tr>
            <tr>
                <td><strong>cursor</strong></td>
                <td>It stores a reference to a cursor used for database operations.</td>
            </tr>
            <tr>
                <td><strong>table</strong></td>
                <td>It stores result set for later processing.</td>
            </tr>
            <tr>
                <td><strong>uniqueidentifier</strong></td>
                <td>It stores GUID (Globally unique identifier).</td>
            </tr>
        </table>

        <hr>
        <h3>Oracle Data Types</h3>
        <p><strong>Oracle String data types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>CHAR(size)</strong></td>
                <td>It is used to store character data within the predefined length. It can be stored up to 2000 bytes.</td>
            </tr>
            <tr>
                <td><strong>NCHAR(size)</strong></td>
                <td>It is used to store national character data within the predefined length. It can be stored up to 2000 bytes.</td>
            </tr>
            <tr>
                <td><strong>VARCHAR2(size)</strong></td>
                <td>It is used to store variable string data within the predefined length. It can be stored up to 4000 byte.</td>
            </tr>
            <tr>
                <td><strong>VARCHAR(SIZE)</strong></td>
                <td>It is the same as VARCHAR2(size). You can also use VARCHAR(size), but it is suggested to use VARCHAR2(size)</td>
            </tr>
            <tr>
                <td><strong>NVARCHAR2(size)</strong></td>
                <td>It is used to store Unicode string data within the predefined length. We have to must specify the size of NVARCHAR2 data type. It can be stored up to 4000 bytes.</td>
            </tr>
        </table>
        <p><strong>Oracle Numeric Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>NUMBER(p, s)</strong></td>
                <td>It contains precision p and scale s. The precision p can range from 1 to 38, and the scale s can range from -84 to 127. </td>
            </tr>
            <tr>
                <td><strong>FLOAT(p)</strong></td>
                <td>It is a subtype of the NUMBER data type. The precision p can range from 1 to 126.</td>
            </tr>
            <tr>
                <td><strong>BINARY_FLOAT</strong></td>
                <td>It is used for binary precision( 32-bit). It requires 5 bytes, including length byte. </td>
            </tr>
            <tr>
                <td><strong>BINARY_DOUBLE</strong></td>
                <td>It is used for double binary precision (64-bit). It requires 9 bytes, including length byte.</td>
            </tr>
        </table>
        <p><strong>Oracle Date and Time Data Types : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>DATE</strong></td>
                <td>It is used to store a valid date-time format with a fixed length. Its range varies from January 1, 4712 BC to December 31, 9999 AD.</td>
            </tr>
            <tr>
                <td><strong>TIMESTAMP</strong></td>
                <td>It is used to store the valid date in YYYY-MM-DD with time hh:mm:ss format.</td>
            </tr>
        </table>
        <p><strong>Oracle Large Object Data Types (LOB Types) : </strong></p>
        <table class="table table-striped">
            <tr>
                <td><strong>BLOB</strong></td>
                <td>It is used to specify unstructured binary data. Its range goes up to 2<sup>32</sup>-1 bytes or 4 GB.</td>
            </tr>
            <tr>
                <td><strong>BFILE</strong></td>
                <td>It is used to store binary data in an external file. Its range goes up to 2<sup>32</sup>-1 bytes or 4 GB.</td>
            </tr>
            <tr>
                <td><strong>CLOB</strong></td>
                <td>It is used for single-byte character data. Its range goes up to 2<sup>32</sup>-1 bytes or 4 GB.</td>
            </tr>
            <tr>
                <td><strong>NCLOB</strong></td>
                <td>It is used to specify single byte or fixed length multibyte national character set (NCHAR) data. Its range is up to 2<sup>32</sup>-1 bytes or 4 GB.</td>
            </tr>
            <tr>
                <td><strong>RAW(size)</strong></td>
                <td>It is used to specify variable length raw binary data. Its range is up to 2000 bytes per row. Its maximum size must be specified.</td>
            </tr>
            <tr>
                <td><strong>LONG RAW</strong></td>
                <td>It is used to specify variable length raw binary data. Its range up to 2<sup>31</sup>-1 bytes or 2 GB, per row.</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="sql-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="sql-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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