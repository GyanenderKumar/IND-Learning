<?php

    $sub="html";
    $pag="22";

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

    <title>HTML Classes</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Classes</h1>
        <div>
            <a href="html-21.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-23.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Classes</h3>
        <h3>Class Attribute in HTML</h3>
        <p>
            The HTML class attribute is used to specify a single or multiple class names for an HTML element. The class
            name can be used by CSS and JavaScript to do some tasks for HTML elements. You can use this class in CSS
            with a specific class, write a period (.) character, followed by the name of the class for selecting
            elements.<br>
            A class attribute can be defined within &lt;style&gt; tag or in separate file using the (.) character.<br>
            In an HTML document, we can use the same class attribute name with different elements.
        </p>
        <h3>Defining an HTML class</h3>
        To create an HTML class, firstly define style for HTML class using &lt;style&gt; tag within &lt;head&gt; section
        as following example:
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;head&gt;  
            &lt;style&gt;  
                .headings{   
                    color: lightgreen;  
                    font-family: cursive;  
                    background-color: black; }  
            &lt;/style&gt;  
        &lt;/head&gt; </pre>
        We have define style for a class name "headings", and we can use this class name with any of HTML element in
        which we want to provide such styling. We just need to follow the following syntax to use it.
        <pre class="jumbotron">
            &lt;ag class="ghf"&gt; content &lt;/tag&gt; </pre>
        <h5>Example 1:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;head&gt;  
            &lt;style&gt;  
                .headings{   
                    color: lightgreen;  
                    font-family: cursive;  
                    background-color: black; }  
            &lt;/style&gt;  
        &lt;/head&gt;  
        &lt;body&gt;  
        &lt;h1 class="headings"&gt;This is first heading &lt;/h1&gt;  
        &lt;h2 class="headings"&gt;This is Second heading&lt;/h2&gt;  
        &lt;h3 class="headings"&gt;This is third heading &lt;/h3&gt;  
        &lt;h4 class="headings"&gt;This is fourth heading&lt;/h4&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;  </pre>
        <hr>
        <h3>Another Example with different class name</h3>
        <h5>Example :</h5>
        Let's use a class name "Fruit" with CSS to style all elements.
        <pre class="jumbotron">
        &lt;style&gt;    
            .fruit {    
                background-color: orange;    
                color: white;    
                padding: 10px;    
            }     
        &lt;/style&gt;    
                
        &lt;h2 class="fruit"&gt;Mango&lt;/h2&gt;    
        &lt;p&gt;Mango is king of all fruits.&lt;/p&gt;       
        &lt;h2 class="fruit"&gt;Orange&lt;/h2&gt;    
        &lt;p&gt;Oranges are full of Vitamin C.&lt;/p&gt;    
        &lt;h2 class="fruit"&gt;Apple&lt;/h2&gt;    
        &lt;p&gt;An apple a day, keeps the Doctor away.&lt;/p&gt; </pre>
        Here you can see that we have used the class name "fruit" with (.) to use all its elements.
        <hr>
        <h3>Class Attribute in JavaScript</h3>
        You can use JavaScript access elements with a specified class name by using the getElementsByClassName() method.
        <h5>Example :</h5>
        Let's hide all the elements with class name "fruit" when the user click on the button.
        <pre class="jumbotron">
        &lt;!DOCTYPE html>    
        &lt;html&gt;   
        &lt;body&gt;    
        &lt;h2&gt;Class Attribute with JavaScript&lt;/h2&gt;    
        &lt;p&gt;Click the button, to hide all elements with the class name "fruit", with JavaScript:&lt;/p&gt;       
        &lt;button onclick="myFunction()"&gt;Hide elements&lt;/button&gt;        
        &lt;h2 class="fruit"&gt;Mango&lt;/h2&gt;   
        &lt;p&gt;Mango is king of all fruits.&lt;/p&gt;       
        &lt;h2 class="fruit"&gt;Orange&lt;/h2&gt;    
        &lt;p&gt;Oranges are full of Vitamin C.&lt;/p&gt;    
        &lt;h2 class="fruit"&gt;Apple&lt;/h2&gt;    
        &lt;p&gt;An apple a day, keeps the Doctor away.&lt;/p&gt;       
        &lt;script&gt;    
        function myFunction() {    
          var x = document.getElementsByClassName("fruit");    
          for (var i = 0; i < x.length; i++) {    
            x[i].style.display = "none";    
          }    
        }    
        &lt;/script&gt;    
        &lt;/body&gt;    
        &lt;/html&gt; </pre>
        <hr>
        <h3>Multiple Classes</h3>
        You can use multiple class names (more than one) with HTML elements. These class names must be separated by a
        space.
        <h5>Example :</h5>
        Let's style elements with class name "fruit" and also with a class name "center".
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;style&gt;    
        .fruit {    
            background-color: orange;    
            color: white;    
            padding: 10px;    
        }     
            
        .center {    
            text-align: center;    
        }    
        &lt;/style&gt;    
        &lt;body&gt;    
            
        &lt;h2&gt;Multiple Classes&lt;/h2&gt;    
        &lt;p&gt;All three elements have the class name "fruit". In addition, Mango also have the class name "center", which center-aligns the text.&lt;/p&gt;    
            
        &lt;h2 class="fruit center"&gt;Mango&lt;/h2&gt;    
        &lt;h2 class="fruit"&gt;Orange&lt;/h2&gt;    
        &lt;h2 class="fruit"&gt;Apple&lt;/h2&gt;    
            
        &lt;/body&gt;    
        &lt;/html&gt;</pre>
        You can see that the first element &lt;h2&gt; belongs to both the "fruit" class and the "center" class.
        <hr>
        <h3>Same class with Different Tag</h3>
        You can use the same class name with different tags like &lt;h2&gt; and &lt;p&gt; etc. to share the same style.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;    
        &lt;html&gt;    
        &lt;style&gt;    
        .fruit {    
          background-color: orange;    
          color: white;    
          padding: 10px;    
        }     
        &lt;/style&gt;    
        &lt;body&gt;    
        &lt;h2&gt;Same Class with Different Tag&lt;/h2&gt;    
        &lt;h2 class="fruit"&gt;Mango&lt;/h2&gt;    
        &lt;p class="fruit"&gt;Mango is the king of all fruits.&lt;/p&gt;    
        &lt;/body&gt;    
        &lt;/html&gt; </pre>
        <hr>

        <div class="mb-2">
            <a href="html-21.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-23.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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