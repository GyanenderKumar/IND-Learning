<?php

    $sub="html";
    $pag="9";

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

    <title>HTML Paragraph</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Paragraph</h1>
        <div>
            <a href="html-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Paragraph</h3>
        <p>
            HTML paragraph or HTML p tag is used to define a paragraph in a webpage. Let's take a simple example to see
            how it work. It is a notable point that a browser itself add an empty line before and after a paragraph. An
            HTML &lt;p&gt; tag indicates starting of new paragraph.
        </p>
        See this Example :
        <pre class="jumbotron">
            &lt;p&gt;This is first paragraph&lt;/p&gt;  
            &lt;p&gt;This is second paragraph&lt;/p&gt;  
            &lt;p&gt;This is third paragraph&lt;/p&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p>This is first paragraph.</p>  
            <p>This is second paragraph.</p>  
            <p>This is third paragraph.</p> </pre>
        <h3>Space inside HTML Paragraph</h3>
        If you put a lot of spaces inside the HTML p tag, browser removes extra spaces and extra line while displaying
        the page. The browser counts number of spaces and lines as a single one.
        <pre class="jumbotron">
            &lt;p&gt;  
            I am  
            going to provide  
            you a tutorial on HTML  
            and hope that it will  
            be very beneficial for you.  
            &lt;/p&gt;  
            &lt;p&gt;  
            Look, I put here a lot  
            of spaces                    but            I know, Browser will ignore it.  
            &lt;/p&gt;  
            &lt;p&gt;  
            You cannot determine the display of HTML&lt;/p&gt;  
            &lt;p&gt;because resized windows may create different result.  
            &lt;/p&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p> I am going to provide you a tutorial on HTML and hope that it will be very beneficial for you. </p>  
            <p> Look, I put here a lot of spaces but I know, Browser will ignore it.</p>  
            <p> You cannot determine the display of HTML</p>  
            <p> because resized windows may create different result.</p> </pre>
        <p>As you can see, all the extra lines and unnecessary spaces are removed by the browser.</p>
        <hr>
        <h3>How to Use &lt;br&gt; and &lt;hr&gt; tag with paragraph?</h3>
        <p>An HTML &lt;br&gt; tag is used for line break and it can be used with paragraph elements. Following is the
            example to show how to use &lt;br&gt; with &lt;p&gt; element.</p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt; Use of line break with pragraph tag&lt;/h2&gt;  
                &lt;p>&lt;br>Papa and mama, and baby and Dot,  
                &lt;br&gt;Willie and me?the whole of the lot  
                &lt;br&gt;Of us all went over in Bimberlie's sleigh,  
                &lt;br&gt;To grandmama's house on Christmas day.  
                &lt;/p&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-paragraph.png" alt="html-paragraph"><br>
        An HTML &lt;hr&gt; tag is used to apply a horizontal line between two statements or two paragraphs. Following is
        the example which is showing use of &lt;hr&gt; tag with paragraph.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt; Example to show a horizontal line with paragraphs&lt;/h2&gt;  
                &lt;p&gt; An HTML hr tag draw a horizontal line and separate two paragraphs with that line.&lt;hr&gt; it will start a new paragraph. &lt;/p&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-paragraph2.png" alt="html-paragraph2">
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr style="text-align: center;">
                <th>Element</th>
                <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
            </tr>
            <tr style="text-align: center;">
                <td>&lt;p&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>


        
        <hr>
        <div class="mb-2">
            <a href="html-8.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-10.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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