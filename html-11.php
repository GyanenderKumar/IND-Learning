<?php

    $sub="html";
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

    <title>HTML Anchor</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Anchor</h1>
        <div>
            <a href="html-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Anchor</h3>
        <p>
            The <b>HTML anchor tag</b> defines a hyperlink that links one page to another page. It can create hyperlink
            to other web page as well as files, location, or any URL. The "href" attribute is the most important
            attribute of the HTML a tag. and which links to destination page or URL.
        </p>
        <h3>href attribute of HTML anchor tag</h3>
        <p>
            The href attribute is used to define the address of the file to be linked. In other words, it points out the
            destination page.<br>
            The syntax of HTML anchor tag is given below.
        </p>
        <pre class="jumbotron">
            &lt;a href = "..........."&gt; Link Text &lt;/a&gt;</pre>
        Let's see an example of HTML anchor tag.
        <pre class="jumbotron">
            &lt;a href="second.html"&gt;Click for Second Page&lt;/a&gt; </pre>
        <hr>
        <h3>Specify a location for Link using target attribute</h3>
        If we want to open that link to another page then we can use target attribute of &lt;a&gt; tag. With the help of
        this link will be open in next page.
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;
                &lt;head&gt;  
                    &lt;title&gt;&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;p&gt;Click on &lt;a href="https://www.ind-learning.com/" target="_blank"&gt; this-link &lt;/a&gt;to go on home page of JavaTpoint.&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-anchor.png" alt="html-anchor"><br>
        <b>Note :</b>
        <ul>
            <li>
                The <b>target</b> attribute can only use with href attribute in anchor tag.
            </li>
            <li>
                If we will not use target attribute then link will open in same page.
            </li>
        </ul>
        <hr>
        <h3>Appearance of HTML anchor tag</h3>
        <p>
            An <b>unvisited link</b> is displayed underlined and blue.<br>
            A <b>visited link</b> displayed underlined and purple.<br>
            An <b>active link</b> is underlined and red.
        </p>
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tbody>
                <tr style="text-align: center;">
                    <th>Element</th>
                    <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                    <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                    <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                    <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                    <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
                </tr>
                <tr style="text-align: center;">
                    <td>&lt;a&gt;</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
            </tbody>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-10.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-12.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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