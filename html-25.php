<?php

    $sub="html";
    $pag="25";

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

    <title>HTML JavaScript</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>





    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML JavaScript</h1>
        <div>
            <a href="html-24.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-26.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML JavaScript</h3>
        <p>
        A Script is a small program which is used with HTML to make web pages more attractive, dynamic and interactive, such as an alert popup window on mouse click. Currently, the most popular scripting language is JavaScript used for websites.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html>  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h1>JavaScript Date and Time example</h1>  
        &lt;button type="button"  
        &lt;nclick="document.getElementById('demo').innerHTML = Date()">  
        &lt;lick me to display Date and Time.</button>  
        &lt;p id="demo"></p>  
        &lt;/body&gt;  
        &lt;/html&gt;</pre>
        <hr>
        <h3>HTML &lt;script&gt; Tag</h3>
        <p>
            The HTML &lt;script&gt; tag is used to specify a client-side script. It may be an internal or external JavaScript which contains scripting statements, hence we can place &lt;script&gt; tag within &lt;body&gt; or &lt;head&gt; section.<br>
            It is mainly used to manipulate images, form validation and change content dynamically. JavaScript uses document.getElementById() method to select an HTML element.
        </p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Use JavaScript to Change Text&lt;/h2&gt;  
        &lt;p id="demo"&gt;&lt;/p&gt;  
        &lt;script&gt;  
        document.getElementById("demo").innerHTML = "Hello I-Learning";  
        &lt;/script&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;</pre>
        <h3>HTML events with JavaScript</h3>
        <p>
            An event is something which user does, or browser does such as mouse click or page loading are examples of events, and JavaScript comes in the role if we want something to happen on these events.<br>
            HTML provides event handler attributes which work with JavaScript code and can perform some action on an event.
        </p>
        <h5>Syntax :</h5>
        <pre class="jumbotron">
        &lt;element event = "JS code"&gt;   </pre>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;input type="button" value="Click" onclick="alert('Hi, how are you')"&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
        <h2>Click Event Example</h2>
        <p>Click on the button and you csn see a pop-up window with a message</p>
        <input type="button" value="Click" onclick="alert('Hi,how are you')"> </pre>
        <p>HTML can have following events such as:</p>
        <ul class="points">
            <li><strong>Form events:</strong> reset, submit, etc.</li>
            <li><strong>Select events:</strong> text field, text area, etc.</li>
            <li><strong>Focus event:</strong> focus, blur, etc.</li>
            <li><strong>Mouse events:</strong> select, mouseup, mousemove, mousedown, click, dblclick, etc.</li>
        </ul>
        <p>Following are the list for Window event attributes:</p>
        <table class="table table-striped">
            <tr>
                <th>Event  Event Name</th>
                <th>Handler Name</th>
                <th>Occurs when</th>
            </tr>
            <tr>
                <td>onBlur</td>
                <td>blur</td>
                <td>When form input loses focus</td>
            </tr>
            <tr>
                <td>onClick</td>
                <td>click</td>
                <td>When the user clicks on a form element or a link</td>
            </tr>
            <tr>
                <td>onSubmit</td>
                <td>submit</td>
                <td>When user submits a form to the server.</td>
            </tr>
            <tr>
                <td>onLoad</td>
                <td>load</td>
                <td>When page loads in a browser.</td>
            </tr>
            <tr>
                <td>onFocus</td>
                <td>focus</td>
                <td>When user focuses on an input field.</td>
            </tr>
            <tr>
                <td>onSelect</td>
                <td>select</td>
                <td>When user selects the form input filed.</td>
            </tr>
        </table> 
        <br>
        Let's see what JavaScript can do:
        <h4>1) JavaScript can change HTML content.</h4>
        <h5>Example</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html>  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;p&gt;JavaScript can change the content of an HTML element:&lt;/p&gt;  
        &lt;button type="button" onclick="myFunction()"&gt;Click Me!&lt;/button&gt;  
        &lt;p id="demo"&gt;&lt;/p&gt;  
        &lt;script&gt;  
        function myFunction() {   
            document.getElementById("demo").innerHTML = "Hello I-Learning!";  
        }  
        &lt;/script&gt; 
        &lt;/body&gt;  
        &lt;/html&gt;  </pre>
        <h4>2) JavaScript can change HTML style</h4>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;p id="demo"&gt;JavaScript can change the style of an HTML element.&lt;/p&gt;  
        &lt;script&gt;  
        function myFunction() {  
            document.getElementById("demo").style.fontSize = "25px";   
            document.getElementById("demo").style.color = "brown";  
            document.getElementById("demo").style.backgroundColor = "lightgreen";         
        }  
        &lt;/script&gt;  
        &lt;button type="button" onclick="myFunction()"&gt;Click Me!&lt;/button&gt;  
        &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h4>3) JavaScript can change HTML attributes.</h4>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt; 
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;script&gt;  
        function light(sw) {  
            var pic;  
            if (sw == 0) {  
                pic = "pic_lightoff.png"  
            } else {  
                pic = "pic_lighton.png"  
            }  
            document.getElementById('myImage').src = pic;  
        }  
        &lt;/script&gt;  
        &lt;img id="myImage" src="pic_lightoff.png" width="100" height="180"&gt;  
        &lt;p&gt;  
        &lt;button type="button" onclick="light(1)"&gt;Light On&lt;/button&gt;  
        &lt;button type="button" onclick="light(0)"&gt;Light Off&lt;/button&gt;  
        &lt;/p&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;</pre>
        <hr>
        <h3>Use External Script</h3>
        <p>
            Suppose, you have various HTML files which should have same script, then we can put our JavaScript code in separate file and can call in HTML file. Save JavaScript external files using .js extension.
        </p>
        <h4>Syntax:</h4>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
                &lt;script type="text/javascript" src="external.js"&gt;&lt;/script&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;h2&gt;External JavaScript Example&lt;/h2&gt;  
                &lt;form onsubmit="fun()"&gt;  
                    &lt;label&gt;Enter your name:&lt;/label&gt;&lt;br&gt;  
                    &lt;input type="text" name="uname" id="frm1"&gt;&lt;br&gt;  
                    &lt;label&gt;Enter your Email-address:&lt;/label&gt;&lt;br&gt;    
                    &lt;input type="email" name="email"&gt;&lt;br&gt;  
                    &lt;input type="submit"&gt;  
                &lt;/form&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>JavaScript code:</h5>
        <pre class="jumbotron">
        function fun() 
        {  
            var x = document.getElementById("frm1").value;  
             alert("Hi"+" "+x+ "you have successfully submitted the details");  
        }  </pre>
        <h5>Output :</h5>
        <img src="images/html-javascript.png" alt="html-javascript">
        <hr>
        <h3>HTML &lt;noscript&gt; Tag</h3>
        HTML &lt;noscript&gt; tag is used to write disabled script in the browser. The text written within &lt;noscript&gt;&lt;/noscript&gt; tag is not displayed on the browser.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;p id="demo"&gt;&lt;/p&gt;  
        &lt;script&gt;  
        document.getElementById("demo").innerHTML = "Hello JavaScript!";  
        &lt;/script&gt; 
        &lt;noscript&gt;This text is not visible in the browser.&lt;/noscript&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;</pre>




        <hr>


        <div class="mb-2">
            <a href="html-24.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-26.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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