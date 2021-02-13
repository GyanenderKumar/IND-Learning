<?php

    $sub="html";
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

    <title>Building blocks of HTML</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Building blocks of HTML section------------ -->
    <div class="container">
        <h1>Building blocks of HTML</h1>
        <div>
            <a href="html-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Building blocks of HTML</h3>
        <p>
            An HTML document consist of its basic building blocks which are:
            <ul>
                <li>
                    <b>Tags :</b> An HTML tag surrounds the content and apply meaning to it. It is written between &lt; and
                    &gt; brackets.
                </li>
                <li>
                    <b>Attribute :</b> An attribute in HTML provides extra information about the element, and it is applied
                    within the start tag. An HTML attribute contains two fields: name & value.
                </li>
            </ul>
        </p>


        <h3>Syntax</h3>
        <pre class="jumbotron">
            &lt;tag name attribute_name = "attr_value"&gt; content &lt;/ tag name &gt;</pre>
        <ul>
            <li>
                <b>Elements :</b> An HTML element is an individual component of an HTML file. In an HTML file,
                everything written within tags are termed as HTML elements.
            </li>
        </ul>
        <img src="images/html-building-blocks.png" alt="html-building-blocks" />


        <h3>Example</h3>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;title&gt; The basic building blocks of HTML &lt;title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h2&gt; The building blocks &lt;h2&gt;
                    &lt;p&gt; This is a paragraph tag &lt;p&gt;
                    &lt;p style="color: red"&gt; The style is attribute of paragraph tag &lt;p&gt;
                    &lt;span&gt; The element contains tag, attribute and content &lt;span&gt;
                &lt;body&gt;
            &lt;html&gt;</pre>


        <hr>
        <div class="mb-2">
            <a href="html-2.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-4.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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