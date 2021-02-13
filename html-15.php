<?php

    $sub="html";
    $pag="15";

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

    <title>HTML Ordered Lists</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Ordered Lists</h1>
        <div>
            <a href="html-14.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-16.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Ordered Lists</h3>
        <p>
            HTML Ordered List or Numbered List displays elements in numbered format. The HTML ol tag is used for ordered
            list. We can use ordered list to represent items either in numerical order format or alphabetical order
            format, or any format where an order is emphasized. There can be different types of numbered list:
        </p>
        <ol>
            <li>
                Numeric Number (1, 2, 3)
            </li>
            <li>
                Capital Roman Number (I II III)
            </li>
            <li>
                Small Romal Number (i ii iii)
            </li>
            <li>
                Capital Alphabet (A B C)
            </li>
            <li>
                Small Alphabet (a b c)
            </li>
        </ol>
        To represent different ordered lists, there are 5 types of attributes in &lt;ol&gt; tag.
        <table class="table table-striped">
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>Type "1"</td>
                <td>This is the default type. In this type, the list items are numbered with numbers.</td>
            </tr>
            <tr>
                <td>Type "I"</td>
                <td>In this type, the list items are numbered with upper case roman numbers.</td>
            </tr>
            <tr>
                <td>Type "i"</td>
                <td>In this type, the list items are numbered with lower case roman numbers.</td>
            </tr>
            <tr>
                <td>Type "A"</td>
                <td>In this type, the list items are numbered with upper case letters.</td>
            </tr>
            <tr>
                <td>Type "a"</td>
                <td>In this type, the list items are numbered with lower case letters.</td>
            </tr>
        </table>
        <hr>
        <h3>HTML Ordered List Example</h3>
        Let's see the example of HTML ordered list that displays 4 topics in numbered list. Here we are not defining
        type="1" because it is the default type.
        <pre class="jumbotron">
        &lt;ol&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol>
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>ol type="I"</h3>
        Let's see the example to display list in roman number uppercase.
        <pre class="jumbotron">
        &lt;ol type="I"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol type="I">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>ol type="i"</h3>
        Let's see the example to display list in roman number lowercase.
        <pre class="jumbotron">
        &lt;ol type="i"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
         &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol type="i">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>ol type="A"</h3>
        Let's see the example to display list in alphabet uppercase.
        <pre class="jumbotron">
        &lt;ol type="A"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol type="A">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>ol type="a"</h3>
        Let's see the example to display list in alphabet lowercase.
        <pre class="jumbotron">
        &lt;ol type="a"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol type="a">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>start attribute</h3>
        <p>
            The start attribute is used with ol tag to specify from where to start the list items.<br><br>
            <b>&lt;ol type="1" start="5"&gt;</b> : It will show numeric values starting with "5".<br><br>
            <b>&lt;ol type="A" start="5"&gt;</b> : It will show capital alphabets starting with "E".<br><br>
            <b>&lt;ol type="a" start="5"&gt;</b> : It will show lower case alphabets starting with "e".<br><br>
            <b>&lt;ol type="I" start="5"&gt;</b> : It will show Roman upper case value starting with "V".<br><br>
            <b>&lt;ol type="i" start="5"&gt;</b> : It will show Roman lower case value starting with "v".
        </p>
        <pre class="jumbotron">
        &lt;ol type="a"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <ol type="a" start="5">
            <li>HTML</li>
            <li>Java</li>
            <li>JavaScript</li>
            <li>SQL</li>
        </ol>
        <hr>
        <h3>reversed Attribute:</h3>
        <p>
            This is a Boolean attribute of HTML &lt;ol&gt; tag, and it is new in HTML5 version. If you use the reversed
            attribute with<br>tag then it will numbered the list in descending order (7, 6, 5, 4......1).
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;ol type="a"&gt;  
            &lt;li&gt;HTML&lt;/li&gt;  
            &lt;li&gt;Java&lt;/li&gt;  
            &lt;li&gt;JavaScript&lt;/li&gt;  
            &lt;li&gt;SQL&lt;/li&gt;  
        &lt;/ol&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-ordered-list-numbered-list.png" alt="html-ordered-list-numbered-list">
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
                <td>&lt;ol&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-14.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-16.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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