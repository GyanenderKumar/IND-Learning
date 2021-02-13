<?php

    $sub="html";
    $pag="8";

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

    <title>HTML Heading</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Heading</h1>
        <div>
            <a href="html-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Heading</h3>
        <p>
            A HTML heading or HTML h tag can be defined as a title or a subtitle which you want to display on the webpage. When you place the text within the heading tags &lt;h1&gt;.........&lt;/h1&gt;, it is displayed on the browser in the bold format and size of the text depends on the number of heading.<br>
            There are six different HTML headings which are defined with the &lt;h1&gt; to &lt;h6&gt; tags, from highest level h1 (main heading) to the least level h6 (least important heading).<br>
            h1 is the largest heading tag and h6 is the smallest one. So h1 is used for most important heading and h6 is used for least important.<br>
            <b>Headings in HTML helps the search engine to understand and index the structure of web page.</b>
        </p>
        See this Example
        <pre class="jumbotron">
            &lt;h1&gt;Heading no. 1&lt;/h1&gt;  
            &lt;h2&gt;Heading no. 2&lt;/h2&gt;  
            &lt;h3&gt;Heading no. 3&lt;/h3&gt;  
            &lt;h4&gt;Heading no. 4&lt;/h4&gt;  
            &lt;h5&gt;Heading no. 5&lt;/h5&gt;  
            &lt;h6&gt;Heading no. 6&lt;/h6&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <h1>Heading no. 1</h1>  
            <h2>Heading no. 2</h2>      
            <h3>Heading no. 3</h3>
            <h4>Heading no. 4</h4>  
            <h5>Heading no. 5</h5>  
            <h6>Heading no. 6</h6> </pre>
        <ul>
            <li>
                <b>HTML headings can also be used with nested elements. Following are different codes to display the way to use heading elements.</b>
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;  
                &lt;head&gt;  
                    &lt;title&gt;Heading elements&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1&gt;This is main heading of page. &lt;/h1&gt;  
                    &lt;p&gt;h1 is the most important heading, which is used to display the keyword of page &lt;/p&gt;  
                    &lt;h2&gt;This is first sub-heading&lt;/h2&gt;  
                    &lt;p&gt;h2 describes the first sub heading of page. &lt;/p&gt;  
                    &lt;h3&gt;This is Second sub-heading&lt;/h3&gt;  
                    &lt;p&gt;h3 describes the second sub heading of page.&lt;/p&gt;  
                    &lt;p&gt;We can use h1 to h6 tag to use the different sub-heading with their paragraphs if required.&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-heading.png" alt="html-heading">

        
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr style="text-align: center;"><th>Element</th><th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th><th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th><th><img src="images/ie_browser.png" alt="ie_browser">IE</th><th><img src="images/opera_browser.png" alt="opera_browser">Opera</th><th><img src="images/safari_browser.png" alt="safari_browser">safari</th></tr>
            <tr style="text-align: center;"><td>&lt;h1&gt; to &lt;h6&gt;</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td><td>Yes</td></tr>
        </table>
        
        

        <hr>
        <div class="mb-2">
            <a href="html-7.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-9.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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