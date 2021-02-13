<?php

    $sub="html";
    $pag="12";

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

    <title>HTML Image</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Image</h1>
        <div>
            <a href="html-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Image</h3>
        <p>
            <b>HTML img tag</b> is used to display image on the web page. HTML img tag is an empty tag that contains
            attributes only, closing tags are not used in HTML image element.<br>
            Let's see an example of HTML image.
        </p>
        <pre class="jumbotron">
            &lt;h2&gt;HTML Image Example&lt;/h2&gt;  
            &lt;img src="good_morning.jpg" alt="Good Morning Friends"/&gt; </pre>
        <h5>Output :</h5>
        <img src="images/good-morning.jpg" alt="good-morning">
        <hr>
        <h3>Attributes of HTML img tag</h3>
        The src and alt are important attributes of HTML img tag. All attributes of HTML image tag are given below.
        <h5>1) src</h5>
        <p>
            It is a necessary attribute that describes the source or path of the image. It instructs the browser where
            to look for the image on the server.<br>
            The location of image may be on the same directory or another server.
        </p>
        <h5>2) alt</h5>
        <p>
            The alt attribute defines an alternate text for the image, if it can't be displayed. The value of the alt
            attribute describe the image in words. The alt attribute is considered good for SEO prospective.
        </p>
        <h5>3) width</h5>
        <p>
            It is an optional attribute which is used to specify the width to display the image. It is not recommended
            now. You should apply CSS in place of width attribute.
        </p>
        <h5>4) height</h5>
        <p>
            It h3 the height of the image. The HTML height attribute also supports iframe, image and object elements. It
            is not recommended now. You should apply CSS in place of height attribute.
        </p>
        <hr>
        <h3>Use of height and width attribute with img tag</h3>
        <p>
            You have learnt about how to insert an image in your web page, now if we want to give some height and width
            to display image according to our requirement, then we can set it with height and width attributes of image.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;img src="animal.jpg" height="180" width="300" alt="animal image"&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-image.png" alt="html-image">
        <hr>
        <h3>Use of alt attribute</h3>
        <p>
            We can use alt attribute with tag. It will display an alternative text in case if image cannot be displayed
            on browser. Following is the example for alt attribute:
        </p>
        <pre class="jumbotron">
            &lt;img src="animal.png" height="180" width="300" alt="animal image"&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-image.png" alt="animal image"> </pre>
        <hr>
        <h3>How to get image from another directory/folder?</h3>
        <pre class="jumbotron">
            &lt;img src="E:/images/animal.png" height="180" width="300" alt="animal image"&gt;  </pre>
        <p>
            In above statement we have put image in local disk E------>images folder------>animal.png.
        </p>
        <hr>
        <h3>Use &lt;img&gt; tag as a link</h3>
        <p>
            We can also link an image with other page or we can use an image as a link. To do this, put &lt;img&gt; tag
            inside the &lt;a&gt; tag.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;a href="https://www.ind-learning.com/what-is-robotics"&gt;&lt;img src="robot.jpg" height="100" width="100"&gt;&lt;/a&gt; </pre>
        <h5>Output :</h5>
        <img src="images/robot.jpg" alt="robot">
        <hr>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr style="text-align: center;">
                <th>Element</th>
                <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
            </tr>
            <tr style="text-align: center;">
                <td>&lt;img&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-11.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-13.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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