<?php

    $sub="html";
    $pag="7";

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

    <title>HTML Formatting</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Formatting</h1>
        <div>
            <a href="html-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Formatting</h3>
        <p>
            <b>HTML Formatting</b> is a process of formatting text for better look and feel. HTML provides us ability to
            format text without using CSS. There are many formatting tags in HTML. These tags are used to make text
            bold, italicized, or underlined. There are almost 14 options available that how text appears in HTML and
            XHTML.
        </p>
        In HTML the formatting tags are divided into two categories:
        <ul>
            <li>
                Physical tag: These tags are used to provide the visual appearance to the text.
            </li>
            <li>
                Logical tag: These tags are used to add some logical or semantic value to the text.
            </li>
        </ul>
        Here, we are going to learn 14 HTML formatting tags. Following is the list of HTML formatting text.
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Element Name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>&lt;b&gt;</td>
                    <td>This is a physical tag, which is used to bold the text written between it.</td>
                </tr>
                <tr>
                    <td>&lt;strong&gt;</td>
                    <td>This is a logical tag, which tells the browser that the text is important.</td>
                </tr>
                <tr>
                    <td>&lt;i&gt;</td>
                    <td>This is a physical tag which is used to make text italic.</td>
                </tr>
                <tr>
                    <td>&lt;em&gt;</td>
                    <td>This is a logical tag which is used to display content in italic.</td>
                </tr>
                <tr>
                    <td>&lt;mark&gt;</td>
                    <td>This tag is used to highlight text.</td>
                </tr>
                <tr>
                    <td>&lt;u&gt;</td>
                    <td>This tag is used to underline text written between it.</td>
                </tr>
                <tr>
                    <td>&lt;tt&gt;</td>
                    <td>This tag is used to appear a text in teletype. (not supported in HTML5)</td>
                </tr>
                <tr>
                    <td>&lt;strike&gt;</td>
                    <td>This tag is used to draw a strikethrough on a section of text. (Not supported in HTML5)</td>
                </tr>
                <tr>
                    <td>&lt;sup&gt;</td>
                    <td>It displays the content slightly above the normal line.</td>
                </tr>
                <tr>
                    <td>&lt;sub&gt;</td>
                    <td>It displays the content slightly below the normal line.</td>
                </tr>
                <tr>
                    <td>&lt;del&gt;</td>
                    <td>This tag is used to display the deleted content.</td>
                </tr>
                <tr>
                    <td>&lt;ins&gt;</td>
                    <td>This tag displays the content which is added</td>
                </tr>
                <tr>
                    <td>&lt;big&gt;</td>
                    <td>This tag is used to increase the font size by one conventional unit.</td>
                </tr>
                <tr>
                    <td>&lt;small&gt;</td>
                    <td>This tag is used to decrease the font size by one unit from base font size.</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h3>1) Bold Text</h3>
        HTML &lt;b&gt; and &lt;strong&gt; formatting elements.
        <p>
            The HTML &lt;b&gt; element is a physical tag which display text in bold font, without any logical
            importance. If you write anything within &lt;b&gt;............&lt;/b&gt; element, is shown in bold
            letters.<br>
            see this example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;&lt;b&gt;Write Your First Paragraph in bold text.&lt;/b&gt;&lt;/p&gt;</pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p> <b>Write Your First Paragraph in bold text.</b></p></pre>
        <p>
            The HTML &lt;strong&gt; tag is a logical tag, which displays the content in bold font and informs the
            browser about its logical importance. If you write anything between &lt;strong&gt;???????. &lt;/strong&gt;,
            is shown important text.<br>
            See this example:
        </p>
        <pre class="jumbotron">
            &lt;p&gt;&lt;strong&gt;This is an important content&lt;/strong&gt;, and this is normal content&lt;/p&gt;</pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p><strong>This is an important content</strong>, and this is normal content</p></pre>
        <h3>Example</h3>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;  
                &lt;head>  
                    &lt;title&gt;formatting elements&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1>Explanation of formatting element&lt;/h1&gt;  
                    &lt;p&gt;&lt;strong&gt;This is an important content&lt;/strong&gt;, and this is normal content&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;  </pre>
        <hr>
        <h3>2) Italic Bold</h3>
        <p>
            <b>
                HTML &lt;i&gt; and &lt;em&gt; formatting elements.
            </b>
            <br>
            The HTML &lt;i&gt; element is physical element, which display the enclosed content in italic font, without
            any added importance. If you write anything within &lt;i&gt;............&lt;/i&gt; element, is shown in
            italic letters.<br>
            See this Example.
        </p>
        <pre class="jumbotron">
            &lt;p&gt; &lt;i&gt;Write Your First Paragraph in italic text.&lt;/i&gt;&lt;/p&gt; </pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p><i>Write Your First Paragraph in italic text.</i></p> </pre>
        <p>
            The HTML &lt;em&gt; tag is a logical element, which will display the enclosed content in italic font, with
            added semantics importance.
            <br><b>See this Example :</b>
        </p>
        <pre class="jumbotron">
            &lt;p&gt;&lt;em&gt;This is an important content&lt;/em&gt;, which displayed in italic font.&lt;/p&gt;  </pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p><em>This is an important content</em>, which displayed in italic font.</p></pre>
        <h3>Example</h3>
        <pre class="jumbotron">
            &lt;!DOCTYPE html&gt;  
            &lt;html&gt;  
                &lt;head&gt;  
                    &lt;title&gt;formatting elements&lt;/title&gt;  
                &lt;/head&gt;  
                &lt;body&gt;  
                    &lt;h1&gt;Explanation of italic formatting element&lt;/h1&gt;  
                    &lt;p&gt;&lt;em&gt;This is an important content&lt;/em&gt;, which displayed in italic font.&lt;/p&gt;  
                &lt;/body&gt;  
            &lt;/html&gt;</pre>
        <hr>
        <h3>3) HTML Marked formatting</h3>
        <p>
            If you want to mark or highlight a text, you should write the content within
            &lt;mark&gt;.........&lt;/mark&gt;.<br>
            <b>See this Example :</b>
        </p>
        <pre class="jumbotron">
            &lt;h2&gt;I want to put a &lt;mark&gt; Mark&lt;/mark&gt; on your face&lt;/h2&gt;</pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <h2>  I want to put a <mark> Mark</mark> on your face</h2>   </pre>
        <hr>
        <h3>4) Underline Text</h3>
        <p>
            If you write anything within &lt;u&gt;.........&lt;/u&gt; element, is shown in underlined text.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt; &lt;u&gt;Write Your First Paragraph in underlined text.&lt;/u&gt;&lt;/p&gt;  </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p> <u>Write Your First Paragraph in underlined text.</u></p>  </pre>
        <hr>
        <h3>5) Strike Text</h3>
        <p>
            Anything written within &lt;strike&gt;.......................&lt;/strike&gt; element is displayed with
            strikethrough. It is a thin line which cross the statement.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt; &lt;strike&gt;Write Your First Paragraph with strikethrough&lt;/strike&gt;.&lt;/p&gt;</pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p> <strike>Write Your First Paragraph with strikethrough</strike>.</p></pre>
        <hr>
        <h3>6) Monospaced Font</h3>
        <p>
            If you want that each letter has the same width then you should write the content within
            &lt;tt&gt;.............&lt;/tt&gt; element.<br>
            <b>Note : </b>We know that most of the fonts are known as variable-width fonts because different letters
            have different width. (for example: 'w' is wider than 'i'). Monospaced Font provides similar space among
            every letter.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;tt&gt;Write Your First Paragraph in monospaced font.&lt;/tt&gt;&lt;p&gt;</pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p>Hello <tt>Write Your First Paragraph in monospaced font.</tt></p></pre>
        <hr>
        <h3>7) Superscrit Text</h3>
        <p>
            If you put the content within &lt;sup&gt;..............&lt;/sup&gt; element, is shown in superscript; means
            it is displayed half a character's height above the other characters.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;sup&gt;Write Your First Paragraph in superscript.&lt;/sup&gt;&lt;/p&gt;</pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p>Hello <sup>Write Your First Paragraph in superscript.</sup></p></pre>
        <hr>
        <h3>8) Subscript Text</h3>
        <p>
            If you put the content within &lt;sub&gt;..............&lt;/sub&gt; element, is shown in subscript ; means
            it is displayed half a character's height below the other characters.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;sub&gt;Write Your First Paragraph in subscript.&lt;/sub&gt;&lt;/p&gt;</pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p>Hello <sub>Write Your First Paragraph in subscript.</sub></p></pre>
        <hr>
        <h3>9) Deleted Text</h3>
        <p>
            Anything that puts within &lt;del&gt;..........&lt;/del&gt; is displayed as deleted text.
            See this example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;del&gt;Delete your first paragraph.&lt;/del&gt;&lt;/p&gt; </pre>
        <h5>Output :</h5>
        <pre class="jumbotron">
            <p>Hello <del>Delete your first paragraph.</del></p> </pre>
        <hr>
        <h3>10) Inserted Text</h3>
        <p>
            Anything that puts within &lt;ins&gt;..........&lt;/ins&gt; is displayed as inserted text.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt; &lt;del&gt;Delete your first paragraph.&lt;/del&gt;&lt;ins&gt;Write another paragraph.&lt;/ins&gt;&lt;/p&gt;  </pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p> <del>Delete your first paragraph.</del><ins>Write another paragraph.</ins></p>  </pre>
        <hr>
        <h3>11) Larger Text</h3>
        <p>
            If you want to put your font size larger than the rest of the text then put the content within
            &lt;big&gt;.........&lt;/big&gt;. It increase one font size larger than the previous one.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;big&gt;Write the paragraph in larger font.&lt;/big&gt;&lt;/p&gt;</pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p>Hello <big>Write the paragraph in larger font.</big></p></pre>
        <hr>
        <h3>12) Smaller Text</h3>
        <p>
            If you want to put your font size smaller than the rest of the text then put the content within
            &lt;small&gt;.........&lt;/small&gt;tag. It reduces one font size than the previous one.<br>
            See this Example :
        </p>
        <pre class="jumbotron">
            &lt;p&gt;Hello &lt;small&gt;Write the paragraph in smaller font.&lt;/small&gt;&lt;/p&gt; </pre>
        <h5>Output</h5>
        <pre class="jumbotron">
            <p>Hello <small>Write the paragraph in smaller font.</small></p> </pre>
        <hr>

        <div class="mb-2">
            <a href="html-6.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-8.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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