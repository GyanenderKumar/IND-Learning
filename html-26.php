<?php

    $sub="html";
    $pag="26";

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

    <title>HTML JavaScript</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML JavaScript</h1>
        <div>
            <a href="html-25.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-27.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML Comments</h3>
        <p>
            Comments are some text or code written in your code to give an explanation about the code, and not visible to the user. Comments which are used for HTML file are known as HTML comments. Anything written between these tags will be ignored by the browser, so comments will not be visible on the webpage.<br>
            Comments of any code make code easy to understand and increase readability of code.<br>
            Comments are also part of the code, which gives an explanation of the code.
        </p>
        <h3>How to add comment In HTML</h3>
        <p>
            You can add comments in your HTML file using &lt;! -- ... --&gt; tag. So if you will write anything between theses comment tag that will be treated as comment and browser will not read it.
        </p>
        <h5>Syntax</h5>
        <pre class="jumbotron">
        &lt;! -- Write commented text here --&gt;  </pre>
        such as:
        <pre class="jumbotron">
        &lt;!--   &lt;p&gt;There is some text&lt;/p&gt;  
        &lt;p>There is second text&lt;/p&gt; --&gt;  </pre>
        <hr>
        <h3>Multiline Comment</h3>
        In HTML code, we can also comments multiple lines at a time. In multiline comment we can use any description about code or multiple line code to debug, etc.
        <h5>Syntax</h5>
        <pre class="jumbotron">
        &lt;!---  
        Your code is commented.   
        Write description of code.  
        It will not display at webpage.   
        --&gt;   </pre>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;h2&gt;Cake Gallery&lt;/h2&gt;  
        &lt;!-- This is image for a yummy cake  
        you can see it on your web-page  
        of your favorite browser --&gt;  
        &lt;img src="cake.png" alt="cake image" height="300px" width="300px"&gt;</pre>
        <h5>Output :</h5>
        <img src="images/cake.png" alt="cake"><br>
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
                <td>&lt;!-- --&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-25.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-27.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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