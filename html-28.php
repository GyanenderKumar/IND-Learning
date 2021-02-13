<?php

    $sub="html";
    $pag="28";

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

    <title>HTML Head</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>






    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Head</h1>
        <div>
            <a href="html-27.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-29.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML Head</h3>
        <p>
            The HTML &lt;head&gt; element is used as a container for metadata (data about data). It is used between
            &lt;html&gt; tag and &lt;body&gt; tag.<br>
            The head of an HTML document is a part whose content is not displayed in the browser on page loading. It
            just contains metadata about the HTML document which specifies data about the HTML document.<br>
            An HTML head can contain lots of metadata information or can have very less or no information, it depends on
            our requirement. But head part has a crucial role an HTML document while creating a website.<br>
            Metadata defines the document title, character set, styles, links, scripts, and other meta information.<br>
            Following is a list of tags used in metadata:
        </p>
        <ul>
            <li>&lt;title&gt;</li>
            <li>&lt;style&gt;</li>
            <li>&lt;meta&gt;</li>
            <li>&lt;link&gt;</li>
            <li>&lt;script&gt;</li>
            <li>&lt;base&gt;</li>
        </ul>
        <h3>HTML &lt;title&gt; Element</h3>
        <p>
            The HTML &lt;title&gt; element is used to define the title of the document. It is used in all HTML/XHTML
            documents. The &lt;title&gt; element must be placed between &lt;head&gt; element, and one document can only
            have one title element.
        </p>
        <p>
            <strong>What does &lt;title&gt; element do?</strong>
        </p>
        <ol>
            <li>It defines a title in the browser tab.</li>
            <li>It provides a title for the page when it is added to favorites.</li>
            <li>It displays a title for the page in search engine results.</li>
        </ol>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;This Page Title&lt;/title&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;p&gt;The body's content is displayed in the browser window.&lt;/p&gt;
                &lt;p&gt;The content of the title element is displayed in the browser tab, in favorites and in search engine results.&lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>HTML &lt;style&gt; Element </h3>
        <p>The HTML &lt;style&gt; element is used to style the HTML page. The &lt;style&gt; element can have CSS
            properties for that HTML page only. If we want to apply CSS for multiple pages then we should use separate
            CSS file.</p>
        <p>
        <h5>Example:</h5>
        </p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;This is Page Title&lt;/title&gt;
                    &lt;style&gt;
                        body {background-color: pink;}
                        h1 {color: red;}    
                        p {color: blue;}
                    &lt;/style&gt;
            &lt;/head&gt;  
            &lt;body&gt;
                &lt;h1&gt;This is a Heading&lt;/h1&gt;
                &lt;p&gt;This is a paragraph.&lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>HTML &lt;link&gt; Element</h3>
        <p>The HTML &lt;link&gt; element is used to link an external style sheet to your webpage. The &lt;link&gt;
            element contains main two attributes which are "rel" and "href". The rel attribute indicates that it is a
            stylesheet, and href gives the path to that external file.</p>
        <p>
        <h5>Example:</h5>
        </p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;This is title&lt;/title&gt;
                &lt;link rel="stylesheet" href="style.css"&gt;
            &lt;/head&gt;
            &lt;body&gt;
                &lt;h2&gt;Web-page with external CSS&lt;/h2&gt;
                &lt;p&gt;This is looking a cool page&lt;/p&gt;
            &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>HTML &lt;meta&gt; Element </h3>
        <p>The HTML &lt;meta&gt; element is used to specify the character set, page description, keywords, authors and
            other metadata on the webpage.</p>
        <p>Metadata is mainly used by browsers, search engines, and other web services to rank your webpage better. </p>
        <p><strong>Let's see how to use metadata: </strong></p>
        <p><strong>To define a character set:</strong> </p>
        <pre class="jumbotron">
        &lt;meta charset="UTF-8"&gt;</pre>
        <p>The charset attribute specifies the character encoding. In this example we have set it to "UTF-8" which means
            it can handle to display any language.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;  
        &lt;/head&gt;
        &lt;body&gt;
        &lt;p&gt;This is written in English language&lt;span style="color: blue"&gt; welcome to I-Learning website&lt;/span&gt;&lt;/p&gt;
        &lt;p&gt;This is Spanish language &lt;span style="color: red"&gt;Bienvenido al sitio web de I-Learning&lt;/span&gt;&lt;/p&gt;
        &lt;/body&gt;
        &lt;/html&gt;</pre>
        <p>
        <h5>Output:</h5>
        </p>
        <img src="images/html-head.png" alt="html-head"><br>
        <h5>To define a description of your webpage:</h5>
        <pre class="jumbotron">
        &lt;meta name="description" content="Free Web tutorials"&gt;</pre>
        <p>If you give a meta description then it will be useful for the relevant search to perform by search engines.
        </p>
        <p><strong>To define keywords for search engines: </strong></p>
        <pre class="jumbotron">
        &lt;meta name="keywords" content="HTML, CSS, XML, JavaScript"&gt;</pre>
        <p><strong>Example of a web page without the viewport &lt;meta&gt; tag:</strong></p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;body&gt;

        &lt;p&gt;&lt;b&gt;To understand this example, you should open this page on a phone or a tablet.&lt;/b&gt;&lt;/p&gt;

        &lt;img src="image.jpg" alt="image" width="460" height="345"&gt;

        &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut 
        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel 
        eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu 
        feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
        zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis 
        eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat
        facer possim assum.
        &lt;/p&gt;

        &lt;/body&gt;
        &lt;/html&gt;</pre>
        <hr>

        <div class="mb-2">
            <a href="html-27.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-29.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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