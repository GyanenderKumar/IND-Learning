<?php

    $sub="html";
    $pag="29";

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

    <title>HTML Layouts</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Layouts</h1>
        <div>
            <a href="html-28.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-30.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>HTML layouts provide a way to arrange web pages in well-mannered, well-structured, and in responsive form or
            we can say that HTML layout specifies a way in which the web pages can be arranged. Web-page layout works
            with arrangement of visual elements of an HTML document. </p>
        <p><strong>Web page</strong> layout is the most important part to keep in mind while creating a website so that
            our website can appear professional with the great look. You can also use CSS and JAVASCRIPT based
            frameworks for creating layouts for responsive and dynamic website designing.</p>
        <img src="images/html-layouts.png" alt="html-layouts"><br>
        <p>Every website has a specific layout to display content in a specific manner. </p>
        <p>Following are different HTML5 elements which are used to define the different parts of a webpage. </p>
        <ul>
            <li>&lt;header&gt;: It is used to define a header for a document or a section.</li>
            <li>&lt;nav&gt;: It is used to define a container for navigation links</li>
            <li>&lt;section&gt;: It is used to define a section in a document</li>
            <li>&lt;article&gt;: It is used to define an independent self-contained article</li>
            <li>&lt;aside&gt;: It is used to define content aside from the content (like a sidebar)</li>
            <li>&lt;footer&gt;: It is used to define a footer for a document or a section</li>
            <li>&lt;details&gt;: It is used to define additional details</li>
            <li>&lt;summary&gt;: It is used to define a heading for the &lt;details&gt; element</li>
        </ul>
        <h3>Description of various Layout elements</h3>
        <h4>HTML &lt;header&gt;</h4>
        <p>The &lt;header&gt; element is used to create header section of web pages. The header contains the
            introductory content, heading element, logo or icon for the webpage, and authorship information.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;header style="background-color: #303030;  height: 80px; width: 100%"&gt;
            &lt;h1 style="font-size: 30px; color: white;text-align: center; padding-top: 15px;"&gt;Welcome to     MyFirstWebpage&lt;/h1&gt;
        &lt;/header&gt;</pre>
        <h4>HTML &lt;nav&gt;</h4>
        <p>The &lt;nav&gt; elements is a container for the main block of navigation links. It can contain links for the
            same page or for other pages.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;nav style="background-color:#bcdeef;"&gt;
        &lt;h1 style="text-align: center;"&gt;Navgation Links&lt;/h1&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;a href="#"&gt;link1&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;link2&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;link3&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;link4&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/nav&gt; </pre>
        <hr>
        <h3>HTML &lt;section&gt;</h3>
        <p>HTML &lt;section&gt; elements represent a separate section of a web page which contains related element
            grouped together. It can contain: text, images, tables, videos, etc.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;section style="background-color:#ff7f50; width: 100%; border: 1px solid black;"&gt;
            &lt;h2&gt;Introduction to HTML&lt;/h2&gt;
            &lt;p&gt;HTML is a markup language which is used for creating attractive web pages with the help of styling, and which looks in a nice format on a web browser..&lt;/p&gt;
        &lt;/section&gt; </pre>
        <hr>
        <h3>HTML &lt;article&gt;</h3>
        <p>The HTML tag is used to contain a self-contained article such as big story, huge article, etc.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;article style="width: 100%; border:2px solid black; background-color: #fff0f5;"&gt;
            &lt;h2&gt;History of Computer&lt;/h2&gt;
            &lt;p&gt;Write your content here for the history of computer&lt;/p&gt;
        &lt;/article&gt;</pre>
        <hr>
        <h3>HTML &lt;aside&gt;</h3>
        <p>HTML &lt;aside&gt; define aside content related to primary content. The &lt;aside&gt; content must be related
            to the primary content. It can function as side bar for the main content of web page.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;aside style="background-color:#e6e6fa"&gt;
            &lt;h2&gt;Sidebar information&lt;/h2&gt;
            &lt;p&gt;This conatins information which will represent like a side bar for a webpage&lt;/p&gt;
        &lt;/aside&gt;</pre>
        <hr>
        <h3>HTML &lt;footer&gt;</h3>
        <p>HTML &lt;footer&gt; element defines the footer for that document or web page. It mostly contains information
            about author, copyright, other links, etc. </p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;footer style="background-color: #f0f8ff; width: 100%; text-align: center;"&gt;
            &lt;h3&gt;Footer Example&lt;/h3&gt;
            &lt;p&gt;© Copyright 2018-2020. &lt;/p&gt;
        &lt;/footer&gt;</pre>
        <hr>
        <h3>HTML &lt;details&gt;</h3>
        <p>HTML &lt;details&gt; element is used to add extra details about the web page and use can hide or show the
            details as per requirement.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;details style="background-color: #f5deb3"&gt;
            &lt;summary&gt;This is visible section: click to show other details&lt;/summary&gt;
            &lt;p&gt;This section only shows if user want to see it. &lt;/p&gt;
        &lt;/details&gt;</pre>
        <hr>
        <h3>HTML &lt;summary&gt;</h3>
        <p>HTML &lt;summary&gt; element is used with the &lt;details&gt; element in a web page. It is used as summary,
            captions about the content of &lt;details&gt; element.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;details&gt;
            &lt;summary&gt;HTML is acronym for?&lt;/summary&gt;
            &lt;p style="color: blue; font-size: 20px;"&gt;Hypertext Markup Language&lt;/p&gt;
        &lt;/details&gt;</pre>
        <hr>

        <div class="mb-2">
            <a href="html-28.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-30.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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