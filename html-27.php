<?php

    $sub="html";
    $pag="27";

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

    <title>HTML File Paths</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML File Paths</h1>
        <div>
            <a href="html-26.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-28.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML File Paths</h3>
        <p>
            An HTML file path is used to describe the location of a file in a website folder. File paths are like an address of file for a web browser. We can link any external resource to add in our HTML file with the help of file paths such as images, file, CSS file, JS file, video, etc.<br>
            The src or href attribute requires an attribute to link any external source to HTML file<br>
            Following are the different types to specify file paths:
        </p>
        <ol>
            <li><strong>&lt;img src="picture.jpg"&gt; </strong> It specifies that picture.jpg is located in the same folder as the current page.</li>
            <li><strong>&lt;img src="images/picture.jpg"&gt; </strong> It specifies that picture.jpg is located in the images folder in the current folder.</li>
            <li><strong>&lt;img src="/images/picture.jpg"&gt; </strong> It specifies that picture.jpg is located in the images folder at the root of the current web.</li>
            <li><strong>&lt;img src="../picture.jpg"&gt;</strong> It specifies that picture.jpg is located in the folder one level up from the current folder.</li>
        </ol>
        <p>File paths are used on webpages to link external files like:</p>
        <ol>
            <li>Web pages</li>
            <li>Images</li>
            <li>Style sheets</li>
            <li>JavaScript</li>
        </ol>
        <p>There are two types of File Paths:</p>
        <ol>
            <li>Absolute File Paths</li>
            <li>Relative File Paths</li>
        </ol>
        <h3>Absolute File Paths</h3>
        <p>Absolute file path specifies full URL address.</p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Using a Full URL File Path&lt;/h2&gt;  
        &lt;img src="https://www.ind-learning.com/images/nature-1.jpg" alt="image" style="width:300px"&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h3>Relative File Paths</h3>
        <p>The relative file path specifies to a file which is related to the location of current page.</p>
        <h5>Example :</h5>
        <p>Let's take an example to see how the file path points to a file in the images folder located at the root of the current web.</p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Using a Relative File Path&lt;/h2&gt;  
        &lt;img src="/images/nature-2.jpg" alt="Mountain" style="width:300px"&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Example :</h5>
        <p>This is how a file path points to a file in the images folder located in the current folder.</p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Using a Relative File Path&lt;/h2&gt;  
        &lt;img src="/images/nature-4.jpg" alt="Mountain" style="width:300px"&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Example :</h5>
        <p>When the images folder located in the folder one level above the current folder.</p>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Using a Relative File Path&lt;/h2&gt;  
        &lt;img src="/images/nature-5.jpg" alt="Mountain" style="width:300px"&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h3>Important Points for File path:</h3>
        <ul>
            <li>Always remember to use proper URL, file name, image name, else it will not display on the webpage. </li>
            <li>Try to use relative file paths, so that your code will be independent of URL.</li>
        </ul>
        <hr>

        <div class="mb-2">
            <a href="html-26.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-28.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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