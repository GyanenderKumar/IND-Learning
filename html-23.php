<?php

    $sub="html";
    $pag="23";

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

    <title>HTML Id Attribute</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Id Attribute</h1>
        <div>
            <a href="html-22.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-24.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML Id Attribute</h3>
        The <b>id attribute</b> is used to specify the unique ID for an element of the HTML document. It allocates the
        unique identifier which is used by the CSS and the JavaScript for performing certain tasks.
        <h3>Syntax</h3>
        <pre class="jumbotron">
            &lt;tag id="value"&gt; </pre>
        <h5>Example 1:</h5> The following example describes how to use the id attribute in CSS document:
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;head&gt;  
        &lt;title&gt;  
        Example of Id attribute in CSS  
        &lt;/title&gt;  
        &lt;style&gt; 
        #Cars {  
        padding: 40px;  
        background-color: lightblue;  
        color: black;      
        text-align: center;  
        }   
          
        #Bikes  
        {  
        padding: 50px;  
        background-color: lightGreen;  
        text-align: center;  
        }  
        &lt;/style&gt;  
        &lt;/head&gt;  
        &lt;body&gt;  
        &lt;p&gt; Use CSS to style an element with the id: &lt;/p&gt;  
        &lt;h1 id="Cars"&gt; Cars &lt;/h1&gt;  
        &lt;h1 id="Bikes"&gt; Bikes &lt;/h1&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;</pre>
        <h5>Output :</h5>
        <img src="images/html-id-attribute.png" alt="html-id-attribute"><br>
        <br>
        <h5>Example 2:</h5> The following example describes how to use the ID attribute in JavaScript.
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;   
        &lt;head&gt;   
        &lt;title&gt; Date Attribute &lt;/title&gt;   
        &lt;script&gt;   
        function viewdate() {   
        var x = document.getElementById("dob").value;   
        document.getElementById("demo").innerHTML = x;   
        &lt;/script&gt;   
        &lt;/head&gt;   
        &lt;body&gt;   
        Employee Name: &lt;input type="text" placeholder="Your Good name"/&gt;   
        &lt;br&gt;  
        &lt;br&gt;  
        Date of Joining:   
        &lt;input type="date" id="dob"&gt;  
        &lt;br&gt;  
        &lt;button onclick="viewdate()"&gt; Submit   
        &lt;/button&gt;   
        &lt;br&gt;  
        &lt;h2 id="demo"&gt; &lt;/h2&gt;   
        &lt;/body&gt;   
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-id-attribute2.png" alt="html-id-attribute2"><br>
        <br>
        <h3>Supporting Browsers</h3>
        <table class="table table-striped">
            <tr align="center">
                <th>Element</th>
                <th><img src="images/chrome_browser.png" alt="chrome_browser">Chrome</th>
                <th><img src="images/firefox_browser.png" alt="chrome_browser">firefox</th>
                <th><img src="images/ie_browser.png" alt="ie_browser">IE</th>
                <th><img src="images/opera_browser.png" alt="opera_browser">Opera</th>
                <th><img src="images/safari_browser.png" alt="safari_browser">safari</th>
            </tr>
            <tr align="center">
                <td>&lt;id&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-22.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-24.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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