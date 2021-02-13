<?php

    $sub="html";
    $pag="16";

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

    <title>HTML Unordered List</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>






    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Unordered List</h1>
        <div>
            <a href="html-15.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-17.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Unordered List</h3>
        <p>
            <b>HTML Unordered List</b> or Bulleted List displays elements in bulleted format . We can use unordered list
            where we do not need to display items in any particular order. The HTML ul tag is used for the unordered
            list. There can be 4 types of bulleted list:
        </p>
        <ul>
            <li>
                disc
            </li>
            <li>
                circle
            </li>
            <li>
                square
            </li>
            <li>
                none
            </li>
        </ul>
        To represent different ordered lists, there are 4 types of attributes in &lt;ul&gt; tag.
        <table class="table table-striped">
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Type "disc"</td>
                <td>This is the default style. In this style, the list items are marked with bullets. </td>
            </tr>
            <tr>
                <td>Type "circle"</td>
                <td>In this style, the list items are marked with circles.</td>
            </tr>
            <tr>
                <td>Type "square"</td>
                <td>In this style, the list items are marked with squares.</td>
            </tr>
            <tr>
                <td>Type "none"</td>
                <td>In this style, the list items are not marked .</td>
            </tr>
        </table>
        <hr>
        <h3>HTML Unodered List Example</h3>
        Let's see the example of HTML ordered list that displays 4 topics in numbered list. Here we are not defining
        type="1" because it is the default type.
        <pre class="jumbotron">
        &lt;ul&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ul&gt; </pre>
        <h5>Output :</h5>
        <ul>
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ul>
        <hr>
        <h3>ul type="circle"</h3>
        <pre class="jumbotron">
        &lt;ul type="circle"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ul&gt; </pre>
        <h5>Output :</h5>
        <ul type="circle">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ul>
        <hr>
        <h3>ul type="square"</h3>
        <pre class="jumbotron">
        &lt;ul type="square"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
         &lt;/ul&gt; </pre>
        <h5>Output :</h5>
        <ul type="square">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ul>
        <hr>
        <h3>ul type="none"</h3>
        <pre class="jumbotron">
        &lt;ul type="none"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ul&gt; </pre>
        <h5>Output :</h5>
        <ul type="none">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ul>
        <hr>
        <pre class="jumbotron">
        &lt;ul style="list-style-type: square;"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ul&gt; </pre>
        Code :
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt; 
        &lt;html&gt;  
            &lt;head&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt;The type attribute with CSS property&lt;/h2&gt;  
                &lt;ul style="list-style-type: square;"&gt;  
                    &lt;li&gt;HTML&lt;/li&gt;  
                    &lt;li&gt;Java&lt;/li&gt;  
                    &lt;li&gt;JavaScript&lt;/li&gt;  
                    &lt;li&gt;SQL&lt;/li&gt;  
                &lt;/ul&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-unordered-list-bulleted-list.png" alt="html-unordered-list-bulleted-list">
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
                <td>&lt;ul&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-15.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-17.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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