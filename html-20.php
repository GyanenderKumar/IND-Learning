<?php

    $sub="html";
    $pag="20";

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

    <title>HTML form Attribute</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML form Attribute</h1>
        <div>
            <a href="html-19.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-21.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML form Attribute</h3>
        <h3>HTML &lt;form&gt; element attributes</h3>
        In HTML there are various attributes available for &lt;form&gt; element which are given below:
        <h3>HTML action attribute</h3>
        <p>
            The action attribute of &lt;form&gt; element defines the process to be performed on form when form is submitted, or it is a URI to process the form information.<br>
            The action attribute value defines the web page where information proceed. It can be .php, .jsp, .asp, etc. or any URL where you want to process your form.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form action="action.html" method="post"&gt;  
            &lt;label&gt;User Name:&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="name"&gt;&lt;br&gt;&lt;br&gt;  
            &lt;label&gt;User Password&lt;/label&gt;&lt;br&gt;  
            &lt;input type="password" name="pass"&gt;&lt;br&gt;&lt;br&gt;  
            &lt;input type="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/action.png" alt="action">
        <hr>
        <h3>HTML method attribute</h3>
        <p>
            The method attribute defines the HTTP method which browser used to submit the form. The possible values of method attribute can be:
        </p>
        <ul>
            <li>
                <b>post:</b> We can use the post value of method attribute when we want to process the sensitive data as it does not display the submitted data in URL.
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form action="action.html" method="post"&gt; </pre>
        <ul>
            <li>
                <b>get:</b> The get value of method attribute is default value while submitting the form. But this is not secure as it displays data in URL after submitting the form.
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form action="action.html" method="get"&gt; </pre>
        When submitting the data, it will display the entered data in the form of:
        <pre class="jumbotron">
        file:///D:/HTML/action.html?name=ind-learning&pass=123  </pre>
        <hr>
        <h3>HTML target attribute</h3>
        <p>
            The target attribute defines where to open the response after submitting the form. The following are the keywords used with the target attribute.
        </p>
        <ul>
            <li>
                <b>_self:</b> If we use _self as an attribute value, then the response will display in current page only.
            </li>
        </ul>
        <pre class="jumbotron">
            &lt;form action="action.html" method="get" target="_self"&gt; </pre>
        <ul>
            <li>
                <b>_blank:</b> If we use _blank as an attribute it will load the response in a new page.
            </li>
        </ul>
        <pre class="jumbotron">
            &lt;form action="action.html" method="get" target="_blank"&gt; </pre>
        <hr>
        <h3>HTML autocomplete attribute</h3>
        <p>
            The HTML autocomplete attribute is a newly added attribute of HTML5 which enables an input field to complete automatically. It can have two values "on" and "off" which enables autocomplete either ON or OFF. The default value of autocomplete attribute is "on".
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;form action="action.html" method="get" autocomplete="on"&gt;  </pre>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;form action="action.html" method="get" autocomplete="off"&gt;  </pre>
        <hr>
        <h5>HTML enctype attribute</h5>
        <p>
            The HTML enctype attribute defines the encoding type of form-content while submitting the form to the server. The possible values of enctype can be:
        </p>
        <ul>
            <li>
                <b>application/x-www-form-urlencoded:</b> It is default encoding type if the enctype attribute is not included in the form. All characters are encoded before submitting the form.
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;form action="action.html" method="post" enctype="application/x-www-form-urlencoded" &gt; </pre>
        <ul>
            <li>
                <b>multipart/form-data:</b> It does not encode any character. It is used when our form contains file-upload controls.
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;form action="action.html" method="post" enctype="multipart/form-data"&gt;  </pre>
        <ul>
            <li>
                <b>text/plain (HTML5):</b> In this encoding type only space are encoded into + symbol and no any other special character encoded.
            </li>
        </ul>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;form action="action.html" method="post" enctype="text/plain" &gt;  </pre>
        <hr>

        <div class="mb-2">
            <a href="html-19.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-21.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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