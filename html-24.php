<?php

    $sub="html";
    $pag="24";

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

    <title>HTML iframes</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML iframes</h1>
        <div>
            <a href="html-23.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-25.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML iframes</h3>
        <p>
            HTML Iframe is used to display a nested webpage (a webpage within a webpage). The HTML &lt;iframe&gt; tag
            defines an inline frame, hence it is also called as an Inline frame.<br>
            An HTML iframe embeds another document within the current HTML document in the rectangular region.<br>
            The webpage content and iframe contents can interact with each other using JavaScript.
        </p>
        <h3>Iframe Syntax</h3>
        An HTML iframe is defined with the &lt;iframe&gt; tag:
        <pre class="jumbotron">
        &lt;iframe src="URL"&gt;&lt;/iframe&gt; </pre>
        Here, "src" attribute specifies the web address (URL) of the inline frame page.
        <h3>Set Width and Height of iframe</h3>
        <p>
            You can set the width and height of iframe by using "width" and "height" attributes. By default, the
            attributes values are specified in pixels but you can also set them in percent. i.e. 50%, 60% etc.
        </p>
        <h5>Example: (Pixels)</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;body&gt;    
        &lt;h2&gt;HTML Iframes example&lt;/h2&gt;    
        &lt;p&gt;Use the height and width attributes to specify the size of the iframe:&lt;/p&gt;    
        &lt;iframe src="https://www.ind-learning.com/" height="300" width="400"&gt;&lt;/iframe&gt;    
        &lt;/body&gt;   
        &lt;/html&gt; </pre><br>
        <h5>Example: (Percentage)</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;body&gt;    
        &lt;h2&gt;HTML Iframes&lt;/h2&gt;    
        &lt;p&gt;You can use the height and width attributes to specify the size of the iframe:&lt;/p&gt;    
        &lt;iframe src="https://www.ind-learning.com/" height="50%" width="70%"&gt;&lt;/iframe&gt;    
        &lt;/body&gt;     
        &lt;/html&gt; </pre>
        You can also use CSS to set the height and width of the iframe.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;body&gt;    
        &lt;h2&gt;HTML Iframes&lt;/h2&gt;    
        &lt;p&gt;Use the CSS height and width properties to specify the size of the iframe:&lt;/p&gt;    
        &lt;iframe src="https://www.ind-learning.com/" style="height:300px;width:400px"&gt;&lt;/iframe&gt;    
        &lt;/body&gt;    
        &lt;/html&gt; </pre>
        <hr>
        <h3>Remove the border of iframe</h3>
        By default, an iframe contains a border around it. You can remove the border by using &lt;style&gt; attribute
        and CSS border property.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;body&gt;    
        &lt;h2&gt;Remove the Iframe Border&lt;/h2&gt;    
        &lt;p&gt;This iframe example doesn't have any border&lt;/p&gt;     
        &lt;iframe src="https://www.ind-learning.com/" style="border:none;"&gt;&lt;/iframe&gt;    
        &lt;/body&gt;    
        &lt;/html&gt;</pre>
        You can also change the size, color, style of the iframe's border.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;body&gt;    
        &lt;h2&gt;Custom Iframe Border&lt;/h2&gt;    
        &lt;iframe src="https://www.ind-learning.com/" style="border:2px solid tomato;"&gt;&lt;/iframe&gt;    
        &lt;/body&gt;    
        &lt;/html&gt; </pre>
        <hr>
        <h3>Iframe Target for a link</h3>
        <p>
            You can set a target frame for a link by using iframe. Your specified target attribute of the link must
            refer to the name attribute of the iframe.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;   
        &lt;h2&gt;Iframe - Target for a Link&lt;/h2&gt;  
        &lt;iframe height="300px" width="100%" src="new.html" name="iframe_a"&gt;&lt;/iframe&gt;  
        &lt;p&gt;&lt;a href="https://www.ind-learning.com" target="iframe_a"&gt;I-Learning.com&lt;/a&gt;&lt;/p&gt;  
        &lt;p&gt;The name of iframe and link target must have same value else link will not open as a frame. &lt;/p&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-iframes.png" alt="html-iframes">
        <h5>new.hmtl output code:</h5>
        <img src="images/html-output.png" alt="html-output">
        <hr>
        <h3>Attributes of &lt;iframe&gt;</h3>
        <table class="table table-striped">
            <tr>
                <th>Attribute name</th>
                <th>Value</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>allowfullscreen</td>
                <td></td>
                <td>If true then that frame can be opened in full screen.</td>
            </tr>
            <tr>
                <td>height</td>
                <td>Pixels</td>
                <td>It defines the height of the embedded iframe, and the default height is 150 px.</td>
            </tr>
            <tr>
                <td>name</td>
                <td>text</td>
                <td>It gives the name to the iframe. The name attribute is important if you want to create a link in one
                    frame.</td>
            </tr>
            <tr>
                <td>frameborder</td>
                <td>1 or 0 </td>
                <td>It defines whether iframe should have a border or not. (Not supported in HTML5).</td>
            </tr>
            <tr>
                <td>Width</td>
                <td>Pixels</td>
                <td>It defines the width of embedded frame, and default width is 300 px.</td>
            </tr>
            <tr>
                <td>src</td>
                <td>URL</td>
                <td>The src attribute is used to give the path name or file name which content to be loaded into iframe.
                </td>
            </tr>
            <tr>
                <td rowspan="6">sandbox</td>
            </tr>
            <tr>
                <td></td>
                <td>This attribute is used to apply extra restrictions for the content of the frame</td>
            </tr>
            <tr>
                <td>allow-forms </td>
                <td>It allows submission of the form if this keyword is not used then form submission is blocked.</td>
            </tr>
            <tr>
                <td>allow-popups</td>
                <td>It will enable popups, and if not applied then no popup will open.</td>
            </tr>
            <tr>
                <td>allow-scripts</td>
                <td>It will enable the script to run.</td>
            </tr>
            <tr>
                <td>allow-same-origin</td>
                <td>If this keyword is used then the embedded resource will be treated as downloaded from the same
                    source.</td>
            </tr>
            <tr>
                <td>srcdoc</td>
                <td></td>
                <td>The srcdoc attribute is used to show the HTML content in the inline iframe. It overrides the src
                    attribute (if a browser supports).</td>
            </tr>
            <tr>
                <td rowspan="5">scrolling</td>
            </tr>
            <tr>
                <td></td>
                <td>It indicates that browser should provide a scroll bar for the iframe or not. (Not supported in
                    HTML5)</td>
            </tr>
            <tr>
                <td>auto</td>
                <td>Scrollbar only shows if the content of iframe is larger than its dimensions. </td>
            </tr>
            <tr>
                <td>yes </td>
                <td>Always shows scroll bar for the iframe.</td>
            </tr>
            <tr>
                <td>no</td>
                <td>Never shows scrollbar for the iframe.</td>
            </tr>
        </table>
        <hr>


        <div class="mb-2">
            <a href="html-23.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-25.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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