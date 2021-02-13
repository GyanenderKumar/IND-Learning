<?php

    $sub="html";
    $pag="14";

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

    <title>HTML Lists</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Lists</h1>
        <div>
            <a href="html-13.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-15.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Lists</h3>
        <p>
            HTML Lists are used to specify lists of information. All lists may contain one or more list elements. There
            are three different types of HTML lists:
        </p>
        <ol>
            <li>
                Ordered List or Numbered List (ol)
            </li>
            <li>
                Unordered List or Bulleted List (ul)
            </li>
            <li>
                Description List or Definition List (dl)
            </li>
        </ol>
        <hr>
        <h3>HTML Ordered List or Numbered List</h3>
        <p>
            In the ordered HTML lists, all the list items are marked with numbers by default. It is known as numbered
            list also. The ordered list starts with &lt;ol&gt; tag and the list items start with &lt;li&gt; tag.
        </p>
        <pre class="jumbotron">
        &lt;ol&gt;  
            &lt;li&gt;Aries&lt;/li&gt;  
            &lt;li&gt;Bingo&lt;/li&gt;  
            &lt;li&gt;Leo&lt;/li&gt;  
            &lt;li&gt;Oracle&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol>
            <li>Aries</li>
            <li>Bingo</li>
            <li>Leo</li>
            <li>Oracle</li>
        </ol>
        <hr>
        Click here for full details of HTML ordered list.<a href="html-15.php">HTML ordered list</a>
        <hr>
        <h3>HTML Unordered List or Bulleted List</h3>
        <p>
            In HTML Unordered list, all the list items are marked with bullets. It is also known as bulleted list also.
            The Unordered list starts with &lt;ul&gt; tag and list items start with the &lt;li&gt; tag.
        </p>
        <pre class="jumbotron">
        &lt;ul&gt;  
            &lt;li&gt;Aries&lt;/li&gt;  
            &lt;li&gt;Bingo&lt;/li&gt;  
            &lt;li&gt;Leo&lt;/li&gt;  
            &lt;li&gt;Oracle&lt;/li&gt;  
        &lt;/ul&gt; </pre>
        <h5>Output :</h5>
        <ul>
            <li>Aries</li>
            <li>Bingo</li>
            <li>Leo</li>
            <li>Oracle</li>
        </ul>
        <hr>
        Click here for full details of HTML unordered list.<a href="html-16.php">HTML unordered list</a>
        <hr>
        <h3>HTML Description List or Definition List</h3>
        <p>
            HTML Description list is also a list style which is supported by HTML and XHTML. It is also known as
            definition list where entries are listed like a dictionary or encyclopedia.<br><br>
            The definition list is very appropriate when you want to present glossary, list of terms or other name-value
            list.<br><br>
            The HTML definition list contains following three tags:
        </p>
        <ol>
            <li>
                <b>&lt;dl&gt; tag</b> defines the start of the list.
            </li>
            <li>
                <b>&lt;dt&gt; tag</b> defines a term.
            </li>
            <li>
                <b>&lt;dd&gt; tag</b> defines the term definition (description).
            </li>
        </ol>
        <pre class="jumbotron">
        &lt;dl&gt;  
            &lt;dt&gt;Aries&lt;/dt&gt;  
            &lt;dd&gt;-One of the 12 horoscope sign.&lt;/dd&gt;  
            &lt;dt&gt;Bingo&lt;/dt&gt;  
            &lt;dd&gt;-One of my evening snacks&lt;dd&gt;  
            &lt;dt&gt;Leo&lt;/dt&gt;  
            &lt;dd&gt;-It is also an one of the 12 horoscope sign.&lt;/dd&gt;  
            &lt;dt&gt;Oracle&lt;/dt&gt;  
            &lt;dd&gt;-It is a multinational technology corporation.&lt;/dd&gt;   
        &lt;dl&gt; </pre>
        <h5>Output :</h5>
        <dl>
            <dt>Aries</dt>
            <dd>-One of the 12 horoscope sign.</dd>
            <dt>Bingo</dt>
            <dd>-One of my evening snacks</dd>
            <dt>Leo</dt>
            <dd>-It is also an one of the 12 horoscope sign.</dd>
            <dt>Oracle</dt>
            <dd>-It is a multinational technology corporation.</dd>
        </dl>
        <hr>
        Click here for full details of HTML description list.<a href="html-17.php">HTML description list.</a>
        <hr>
        <h3>HTML Nested List</h3>
        <p>
            A list within another list is termed as nested list. If you want a bullet list inside a numbered list then
            such type of list will called as nested list.
        </p>
        Code :
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;
            &lt;head&gt;  
                &lt;title&gt;Nested list&lt;/title&gt;  
            &lt;/head&gt;
            &lt;body&gt;  
                &lt;p&gt;>List of Indian States with thier capital&lt;/p&gt;  
                &lt;ol&gt;  
                    &lt;li&gt;Delhi  
                        &lt;ul&gt;  
                            &lt;li&gt;NewDelhi&lt;/li&gt;  
                        &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;Haryana  
                        &lt;ul&gt;
                            &lt;li&gt;Chandigarh&lt;/li&gt;  
                        &lt;/ul&gt;  
                    &lt;/li&gt;  
                    &lt;li&gt;Gujarat  
                        &lt;ul&gt;  
                            &lt;li&gt;Gandhinagar&lt;/li&gt;  
                        &lt;/ul&gt;  
                    &lt;/li&gt;  
                    &lt;li&gt;Rajasthan   
                        &lt;ul&gt;  
                            &lt;li&gt;Jaipur&lt;/li&gt;  
                        &lt;/ul&gt;  
                    &lt;/li&gt;  
                    &lt;li&gt;Maharashtra  
                        &lt;ul&gt;  
                            &lt;li&gt;Mumbai&lt;/li&gt;  
                        &lt;/ul&gt;  
                    &lt;/li&gt;  
                    &lt;li&gt;Uttarpradesh  
                        &lt;ul&gt;  
                            &lt;li&gt;Lucknow&lt;/li&gt;
                        &lt;/ul&gt;  
                    &lt;/li&gt;  
                &lt;/ol&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-lists.png" alt="html-lists">
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
                <td>&lt;ol&gt;&lt;ul&gt;&lt;dl&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-13.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-15.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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