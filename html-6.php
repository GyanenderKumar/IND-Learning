<?php

    $sub="html";
    $pag="6";

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

    <title>HTML Elements</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Elements</h1>
        <div>
            <a href="html-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Elements</h3>
        <p>
            An HTML file is made of elements. These elements are responsible for creating web pages and define content
            in that webpage. An element in HTML usually consist of a start tag &lt;tag name&gt;, close tag &lt;/tag
            name&gt; and content inserted between them.<br>
            <b>Technically, an element is a collection of start tag, attributes, end tag, content between them.</b>
        </p>
        such as:
        <pre class="jumbotron">
            &lt;p&gt; Hello world!!! &lt;/p&gt;</pre>
        <h3>Example</h3>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;  
                &lt;head&gt;  
                    &lt;title&gt;WebPage&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1&gt;This is my first web page&lt;/h1&gt;  
                    &lt;h2&gt;How it looks?&lt;/h2&gt;  
                    &lt;p&gt;It looks Nice!!!!!&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;</pre>
        <img src="images/html-elements.png" alt="html-elements">
        <ul>
            <li>
                All the content written between body elements are visible on web page.
            </li>
        </ul>
        <p>
            <b>Void element :</b> All the elements in HTML do not require to have start tag and end tag, some elements
            does not have content and end tag such elements are known as Void elements or empty elements.<b> These
                elements are also called as unpaired tag.</b><br>
            <b>Some Void elements are &lt;br&gt; (represents a line break) , &lt;hr&gt;(represents a horizontal line),
                etc.
                <br>Nested HTML Elements :</b> HTML can be nested, which means an element can contain another element.
        </p>
        <hr>
        <h3>Block-level and Inline HTML elements</h3>
        For the default display and styling purpose in HTML, all the elements are divided into two categories:
        <ul>
            <li>
                Block-level element
            </li>
            <li>
                Inline element
            </li>
        </ul>
        <h3>Block-level element :</h3>
        <ul>
            <li>
                These are the elements, which structure main part of web page, by dividing a page into coherent blocks.
            </li>
            <li>
                A block-level element always start with new line and takes the full width of web page, from left to
                right.
            </li>
            <li>
                These elements can contain block-level as well as inline elements.
            </li>
        </ul>
        Following are the block-level elements in HTML.
        <p>
            &lt;address&gt;, &lt;article&gt;, &lt;aside&gt;, &lt;blockquote&gt;, &lt;canvas&gt;, &lt;dd&gt;,
            &lt;div&gt;, &lt;dl&gt;, &lt;dt&gt;, &lt;fieldset&gt;, &lt;figcaption&gt;, &lt;figure&gt;, &lt;footer&gt;,
            &lt;form&gt;, &lt;h1&gt;-&lt;h6&gt;, &lt;header&gt;, &lt;hr&gt;, &lt;li&gt;, &lt;main&gt;, &lt;nav&gt;,
            &lt;noscript&gt;, &lt;ol&gt;, &lt;output&gt;, &lt;p&gt;, &lt;pre&gt;, &lt;section&gt;, &lt;table&gt;,
            &lt;tfoot&gt;, &lt;ul&gt; and &lt;video&gt;&lt;/video&gt;
        </p>
        <h3>Example</h3>
        <pre class="jumbotron">
                &lt;!DOCTYPE html&gt;  
                &lt;html&gt;  
                    &lt;head&gt;  
                    &lt;/head&gt;  
                    &lt;body&gt;  
                        &lt;div style="background-color: lightblue"&gt;This is first div&lt;/div&gt;  
                        &lt;div style="background-color: lightgreen"&gt;This is second div&lt;/div&gt;  
                        &lt;p style="background-color: pink"&gt;This is a block level element&lt;/p&gt;  
                    &lt;/body&gt;  
                &lt;/html&gt;</pre>
        <h5>output :</h5>
        <img src="images/html-block-level-and-inline-elements.png" alt="html-block-level-and-inline-elements">
        <p>
            In the above example we have used tag, which defines a section in a web page, and takes full width of
            page.<br>
            We have used style attribute which is used to styling the HTML content, and the background color are showing
            that it's a block level element.
        </p>
        <hr>
        <h3>Inline elements :</h3>
        <ul>
            <li>
                Inline elements are those elements, which differentiate the part of a given text and provide it a
                particular function.
            </li>
            <li>
                These elements does not start with new line and take width as per requirement.
            </li>
            <li>
                The Inline elements are mostly used with other elements.
            </li>
        </ul>
        <p>
            &lt;a&gt;, &lt;abbr&gt;, &lt;acronym&gt;, &lt;b&gt;, &lt;bdo&gt;, &lt;big&gt;, &lt;br&gt;, &lt;button&gt;,
            &gt;cite&gt;, &lt;code&gt;, &lt;dfn&gt;, <em>, &lt;i&gt;, &lt;img&gt;, &lt;input&gt;, &lt;kbd&gt;,
                &lt;label&gt;, &lt;map&gt;, &lt;object&gt;, &lt;q&gt;, &lt;samp&gt;, &lt;script&gt;, &lt;select&gt;,
                &lt;small&gt;, &lt;span&gt;, &lt;strong&gt;, &lt;sub&gt;, &lt;sup&gt;, &lt;textarea&gt;, &lt;time&gt;,
                &lt;tt&gt;, &lt;var&gt;.
        </p>
        <h3>Example</h3>
        <pre class="jumbotron">
                    &lt;!DOCTYPE html&gt;  
                    &lt;html&gt;  
                        &lt;head&gt;  
                        &lt;/head&gt;  
                        &lt;body&gt;  
                            &lt;a href="https://www.ind-learning.com/html-tutorial"&gt;Click on link&lt;/a&gt;  
                            &lt;span style="background-color: lightblue"&gt;this is inline element&lt;/span&gt;  
                            &lt;p&gt;This will take width of text only&lt;/p&gt;  
                        &lt;/body&gt;  
                    &lt;/html&gt;</pre>
        <h5>output</h5>
        <img src="images/html-block-level-and-inline-elements2.png" alt="html-block-level-and-inline-elements2">
        <p>
            Following is the list of the some main elements used in HTML :
        </p>
        <table class="table table-striped">
            <tr align="center">
                <th>Start tag</th>
                <th>Content</th>
                <th>End tag</th>
                <th>Description</th>
            </tr>
            <tr align="center">
                <td>&lt;h1&gt;.....&lt;h6&gt;</td>
                <td>These are headings of HTML</td>
                <td>&lt;/h1&gt;??...&lt;/h6&gt;</td>
                <td>These elements are used to provide the headings of page.</td>
            </tr>
            <tr align="center">
                <td>&lt;p&gt;</td>
                <td>This is the paragraph</td>
                <td>&lt;/p&gt;</td>
                <td>This element is used to display a content in form of paragraph.</td>
            </tr>
            <tr align="center">
                <td>&lt;div&gt;</td>
                <td>This is div section</td>
                <td>&lt;/div&gt;</td>
                <td> This element is used to provide a section in web page.</td>
            </tr>
            <tr align="center">
                <td>&lt;br&gt;</td>
                <td> </td>
                <td> </td>
                <td>This element is used to provide a line break. ( void element)</td>
            </tr>
            <tr align="center">
                <td>&lt;hr&gt;</td>
                <td> </td>
                <td> </td>
                <td>This element is used to provide a horizontal line. (void element)</td>
            </tr>
        </table>
        <hr>
        <div class="mb-2">
            <a href="html-5.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-7.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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