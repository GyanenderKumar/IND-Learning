<?php

    $sub="html";
    $pag="21";

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

    <title>HTML style using CSS</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML style using CSS</h1>
        <div>
            <a href="html-20.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-22.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML style using CSS</h3>
        <p>
            Let's suppose we have created our web page using a simple HTML code, and we want something which can present
            our page in a correct format, and visibly attractive. So to do this, we can style our web page with CSS
            (Cascading Stylesheet) properties.<br>
            CSS is used to apply the style in the web page which is made up of HTML elements. It describes the look of
            the webpage.<br>
            CSS provides various style properties such as background color, padding, margin, border-color, and many
            more, to style a webpage.<br>
            Each property in CSS has a name-value pair, and each property is separated by a semicolon (;).<br>
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;body style="text-align: center;"&gt;  
            &lt;h2 style="color: red;"&gt;Welcome to ind-learning&lt;/h2&gt;  
            &lt;p style="color: blue; font-size: 25px; font-style: italic ;"&gt;This is a great website to learn technologies in very simple way. &lt;/p&gt;  
        &lt;/body&gt; </pre>
        In the above example, we have used a style attribute to provide some styling format to our code.
        <h5>Output :</h5>
        
        <img src="images/css.png" alt="">

        <h3>Three ways to apply CSS</h3>
        To use CSS with HTML document, there are three ways:
        <ul>
            <li>
                <b>Inline CSS:</b> Define CSS properties using style attribute in the HTML elements.
            </li>
            <li>
                <b>Internal or Embedded CSS:</b> Define CSS using &lt;style&gt; tag in &lt;head&gt; section.
            </li>
            <li>
                <b>External CSS:</b> Define all CSS property in a separate .css file, and then include the file with
                HTML file using tag in section.
            </li>
        </ul>
        <hr>
        <h3>Inline CSS:</h3>
        <p>
            Inline CSS is used to apply CSS in a single element. It can apply style uniquely in each element.<br>
            To apply inline CSS, you need to use style attribute within HTML element. We can use as many properties as
            we want, but each property should be separated by a semicolon (;).
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;h3 style="color: red;  
        font-style: italic;  
        text-align: center;  
        font-size: 50px;  
        padding-top: 25px;"&gt;Learning HTML using Inline CSS&lt;/h3&gt;   </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
        <h3 style="color: red;  
        font-style: italic;  
        text-align: center;  
        font-size: 50px;  
        padding-top: 25px;">Learning HTML using Inline CSS</h3> </pre>
        <hr>
        <h3>Internal CSS:</h3>
        <p>
            An Internal stylesheets contains the CSS properties for a webpage in &lt;head&gt; section of HTML document.
            To use Internal CSS, we can use class and id attributes.<br>
            We can use internal CSS to apply a style for a single HTML page.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
                &lt;style&gt;  
                  /*Internal CSS using element name*/  
                        body{background-color:lavender;  
                         text-align: center;}  
                         h2{font-style: italic;  
                          font-size: 30px;  
                          color: #f08080;}  
                        p{font-size: 20px;}  
                    /*Internal CSS using class name*/  
                        .blue{color: blue;}  
                        .red{color: red;}  
                        .green{color: green;}  
                &lt;/style&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt;Learning HTML with internal CSS&lt;/h2&gt;  
                &lt;p class="blue"&gt;This is a blue color paragraph&lt;/p&gt;  
                &lt;p class="red"&gt;This is a red color paragraph&lt;/p>  
                &lt;p class="green"&gt;This is a green color paragraph&lt;/p&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/css.png" alt="css">
        <hr>
        <h3>External CSS:</h3>
        <p>
            An external CSS contains a separate CSS file which only contains style code using the class name, id name,
            tag name, etc. We can use this CSS file in any HTML file by including it in HTML file using &lt;link&gt;
            tag.<br>
            If we have multiple HTML pages for an application and which use similar CSS, then we can use external
            CSS.<br>
            There are two files need to create to apply external CSS<br>
            First, create the HTML file<br>
            Create a CSS file and save it using the .css extension (This file only will only contain the styling code.)
            <br>Link the CSS file in your HTML file using tag in header section of HTML document.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
                &lt;link rel="stylesheet" type="text/css" href="style.css"&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt;Learning HTML with External CSS&lt;/h2&gt;  
                &lt;p class="blue"&gt;This is a blue color paragraph&lt;/p&gt;  
                &lt;p class="red"&gt;This is a red color paragraph&lt;/p&gt;  
                &lt;p class="green"&gt;This is a green color paragraph&lt;/p&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>CSS file</h5>
        <pre class="jumbotron">
        body
        {
            background-color:lavender;
            text-align: center;
        }
        h2
        {
            font-style: italic;
            size: 30px;
            color: #f08080;
        }
        p
        {
            font-size: 20px;
        }
            
        .blue
        {
            color: blue;
        }
        .red
        {
            color: red;
        }
        .green
        {
            color: green;
        } </pre>
        <hr>
        <h3>Commonly used CSS properties:</h3>
        <table class="table table-striped">
            <tr align="center">
                <th>Properties-name</th>
                <th>Syntax</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>background-color</td>
                <td>background-color:red;</td>
                <td> It defines the background color of that element.</td>
            </tr>
            <tr>
                <td>color</td>
                <td>color: lightgreen;</td>
                <td>It defines the color of text of an element</td>
            </tr>
            <tr>
                <td>padding</td>
                <td>padding: 20px;</td>
                <td>It defines the space between content and the border.</td>
            </tr>
            <tr>
                <td>margin</td>
                <td>margin: 30px; margin-left:</td>
                <td>It creates space around an element.</td>
            </tr>
            <tr>
                <td>font-family</td>
                <td>font-family: cursive;</td>
                <td>Font-family defines a font for a particular element.</td>
            </tr>
            <tr>
                <td>Font-size</td>
                <td>font-size: 50px;</td>
                <td> Font-size defines a font size for a particular element.</td>
            </tr>
            <tr>
                <td>text-align</td>
                <td>text-align: left;</td>
                <td>It is used to align the text in a selected position.</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-20.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-22.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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