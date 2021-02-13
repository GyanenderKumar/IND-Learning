<?php

    $sub="html";
    $pag="17";

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

    <title>HTML Description List</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Description List</h1>
        <div>
            <a href="html-16.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-18.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Description List </h3>
        <p>
            <b>HTML Description List</b> or Definition List displays elements in definition form like in dictionary. The
            &lt;dl&gt;, &lt;dt&gt; and &lt;dd&gt; tags are used to define description list.<br><br>
            The 3 HTML description list tags are given below:
        </p>
        <ol>
            <li>
                <b>&lt;dl&gt;</b> tag defines the description list.
            </li>
            <li>
                <b>&lt;dt&gt; tag</b> defines data term.
            </li>
            <li>
                <b>&lt;dd&gt; tag</b> defines data definition (description).
            </li>
        </ol>
        <pre class="jumbotron">
        &lt;dl&gt;  
            &lt;dt&gt;HTML&lt;/dt&gt;  
            &lt;dd&gt;is a markup language&lt;/dd&gt;  
            &lt;dt&gt;Java&lt;/dt&gt;  
            &lt;dd&gt;is a programming language and platform&lt;/dd&gt;  
            &lt;dt&gt;JavaScript&lt;/dt&gt;  
            &lt;dd&gt;is a scripting language&lt;/dd&gt;  
            &lt;dt&gt;SQL&lt;/dt&gt;  
            &lt;dd&gt;is a query language&lt;/dd&gt;   
        &lt;/dl&gt; </pre>
        <h5>Output :</h5>
        <dl>
            <dt>HTML</dt>
            <dd>is a markup language</dd>
            <dt>Java</dt>
            <dd>is a programming language and platform</dd>
            <dt>JavaScript</dt>
            <dd>is a scripting language</dd>
            <dt>SQL</dt>
            <dd>is a query language</dd>
        </dl>
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr align="center">
                <th>Element</th>
                <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
            </tr>
            <tr align="center">
                <td>&lt;dl&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-16.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-18.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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