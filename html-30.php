<?php

    $sub="html";
    $pag="30";

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

    <title>HTML Layouts Techniques</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>
    

    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Layouts Techniques</h1>
        <div>
            <a href="html-29.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-31.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>Creating layouts are the most important things while designing a website, as it will ensure that your website
            looks in a well-arranged way and the content appears easy to understand. There are various techniques, and
            frameworks available for creating layouts, but here we will learn about simple techniques. You can use the
            following methods to create multicolumn layouts:</p>
        <ul>
            <li>HTML tables (Try not to use)</li>
            <li>CSS float property</li>
            <li>CSS framework</li>
            <li>CSS flexbox</li>
            <li>Layout using div</li>
        </ul>
        <hr>
        <h3>HTML Tables (Not Recommended)</h3>
        <p>HTML table-based layout is one of the easiest ways for creating a layout, as table use only rows and
            column-based format, but HTML tables are not recommended for your page layout. The <br>
            element is designed to display tabular data. It is not good for a layout. Although first creating a layout
            is easy, but if you want to change or redesign your website, then it will be a complicated task.</p>
        <p>Following is an example for the creation of a simple web page layout using HTML table.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
         &lt;head&gt;
        	&lt;style&gt;
        		li{
        			display: inline-block;
        			padding: 10px;}
        		a{
        			color:#20b2aa;
        		}
        	  &lt;/style&gt;
         &lt;/head&gt;
        &lt;body&gt;
             &lt;!-- Header Section --&gt;
               &lt;table width="100%" style="border-collapse:collapse;"&gt;
            	   &lt;tr&gt;
            		&lt;td colspan="2" style="background-color:#1a1a1a; text-align: center;"&gt;
            			&lt;h3 style="font-size: 30px; color: #ff6a6a;"&gt;javaTpoint Table-layout&lt;/h3&gt;
            		&lt;/td&gt;
            	 &lt;/tr&gt;
           &lt;!-- Nav Section --&gt;
             	  &lt;tr&gt;
                                &lt;td colspan="2" style="background-color:#666666;"&gt;
            			&lt;ul&gt;
                                                              &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;Menu&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;About-us&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;Contact us&lt;/a&gt;&lt;/li&gt;
        			&lt;/ul&gt;
                                                &lt;/td&gt;
            	  &lt;/tr&gt;
           &lt;!-- Main Section --&gt;
                  &lt;tr&gt;
            	     &lt;td style="background-color:#e6e6fa; width:80%; height: 400px; text-align: center;"&gt;
                       &lt;p&gt;Write your content Here&lt;/p&gt;
            		  &lt;/td&gt;
            		  &lt;td style="background-color:#a7e6fb; height: 400px;"&gt;
                         &lt;p&gt;This is your side bar&lt;/p&gt;
            		  &lt;/td&gt;
            	 &lt;/tr&gt;
             &lt;!-- Footer Section --&gt;
                   &lt;tr&gt;
            		 &lt;td colspan="2" style="background-color:#2e2e2e; text-align: center;"&gt;
            			&lt;p style="color:#f08080"&gt;©&lt;strong&gt;Copyright I-Learning.com&lt;/strong&gt;&lt;/p&gt;
            		&lt;/td&gt;
            	  &lt;/tr&gt;
            &lt;/table&gt;
         &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>CSS Frameworks</h3>
        <p>CSS provides many frameworks like W3.CSS, Bootstrap, and many more, to create your layout fast. Using CSS
            frameworks you can easily create a responsive and attractive web layout. You just need to add a link for
            these frameworks, and you can use all properties available in the framework.</p>
        <h3>CSS Float </h3>
        <p>You can create an entire web layout using CSS float property.</p>
        <p><strong>Advantage:</strong> It is very easy to learn and use. You just learn how the float and clear
            properties work. </p>
        <p><strong>Disadvantage:</strong> Floating elements are tied to the document flow, which may harm the
            flexibility.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
        &lt;style&gt;
        div.container {
            width: 100%;
            border: 1px solid gray;
        }

        header, footer {
            padding: 1em;
            color: white;
            background-color: #000080;
            clear: left;
            text-align: center;
        }

        nav {
            float: left;
            max-width: 160px;
            margin: 0;
            padding: 1em;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul a {
            text-decoration: none;
        }

        article {
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
        }
        &lt;/style&gt;
        &lt;/head&gt;
        &lt;body&gt;

        &lt;div class="container"&gt;

        &lt;header&gt;
        &lt;h1&gt;Tutorials Gallery&lt;/h1&gt;
        &lt;/header&gt;

        &lt;nav&gt;
        &lt;ul&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/nav&gt;
        &lt;article&gt;
        &lt;h1&gt;HTML&lt;/h1&gt;
        &lt;p&gt;HTML tutorial or HTML 5 tutorial provides basic and advanced concepts of html. Our HTML tutorial is 
        developed for beginners and professionals.&lt;/p&gt;
        &lt;p&gt;TML is an acronym which stands for Hyper Text Markup Language. Let's see what is Hyper Text and what is Markup Language?&lt;/p&gt;
        &lt;/article&gt;
        &lt;footer&gt;Copyright © I-Learning.com&lt;/footer&gt;
        &lt;/div&gt;
        &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>CSS Flexbox </h3>
        <p>Flexbox is a new layout mode in CSS3.</p>
        <p><strong>Advantage:</strong> It ensures that the page layout must accommodate different screen sizes and
            different display devices.</p>
        <p><strong>Disadvantages:</strong> It does not work in IE10 and earlier.</p>
        <h5>Example:</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
        &lt;style&gt;
        .flex-container {
            display: -webkit-flex;
            display: flex;  
            -webkit-flex-flow: row wrap;
            flex-flow: row wrap;
            text-align: center;
        }
        
        .flex-container &gt; * {
            padding: 15px;
            -webkit-flex: 1 100%;
            flex: 1 100%;
        }
        
        .article {
            text-align: left;
        }
        
        header {background: #000080;color:white;}
        footer {background: #000080;color:white;}
        .nav {background:#eee;}
        
        .nav ul {
            list-style-type: none;
            padding: 0;
        }
        .nav ul a {
            text-decoration: none;
        }
        
        @media all and (min-width: 768px) {
            .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
            .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
            footer {-webkit-order:3;order:3;}
        }
        &lt;/style&gt;
        &lt;/head&gt;
        &lt;body&gt;
        
        &lt;div class="flex-container"&gt;
        &lt;header&gt;
        &lt;h1&gt;City Gallery&lt;/h1&gt;
        &lt;/header&gt;
        
        &lt;nav class="nav"&gt;
        &lt;ul&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/nav&gt;
        
        &lt;article class="article"&gt;
        &lt;h1&gt;HTML&lt;/h1&gt;
        &lt;p&gt;HTML tutorial or HTML 5 tutorial provides basic and advanced concepts of html. Our HTML tutorial is 
        developed for beginners and professionals.&lt;/p&gt;
        &lt;p&gt;TML is an acronym which stands for Hyper Text Markup Language. Let's see what is Hyper Text and what is Markup Language?&lt;/p&gt;
        &lt;p&gt;&lt;strong&gt;Resize this page to see what happens!&lt;/strong&gt;&lt;/p&gt;
        &lt;/article&gt;
        
        &lt;footer&gt;Copyright © I-Learning.com&lt;/footer&gt;
        &lt;/div&gt;
        
        &lt;/body&gt;
        &lt;/html&gt;</pre>
        <h3>Layout using div</h3>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
        	&lt;title&gt;Webpage using div&lt;/title&gt;
        	&lt;style&gt;
        		body{
        			margin:0px;
        		}
                .header{
                        padding: 10px;
                        background-color:#455e64;
                        text-align: center;
                       }
                  .header h2{
                  	color: black; }
                      /*===============[Nav CSS]==========*/
                      .nav{
                      	background-color:#243238;
                      	padding: 5px;
                      	}
                      
                      .nav li{
                      list-style: none;
                      display: inline-block;
                      padding: 8px;
                       }
                   .nav a{
                   	color: #fff;
                   }

                  .nav ul li a:hover{
                    text-decoration: none;
                    color: #7fffd4;
                   }
                      .lside{
                      	 float: left;
                       width: 80%;
                       min-height: 440px;
                       background-color: #f0f8ff;
                       text-align: center;
                      }
                   .rside
                   {
                   	text-align: center;
                    float: right;
                   	width: 20%;
                   	  min-height: 440px;
                     background-color: 	#c1cdcd;
                   }
                   .footer{
                     height: 44px;
                    	background-color:#455e64; 
                   	text-align: center; 
                   	padding-top: 10px;}
                
                   	.footer p{
                   		color: 	#8fbc8f;
                   	}
                   
        	&lt;/style&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;div&gt;
        	&lt;div class="header"&gt;
        	  &lt;h2&gt;I-Learning Div Layout&lt;/h2&gt;
        	&lt;/div&gt;
                 	&lt;!-- Nav --&gt;
              	&lt;div class="nav"&gt;
              		&lt;ul&gt;
                        &lt;li&gt;&lt;a href="#"&gt;HOME&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;MENU&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;ABOUT&lt;/a&gt;&lt;/li&gt;
        				&lt;li&gt;&lt;a href="#"&gt;CONTACT&lt;/a&gt;&lt;/li&gt;
        				&lt;li style="float: right;"&gt;&lt;a href="#"&gt;LOGIN&lt;/a&gt;&lt;/li&gt;
        				&lt;li style="float: right;"&gt;&lt;a href="#"&gt;SIGN-UP&lt;/a&gt;&lt;/li&gt;
        			&lt;/ul&gt;
              	&lt;/div&gt;
                   
              &lt;!-- main --&gt;
              	&lt;div style="height:440px"&gt;
              		&lt;div class="lside"&gt;	
              			&lt;p&gt;Write your content here&lt;/p&gt;
              		&lt;/div&gt;
              	&lt;!-- side --&gt;
              		&lt;div class="rside"&gt;
              			&lt;p&gt;This is side&lt;/p&gt;
              		&lt;/div&gt;
              	&lt;/div&gt;
              &lt;!-- footer --&gt;
               &lt;div class="footer"&gt;
            	&lt;p&gt;©&lt;strong&gt;Copyright I-Learning.com&lt;/strong&gt;&lt;/p&gt;
            &lt;/div&gt;    
         &lt;/div&gt;
        &lt;/body&gt;
        &lt;/html&gt;</pre>
        <hr>

        <div class="mb-2">
            <a href="html-29.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-31.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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