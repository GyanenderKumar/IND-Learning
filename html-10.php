<?php

    $sub="html";
    $pag="10";

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

    <title>HTML Phrase tag</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Phrase tag</h1>
        <div>
            <a href="html-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Phrase tag</h3>
        <p>
            The HTML phrase tags are special purpose tags, which defines the structural meaning of a block of text or
            semantics of text. Following is the list of phrase tags, some of which we have already discussed in HTML
            formatting.
        </p>
        <ul>
            <li>
                Abbreviation tag : &lt;abbr&gt;
            </li>
            <li>
                Acronym tag: &lt;acronym&gt; (not supported in HTML5)
            </li>
            <li>
                Marked tag: &lt;mark&gt;
            </li>
            <li>
                Strong tag: &lt;strong&gt;
            </li>
            <li>
                Emphasized tag : &lt;em&gt;
            </li>
            <li>
                Definition tag: &lt;dfn&gt;
            </li>
            <li>
                Quoting tag: &lt;blockquote&gt;
            </li>
            <li>
                Short quote tag : &lt;q&gt;
            </li>
            <li>
                Code tag: &lt;code&gt;
            </li>
            <li>
                Keyboard tag: &lt;kbd&gt;
            </li>
            <li>
                Address tag: &lt;address&gt;
            </li>
        </ul>
        <hr>
        <h3>1. Text Abbreviation tag</h3>
        <p>
            This tag is used to abbreviate a text. To abbreviate a text, write text between &lt;abbr&gt; and
            &lt;/abbr&gt; tag.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;An &lt;abbr title = "Hypertext Markup language"&gt;HTML &lt;/abbr&gt;language is used to create web pages. &lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag.png" alt="html-phrase-tag">
        <hr>
        <h3>2. Marked tag :</h3>
        <p>
            The content written between &lt;mark&gt; and &lt;/mark&gt; tag will show as yellow mark on browser. This tag
            is used to highlight a particular text.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;This tag will &lt;mark&gt;highlight&lt;/mark&gt; the text.&lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag2.png" alt="html-phrase-tag2">
        <hr>
        <h3>3. Strong text :</h3>
        <p>
            This tag is used to display the important text of the content. The text written between &lt;strong&gt; and
            &lt;/strong&gt; will be displayed as important text.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;In HTML it is recommended to use &lt;strong&gt;lower-case&lt;/strong&gt;, while writing a code. &lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag3.png" alt="html-phrase-tag3">
        <hr>
        <h3>4. Emphasized text :</h3>
        <p>
            This tag is used to emphasize the text, and displayed the text in italic form. The text written between
            &lt;em&gt; and &lt;/em&gt; tag will italicized the text.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;HTML is an &lt;em&gt;easy &lt;/em&gt;to learn language.&lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag4.png" alt="html-phrase-tag4">
        <hr>
        <h3>5. Definition tag :</h3>
        <p>
            When you use the &lt;dfn&gt; and &lt;/dfn&gt; tags, it allow to specify the keyword of the content.
            Following is the example to show how to definition element.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;&lt;dfn&gt;HTML &lt;/dfn&gt; is a markup language. &lt;/p&gt;</pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag5.png" alt="html-phrase-tag5">
        <hr>
        <h3>6. Quoting text :</h3>
        <p>
            The HTML &lt;blockquote&gt; element shows that the enclosed content is quoted from another source. The
            Source URL can be given using the cite attribute, and text representation of source can display using
            <b>&lt;cite&gt; ..... &lt;/cite&gt;element.</b>
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;blockquote cite="https://www.keepinspiring.me/famous-quotes/"&gt;&lt;p&gt;?
                The first step toward success is taken when you refuse to be a captive of the environment in which you first find yourself.
                ?&lt;/p&gt;&lt;/blockquote&gt;   
            &lt;cite&gt;-Mark Caine&lt;/cite&gt; 
        </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag6.png" alt="html-phrase-tag6">
        <hr>
        <h3>7. Short Quotations :</h3>
        <p>
            An HTML &lt;q&gt; ....... &lt;/q&gt; element defines a short quotation. If you will put any content between
            &lt;q&gt; ....... &lt;/q&gt;, then it will enclose the text in double quotes
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
            &lt;p&gt;Steve Jobs said: &lt;q&gt;If You Are Working On Something That You Really Care About, You Don?t 
             Have To Be Pushed. The Vision Pulls You.&lt;/q&gt;?&lt;/p&gt;</pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag7.png" alt="html-phrase-tag7">
        <hr>
        <h3>8. Code tags :</h3>
        <p>
            The HTML &lt;code&gt; &lt;/code&gt; element is used to display the part of computer code. It will display
            the content in monospaced font.
        </p>
        <pre class="jumbotron">
            &lt;p&gt;First Java program&lt;/p&gt;  
            &lt;p&gt;&lt;code&gt;class Simple{ public static void main(String args[]){   
                System.out.println("Hello Java"); }} &lt;/code&gt;  
                &lt;/p&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag8.png" alt="html-phrase-tag8">
        <hr>
        <h3>9. Keyboard Tag :</h3>
        <p>
            In HTML the keyboard tag, &lt;kbd&gt;, indicates that a section of content is a user input from keyboard.
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Please press &lt;kbd&gt;Ctrl&lt;/kbd&gt; + &lt;kbd&gt;Shift&lt;/kbd&gt; + t&lt;kbd&gt;&lt;/kbd&gt; to restore page on chrome.&lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag9.png" alt="html-phrase-tag9">
        <hr>
        <h3>10. Address tag :</h3>
        <p>
            An HTML &lt;address&gt; tag defines the contact information about the author of the content. The content
            written between &lt;address&gt; and &lt;/address&gt; tag, then it will be displayed in italic font.
        </p>
        <pre class="jumbotron">
            &lt;address&gt; You can ask your queries by contact us on &lt;a href=""&gt;example123@newdomain.com&lt;/a&gt;  
                &lt;br&gt; You can also visit at: &lt;br&gt;58 S. Garfield Street. Villa Rica, GA 30187.  
               &lt;/address&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-phrase-tag10.png" alt="html-phrase-tag10">
        <hr>

        <div class="mb-2">
            <a href="html-9.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-11.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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