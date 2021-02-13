<?php

    $sub="html";
    $pag="5";

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

    <title>HTML Attribute</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Attribute</h1>
        <div>
            <a href="html-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Attribute</h3>
        <ul>
            <li>
                HTML attributes are special words which provide additional information about the elements or attributes
                are the modifier of the HTML element.
            </li>
            <li>
                Each element or tag can have attributes, which defines the behaviour of that element.
            </li>
            <li>
                Attributes should always be applied with start tag.
            </li>
            <li>
                The Attribute should always be applied with its name and value pair.
            </li>
            <li>
                The Attributes name and values are case sensitive, and it is recommended by W3C that it should be
                written in Lowercase only.
            </li>
            <li>
                You can add multiple attributes in one HTML element, but need to give space between two attributes.
            </li>
        </ul>

        <h5>Syntax</h5>
        <pre class="jumbotron">
            &lt;element attribute_name="value"&gt;content&lt;/element&gt;</pre>


        <h5>Example</h5>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;  
                &lt;head&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1&gt; This is Style attribute&lt;/h1&gt;  
                    &lt;p style="height: 50px; color: blue"&gt;It will add style property in element&lt;/p&gt;  
                    &lt;p style="color: red"&gt;It will change the color of content&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;</pre>


        <img src="images/html-attribute.png" alt="html-attribute">



        <h5>Explanation of above example:</h5>


        <pre class="jumbotron">
            &lt;p style="height: 50px; color: blue"&gt;It will add style property in element&lt;/p&gt;</pre>

        <p>
            In the above statement, we have used paragraph tags in which we have applied style attribute. This attribute
            is used for applying CSS property on any HTML element. It provides height to paragraph element of 50px and
            turns it colour to blue.
        </p>

        <pre class="jumbotron">
            &lt;p style="color: red"&gt;It will change the color of content&lt;/p&gt;</pre>

        <p>
            In the above statement we have again used style attribute in paragraph tag, which turns its colour red.
        </p>

        <hr>
        <h3>The title attribute in HTML</h3>
        <p>
            <b>Description :</b> The title attribute is used as text tooltip in most of the browsers. It display its
            text when user move the cursor over a link or any text. You can use it with any text or link to show the
            description about that link or text. In our example, we are taking this with paragraph tag and heading tag.
        </p>
        <h3>Example</h3>
        <b>With link address :</b>
        <pre class="jumbotron">
            &lt;a href="https://www.ind-learning.com/html-anchor"&gt;This is a link&lt;/a&gt;</pre>
        <b>Without link address :</b>
        <pre class="jumbotron">
            &lt;a href=""&gt;This is a link&lt;/a&gt;</pre>
        <img src="images/html-href-attribute.png" alt="html-href-attribute" />
        <hr>
        <h3>The src Attribute</h3>
        <p>
            The <b>src</b> attribute is one of the important and required attribute of <img> element. It is source for
            the image which is required to display on browser. This attribute can contain image in same directory or
            another directory. The image name or source should be correct else browser will not display the image.
        </p>
        <h3>Example</h3>
        <pre class="jumbotron">
            &lt;img src="whitepeacock.jpg" height="400" width="600"&gt;</pre>
        <h5>Output</h5>
        <img src="images/html-src-attribute.png" alt="html-src-attribute">
        <hr>
        <h3>Quotes: single quotes or double quotes?</h3>
        <p>
            In this chapter you have seen that, we have used attribute with double quotes, but some people might use
            single quotes in HTML. So use of single quotes with HTML attribute, is also allowed. The following both
            statements are absolutely fine.
        </p>
        <pre class="jumbotron">
            &lt;a href="https://www.ind-learning.com"&gt;A link to HTML.&lt;/a&gt;  
            &lt;a href='https://www.ind-learning.com'&gt;A link to HTML.&lt;/a&gt;</pre>
        <p>
            IN HTML5, you can also omit use of quotes around attribute values.
        </p>
        <pre class="jumbotron">
            &lt;a href=https://www.ind-learning.com&gt;A link to HTML.&lt;/a&gt;</pre>



        
        <hr>
        <div class="mb-2">
            <a href="html-4.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-6.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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