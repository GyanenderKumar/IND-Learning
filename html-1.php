<?php

    $sub="html";
    $pag="1";

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

    <title>HTML Introduction</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Introduction</h1>
        <div>
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>What is HTML?</h3>
        <p>
            HTML is an acronym which stands for Hyper Text Markup Language which is used for creating web pages and web
            applications. Let's see what is meant by Hypertext Markup Language, and Web page.
            <br>
            <b>Hyper Text:</b> HyperText simply means "Text within Text." A text has a link within it, is a hypertext.
            Whenever you click on a link which brings you to a new webpage, you have clicked on a hypertext. HyperText
            is a way to link two or more web pages (HTML documents) with each other.
            <br>
            <b>Markup language:</b> A markup language is a computer language that is used to apply layout and formatting
            conventions to a text document. Markup language makes text more interactive and dynamic. It can turn text
            into images, tables, links, etc.
            <br>
            <b>Web Page:</b> A web page is a document which is commonly written in HTML and translated by a web browser.
            A web page can be identified by entering an URL. A Web page can be of the static or dynamic type. <b>With
                the help of HTML only, we can create static web pages.</b>
            <br>
            Hence, HTML is a markup language which is used for creating attractive web pages with the help of styling,
            and which looks in a nice format on a web browser. An HTML document is made of many HTML tags and each HTML
            tag contains different content.
            <br>
            <br>
            <b>The major points of HTML are given below:</b>
        </p>
        <ul>
            <li>
                HTML stands for HyperText Markup Language
            </li>
            <li>
                HTML is used to create web pages and web applications.
            </li>
            <li>
                HTML is widely used language on the web.
            </li>
            <li>
                We can create a static website by HTML only.
            </li>
            <li>
                Technically, HTML is a Markup language rather than a programming language.
            </li>
        </ul>
        <h5>Example</h5>
        <pre class="jumbotron"><b>
            &lt;!DOCTYPE&gt;
            &lt;html&gt;  
                &lt;head&gt;  
                    &lt;title&gt;Web page title&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1&gt;Write Your First Heading&lt;/h1&gt;  
                    &lt;p&gt;Write Your First Paragraph.&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;</b>
        </pre>

        <hr>
        <h3>Description of HTML Example</h3>
        <p>
            <b>&lt;!DOCTYPE&gt; :</b> It defines the document type or it instruct the browser about the version of HTML.
            <br>
            <b>&lt;html&gt; :</b> This tag informs the browser that it is an HTML document. Text between html tag
            describes the web document. It is a container for all other elements of HTML except &lt;!DOCTYPE&gt;
            <br>
            <b>&lt;head&gt; :</b> It should be the first element inside the &lt;html&gt; element, which contains the
            metadata(information about the document). It must be closed before the body tag opens.
            <br>
            <b>&lt;title&gt; :</b> As its name suggested, it is used to add title of that HTML page which appears at the
            top of the browser window. It must be placed inside the head tag and should close immediately.
            <br>
            <b>&lt;body&gt; :</b> Text between body tag describes the body content of the page that is visible to the
            end user. This tag contains the main content of the HTML document.
            <br>
            <b>&lt;h1&gt; :</b> Text between &lt;h1&gt; tag describes the first level heading of the webpage.
            <br>
            <b>&lt;p&gt; :</b> Text between &lt;p&gt; tag describes the paragraph of the webpage.
        </p>


        <hr>
        <h3>Brief History of HTML</h3>
        <p>In the late 1980's , a physicist, <b>Tim Berners-Lee</b> who was a contractor at CERN, proposed a system for
            CERN researchers. In 1989, he wrote a memo proposing an internet based hypertext system.
            <br>
            <b>Tim Berners-Lee</b> is known as the father of <b>HTML</b>. The first available description of HTML was a
            document called "HTML Tags" proposed by Tim in late 1991. The latest version of HTML is HTML5, which we will
            learn later in this tutorial.
        </p>


        <hr>
        <h3>HTML Versions</h3>
        <p>
            Since the time HTML was invented there are lots of HTML versions in market, the brief introduction about the
            HTML version is given below:
            <br>
            <b>HTML 1.0 :</b> The first version of HTML was 1.0, which was the barebones version of HTML language, and
            it was released in1991.
            <br>
            <b>HTML 2.0 :</b> This was the next version which was released in 1995, and it was standard language version
            for website design. HTML 2.0 was able to support extra features such as form-based file upload, form
            elements such as text box, option button, etc.
            <br>
            <b>HTML 3.2 :</b> HTML 3.2 version was published by W3C in early 1997. This version was capable of creating
            tables and providing support for extra options for form elements. It can also support a web page with
            complex mathematical equations. It became an official standard for any browser till January 1997. Today it
            is practically supported by most of the browsers.
            <br>
            <b>HTML 4.01 :</b> HTML 4.01 version was released on December 1999, and it is a very stable version of HTML
            language. This version is the current official standard, and it provides added support for stylesheets (CSS)
            and scripting ability for various multimedia elements.
            <br>
            <b>HTML5 :</b> HTML5 is the newest version of HyperText Markup language. The first draft of this version was
            announced in January 2008. There are two major organizations one is W3C (World Wide Web Consortium), and
            another one is WHATWG( Web Hypertext Application Technology Working Group) which are involved in the
            development of HTML 5 version, and still, it is under development.
        </p>

        <hr>
        <h3>Features of HTML</h3>
        <ol>
            <li>
                It is a very <b>easy and simple language</b>. It can be easily understood and modified.
            </li>
            <li>
                It is very easy to make an <b>effective presentation</b> with HTML because it has a lot of formatting
                tags.
            </li>
            <li>
                It is a <b>markup language</b>, so it provides a flexible way to design web pages along with the text.
            </li>
            <li>
                It facilitates programmers to add a <b>link</b> on the web pages (by html anchor tag), so it enhances
                the interest of browsing of the user.
            </li>
            <li>
                It is <b>platform-independent</b> because it can be displayed on any platform like Windows, Linux, and
                Macintosh, etc.
            </li>
            <li>
                It facilitates the programmer to add <b>Graphics, Videos, and Sound</b> to the web pages which makes it
                more attractive and interactive.
            </li>
            <li>
                HTML is a case-insensitive language, which means we can use tags either in lower-case or upper-case.
            </li>
        </ol>


        <hr>
        <div class="mb-2">
            <a href="/ind-learning/index.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-2.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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