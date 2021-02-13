<?php

    $sub="c";
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

    <title>Variable in C</title>


    <link rel="stylesheet" href="stylesheet/style.css">



</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ---------- Intro------------ -->
    <div class="container">
        <h1>Identifiers in C</h1>
        <div>
            <a href="c-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <p> C identifiers represent the name in the C program, for example, variables, functions, arrays, structures, unions, labels, etc. An identifier can be composed of letters such as uppercase, lowercase letters, underscore, digits, but the starting letter should be either an alphabet or an underscore. If the identifier is not used in the external linkage, then it is called as an internal identifier. If the identifier is used in the external linkage, then it is called as an external identifier.
        </p>
        <p>We can say that an identifier is a collection of alphanumeric characters that begins either with an alphabetical character or an underscore, which are used to represent various programming elements such as variables, functions, arrays, structures, unions, labels, etc. There are 52 alphabetical characters (uppercase and lowercase), underscore character, and ten numerical digits (0-9) that represent the identifiers. There is a total of 63 alphanumerical characters that represent the identifiers.</p>
        <h3>Rules for constructing C identifiers</h3>
        <ul>
            <li>The first character of an identifier should be either an alphabet or an underscore, and then it can be followed by any of the character, digit, or underscore.</li>
            <li>It should not begin with any numerical digit.</li>
            <li>In identifiers, both uppercase and lowercase letters are distinct. Therefore, we can say that identifiers are case sensitive.</li>
            <li>Commas or blank spaces cannot be specified within an identifier.</li>
            <li>Keywords cannot be represented as an identifier.</li>
            <li>The length of the identifiers should not be more than 31 characters.</li>
            <li>Identifiers should be written in such a way that it is meaningful, short, and easy to read.</li>
        </ul>
        <h3>Example of valid identifiers</h3>
        <pre class="jumbotron">
                                        total, sum, average, _m _, sum_1, etc.  
                                    </pre>
        <h3>Example of invalid identifiers</h3>
        <pre class="jumbotron">
                                        2sum (starts with a numerical digit)  
                                        int (reserved word)  
                                        char (reserved word)  
                                        m+n (special character, i.e., '+')
                                    </pre>
        <h3>Types of identifiers</h3>
        <li>Internal Identifier</li>
        If the identifier is not used in the external linkage, then it is known as an internal identifier. The internal identifiers can be local variables.

        <li>External Identifier</li>
        If the identifier is used in the external linkage, then it is known as an external identifier. The external identifiers can be function names, global variables.

        <h3>Differences between Keyword and Identifier</h3>
        <table>
            <tbody>
                <tr>
                    <th>Keyword</th>
                    <th>Identifier</th>
                </tr>
                <tr>
                    <td>Keyword is a pre-defined word.</td>
                    <td>The identifier is a user-defined word</td>
                </tr>
                <tr>
                    <td>It must be written in a lowercase letter.</td>
                    <td>It can be written in both lowercase and uppercase letters.</td>
                </tr>
                <tr>
                    <td>Its meaning is pre-defined in the c compiler.</td>
                    <td>Its meaning is not defined in the c compiler.</td>
                </tr>
                <tr>
                    <td>It is a combination of alphabetical characters.</td>
                    <td>It is a combination of alphanumeric characters.</td>
                </tr>
                <tr>
                    <td>It does not contain the underscore character.</td>
                    <td>It can contain the underscore character.</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <div class="mb-2">
            <a href="c-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="c-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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