<?php

    $sub="html";
    $pag="4";

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

    <title>HTML Tags</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>




    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Tags</h1>
        <div>
            <a href="html-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML Tags</h3>
        <br>
        <p>
            HTML tags are like keywords which defines that how web browser will format and display the content. With the
            help of tags, a web browser can distinguish between an HTML content and a simple content. HTML tags contain
            three main parts: opening tag, content and closing tag. But some HTML tags are unclosed tags.
            <br>
            When a web browser reads an HTML document, browser reads it from top to bottom and left to right. HTML tags
            are used to create HTML documents and render their properties. Each HTML tags have different properties.
            <br>
            An HTML file must have some essential tags so that web browser can differentiate between a simple text and
            HTML text. You can use as many tags you want as per your code requirement.
        </p>
        <br>
        <ul>
            <li>
                All HTML tags must enclosed within &lt; &gt; these brackets.
            </li>
            <li>
                Every tag in HTML perform different tasks.
            </li>
            <li>
                If you have used an open tag &lt;tag&gt;, then you must use a close tag &lt;/tag&gt; (except some tags)
            </li>
        </ul>

        <h5>Syntax</h5>
        <pre class="jumbotron">
            &lt; tag &gt; content &lt; /tag &gt;</pre>

        <h5>HTML Tag Examples</h5>
        <pre class="jumbotron">
            &lt; p &gt; Paragraph Tag &lt; /p &gt;
            <h2>&lt;h2&gt; Heading Tag &lt;/h2&gt;</h2> 
            &lt;b&gt;<b> Bold tag </b>&lt;b&gt;
            &lt;i&gt;<i> Italic tag </i>&lt;i&gt;
            &lt;u&gt;<u> Underline tag </u>&lt;u&gt;
        </pre>

        <hr>
        <h3>Unclosed HTML Tags</h3>
        <p>
            Some HTML tags are not closed, for example br and hr.
        </p>

        <p>
            <b>&lt;br&gt; Tag :</b> br stands for break line, it breaks the line of the code.
        </p>

        <p>
            <b>&lt;hr&gt; Tag :</b> hr stands for Horizontal Rule. This tag is used to put a line across the webpage.
        </p>


        <hr>
        <h3>HTML Meta Tags</h3>
        <p>
            DOCTYPE, title, link, meta and style
        </p>


        <hr>
        <h3>HTML Text Tags</h3>
        <p>
            &lt;p&gt;, &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, &lt;h6&gt;, &lt;strong&gt;,
            &lt;em&gt;, &lt;abbr&gt;, &lt;acronym&gt;, &lt;address&gt;, &lt;bdo&gt;, &lt;blockquote&gt;, &lt;cite&gt;,
            &lt;q&gt;, &lt;code&gt;, &lt;ins&gt;, &lt;del&gt;, &lt;dfn&gt;, &lt;kbd&gt;, &lt;pre&gt;, &lt;samp&gt;,
            &lt;var&gt; and &lt;br&gt;
        </p>


        <hr>
        <h3>HTML Link Tags</h3>
        <p>
            &lt;a&gt; and &lt;base&gt;
        </p>

        <hr>
        <h3>HTML Image and Object Tags</h3>
        <p>
            &lt;img&gt;, &lt;area&gt;, &lt;map&gt;, &lt;param&gt; and &lt;object&gt;&lt;/object&gt;
        </p>


        <hr>
        <h3>HTML List Tags</h3>
        <p>
            &lt;;ul&gt;, &lt;ol&gt;, &lt;li&gt;, &lt;dl&gt;, &lt;dt&gt; and &lt;dd&gt;&lt;/dd&gt;
        </p>

        <hr>
        <h3>HTML Table Tags</h3>
        <p>
            table, tr, td, th, tbody, thead, tfoot, col, colgroup and caption
        </p>
        <hr>
        <h3>HTML Form Tags</h3>
        <p>
            form, input, textarea, select, option, optgroup, button, label, fieldset and legend
        </p>
        <hr>
        <h3>HTML Scripting Tags</h3>
        <p>
            script and noscript
        </p>


        <hr>
        <h3>HTML Tags List</h3>
        <p>
            Following is the complete list of HTML tags with the description which are arranged alphabetically.
        </p>
        <h4>HTML Tags by Alphabets</h4>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th><a href="#a">A</a></th>

                    <th><a href="#b">B</a></th>

                    <th><a href="#c">C</a></th>

                    <th><a href="#d">D</a></th>

                    <th><a href="#e">E</a></th>

                    <th><a href="#f">F</a></th>

                    <th><a href="#g">G</a></th>

                    <th><a href="#h">H</a></th>

                    <th><a href="#i">I</a></th>

                    <th><a href="#j">J</a></th>

                    <th><a href="#k">K</a></th>

                    <th><a href="#l">L</a></th>

                    <th><a href="#m">M</a></th>

                    <th><a href="#n">N</a></th>

                    <th><a href="#o">O</a></th>

                    <th><a href="#p">P</a></th>

                    <th><a href="#q">Q</a></th>

                    <th><a href="#r">R</a></th>

                    <th><a href="#s">S</a></th>

                    <th><a href="#t">T</a></th>

                    <th><a href="#u">U</a></th>

                    <th><a href="#v">V</a></th>

                    <th><a href="#w">W</a></th>

                    <th><a href="#x">X</a></th>

                    <th><a href="#y">Y</a></th>

                    <th><a href="#z">Z</a></th>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>Tag name</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><a href="html-comments">&lt;!-- --&gt;</a></td>
                    <td>This tag is used to apply comment in an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="doctype-html">&lt;!DOCTYPE&gt;</a></td>
                    <td>This tag is used to specify the version of HTML</td>
                </tr>
                <tr>
                    <td id="a" colspan="2"><span class="h2">A</span></td>
                </tr>
                <tr>
                    <td><a href="html-anchor">&lt;a&gt;</a></td>
                    <td>It is termed as anchor tag and it creates a hyperlink or link.</td>
                </tr>
                <tr>
                    <td><a href="html-abbr-tag">&lt;abbr&gt;</a></td>
                    <td>It defines an abbreviation for a phrase or longer word.</td>
                </tr>
                <tr>
                    <td><a href="html-acronym-tag">&lt;acronym&gt;</a></td>
                    <td>It defines acronym for a word. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-address-tag">&lt;address&gt;</a></td>
                    <td>It defines the author's contact information of the HTML article</td>
                </tr>
                <tr>
                    <td><a href="html-applet-tag">&lt;applet&gt;</a></td>
                    <td>It defines an embedded Java applet. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-area-tag">&lt;area&gt;</a></td>
                    <td>It defines the area of an image map.</td>
                </tr>
                <tr>
                    <td><a href="html-article-tag">&lt;article&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines the self-contained content.</td>
                </tr>
                <tr>
                    <td><a href="html-aside-tag">&lt;aside&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines content aside from main content. Mainly represented as sidebar.</td>
                </tr>
                <tr>
                    <td><a href="html-audio">&lt;audio&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to embed sound content in HTML document.</td>
                </tr>
                <tr>
                    <td id="b" colspan="2"><span class="h2">B</span></td>
                </tr>
                <tr>
                    <td><a href="html-bold-tag">&lt;b&gt;</a></td>
                    <td>It is used to make a text bold.</td>
                </tr>
                <tr>
                    <td><a href="html-base-tag">&lt;base&gt;</a></td>
                    <td>This tag defines the base URL for all relative URL within the document.</td>
                </tr>
                <tr>
                    <td><a href="html-basefont-tag">&lt;basefont&gt;</a></td>
                    <td>This tag is used to set default font, size and color for all elements of document. <strong>(Not
                            supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-bdi-tag">&lt;bdi&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>This tag is used to provide isolation for that part of text which may be formatted in different
                        directions from its surrounding text.</td>
                </tr>
                <tr>
                    <td><a href="html-bdo-tag">&lt;bdo&gt;</a></td>
                    <td>It is used to override the current text direction.</td>
                </tr>
                <tr>
                    <td><a href="html-big-tag">&lt;big&gt;</a></td>
                    <td>This tag is used to make font size one level larger than its surrounding content. <strong>(Not
                            supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-blockquote-tag">&lt;blockquote&gt;</a></td>
                    <td>It is used to define a content which is taken from another source.</td>
                </tr>
                <tr>
                    <td><a href="html-body-tag">&lt;body&gt;</a></td>
                    <td>It is used to define the body section of an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-br-tag">&lt;br&gt;</a></td>
                    <td>It is used to apply single line break.</td>
                </tr>
                <tr>
                    <td><a href="html-button-tag">&lt;button&gt;</a></td>
                    <td>It is used to represent a clickable button</td>
                </tr>
                <tr>
                    <td id="c" colspan="2"><span class="h2">C</span></td>
                </tr>
                <tr>
                    <td><a href="html-canvas">&lt;canvas&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to provide a graphics space within a web document.</td>
                </tr>
                <tr>
                    <td><a href="html-caption-tag">&lt;caption&gt;</a></td>
                    <td>It is used to define a caption for a table.</td>
                </tr>
                <tr>
                    <td><a href="html-center-tag">&lt;center&gt;</a></td>
                    <td>It is used to align the content in center. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-cite-tag">&lt;cite&gt;</a></td>
                    <td>It is used to define the title of the work, book, website, etc.</td>
                </tr>
                <tr>
                    <td><a href="html-code-tag">&lt;code&gt;</a></td>
                    <td>It is used to display a part of programming code in an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-col-tag">&lt;col&gt;</a></td>
                    <td>It defines a column within a table which represent common properties of columns and used with
                        the &lt;colgroup&gt; element.</td>
                </tr>
                <tr>
                    <td><a href="html-colgroup-tag">&lt;colgroup&gt;</a></td>
                    <td>It is used to define group of columns in a table.</td>
                </tr>
                <tr>
                    <td id="d" colspan="2"><span class="h2">D</span></td>
                </tr>
                <tr>
                    <td><a href="html-data-tag">&lt;data&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to link the content with the machine-readable translation.</td>
                </tr>
                <tr>
                    <td><a href="html-datalist-tag">&lt;datalist&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to provide a predefined list for input option.</td>
                </tr>
                <tr>
                    <td><a href="html-description-list">&lt;dd&gt;</a></td>
                    <td>It is used to provide definition/description of a term in description list.</td>
                </tr>
                <tr>
                    <td><a href="html-del-tag">&lt;del&gt;</a></td>
                    <td>It defines a text which has been deleted from the document.</td>
                </tr>
                <tr>
                    <td><a href="html-details-tag">&lt;details&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines additional details which user can either view or hide.</td>
                </tr>
                <tr>
                    <td><a href="html-dfn-tag">&lt;dfn&gt;</a></td>
                    <td>It is used to indicate a term which is defined within a sentence/phrase.</td>
                </tr>
                <tr>
                    <td><a href="html-dialog-tag">&lt;dialog&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines a dialog box or other interactive components.</td>
                </tr>
                <tr>
                    <td><a href="html-dir-tag">&lt;dir&gt;</a></td>
                    <td>It is used as container for directory list of files. <strong>(Not supported in HTML5)</strong>
                    </td>
                </tr>
                <tr>
                    <td><a href="html-div-tag">&lt;div&gt;</a></td>
                    <td>It defines a division or section within HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-description-list">&lt;dl&gt;</a></td>
                    <td>It is sued to define a description list. </td>
                </tr>
                <tr>
                    <td><a href="html-description-list">&lt;dt&gt;</a></td>
                    <td>It is used to define a term in description list. </td>
                </tr>
                <tr>
                    <td id="e" colspan="2"><span class="h2">E</span></td>
                </tr>
                <tr>
                    <td><a href="html-em-tag">&lt;em&gt;</a></td>
                    <td>It is used to emphasis the content applied within this element.</td>
                </tr>
                <tr>
                    <td><a href="html-embed-tag">&lt;embed&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used as embedded container for external file/application/media, etc.</td>
                </tr>
                <tr>
                    <td id="f" colspan="2"><span class="h2">F</span></td>
                </tr>
                <tr>
                    <td><a href="html-fieldset-tag">&lt;fieldset&gt;</a></td>
                    <td>It is used to group related elements/labels within a web form.</td>
                </tr>
                <tr>
                    <td><a href="html-figcaption-tag">&lt;figcaption&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to add a caption or explanation for the &lt;figure&gt; element.</td>
                </tr>
                <tr>
                    <td><a href="html-figure-tag">&lt;figure&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to define the self-contained content, and s mostly refer as single unit.</td>
                </tr>
                <tr>
                    <td><a href="html-font-tag">&lt;font&gt;</a></td>
                    <td>It defines the font, size, color, and face for the content. <strong>(Not supported in
                            HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-footer-tag">&lt;footer&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines the footer section of a webpage.</td>
                </tr>
                <tr>
                    <td><a href="html-form">&lt;form&gt;</a></td>
                    <td>It is used to define an HTML form.</td>
                </tr>
                <tr>
                    <td><a href="html-frame-tag">&lt;frame&gt;</a></td>
                    <td>It defines a particular area of webpage which can contain another HTML file. <strong>(Not
                            supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-frameset-tag">&lt;frameset&gt;</a></td>
                    <td>It defines group of Frames. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td id="h" colspan="2"><span class="h2">H</span></td>
                </tr>
                <tr>
                    <td><a href="html-heading">&lt;h1&gt; to &lt;h6&gt;</a></td>
                    <td>It defines headings for an HTML document from level 1 to level 6.</td>
                </tr>
                <tr>
                    <td><a href="html-head">&lt;head&gt;</a></td>
                    <td>It defines the head section of an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-header-tag">&lt;header&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines the header of a section or webpage.</td>
                </tr>
                <tr>
                    <td><a href="html-hr-tag">&lt;hr&gt;</a></td>
                    <td>It is used to apply thematic break between paragraph-level elements.</td>
                </tr>
                <tr>
                    <td><a href="html-html-tag">&lt;html&gt;</a></td>
                    <td>It represents root of an HTML document. </td>
                </tr>
                <tr>
                    <td id="i" colspan="2"><span class="h2">I</span></td>
                </tr>
                <tr>
                    <td><a href="html-i-tag">&lt;i&gt;</a></td>
                    <td>It is used to represent a text in some different voice. </td>
                </tr>
                <tr>
                    <td><a href="html-iframes">&lt;iframe&gt;</a></td>
                    <td>It defines an inline frame which can embed other content. </td>
                </tr>
                <tr>
                    <td><a href="html-image">&lt;img&gt;</a></td>
                    <td>It is used to insert an image within an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-input-tag">&lt;input&gt;</a></td>
                    <td>It defines an input field within an HTML form. </td>
                </tr>
                <tr>
                    <td><a href="html-ins-tag">&lt;ins&gt;</a></td>
                    <td>It represent text that has been inserted within an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-isindex-tag">&lt;isindex&gt;</a></td>
                    <td>It is used to display search string for current document. <strong>(Not supported in
                            HTML5)</strong></td>
                </tr>
                <tr>
                    <td id="k" colspan="2"><span class="h2">K</span></td>
                </tr>
                <tr>
                    <td><a href="html-kbd-tag">&lt;kbd&gt;</a></td>
                    <td>It is used to define keyboard input.</td>
                </tr>
                <tr>
                    <td id="l" colspan="2"><span class="h2">L</span></td>
                </tr>
                <tr>
                    <td><a href="html-label-tag">&lt;label&gt;</a></td>
                    <td>It defines a text label for the input field of form.</td>
                </tr>
                <tr>
                    <td><a href="html-legend-tag">&lt;legend&gt;</a></td>
                    <td>It defines a caption for content of &lt;fieldset&gt;</td>
                </tr>
                <tr>
                    <td><a href="html-lists">&lt;li&gt;</a></td>
                    <td>It is used to represent items in list.</td>
                </tr>
                <tr>
                    <td><a href="html-link-tag">&lt;link&gt;</a></td>
                    <td>It represents a relationship between current document and an external resource.</td>
                </tr>
                <tr>
                    <td id="m" colspan="2"><span class="h2">M</span></td>
                </tr>
                <tr>
                    <td><a href="html-main-tag">&lt;main&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It represents the main content of an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-map-tag">&lt;map&gt;</a></td>
                    <td>It defines an image map with active areas.</td>
                </tr>
                <tr>
                    <td><a href="html-mark-tag">&lt;mark&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It represents a highlighted text.</td>
                </tr>
                <tr>
                    <td><a href="marquee-html">&lt;marquee&gt;</a></td>
                    <td>It is used to insert the scrolling text or an image either horizontally or vertically.
                        <strong>(Not supported in HTML5)</strong>
                    </td>
                </tr>
                <tr>
                    <td><a href="html-menu-tag">&lt;menu&gt;</a></td>
                    <td>It is used for creating a menu list of commands.</td>
                </tr>
                <tr>
                    <td><a href="html-meta-tag">&lt;meta&gt;</a></td>
                    <td>It defines metadata of an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-meter-tag">&lt;meter&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines scalar measurement with known range or fractional value.</td>
                </tr>
                <tr>
                    <td id="nn" colspan="2"><span class="h2">N</span></td>
                </tr>
                <tr>
                    <td><a href="html-nav-tag">&lt;nav&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It represents section of page to represent navigation links.</td>
                </tr>
                <tr>
                    <td><a href="html-noframes-tag">&lt;noframes&gt;</a></td>
                    <td>It provides alternate content to represent in browser which does not support the &lt;frame&gt;
                        elements. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-noscript-tag">&lt;noscript&gt;</a></td>
                    <td>It provides an alternative content if a script type is not supported in browser.</td>
                </tr>
                <tr>
                    <td id="o" colspan="2"><span class="h2">O</span></td>
                </tr>
                <tr>
                    <td><a href="html-object-tag">&lt;object&gt;</a></td>
                    <td>It is used to embed an object in HTML file.</td>
                </tr>
                <tr>
                    <td><a href="html-ordered-list">&lt;ol&gt;</a></td>
                    <td>It defines an ordered list of items.</td>
                </tr>
                <tr>
                    <td><a href="html-optgroup-tag">&lt;optgroup&gt;</a></td>
                    <td>It is used to group the options of a drop-down list.</td>
                </tr>
                <tr>
                    <td><a href="html-option-tag">&lt;option&gt;</a></td>
                    <td>It is used to define options or items in a drop-down list.</td>
                </tr>
                <tr>
                    <td><a href="html-output-tag">&lt;output&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used as container element which can show result of a calculation.</td>
                </tr>
                <tr>
                    <td id="p" colspan="2"><span class="h2">P</span></td>
                </tr>
                <tr>
                    <td><a href="html-paragraph">&lt;p&gt;</a></td>
                    <td>It represents a paragraph in an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-param-tag">&lt;param&gt;</a></td>
                    <td>It defines parameter for an &lt;object&gt; element</td>
                </tr>
                <tr>
                    <td><a href="html-picture-tag">&lt;picture&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines more than one source element and one image element.</td>
                </tr>
                <tr>
                    <td><a href="html-pre-tag">&lt;pre&gt;</a></td>
                    <td>It defines preformatted text in an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-progress-tag">&lt;progress&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines the progress of a task within HTML document.</td>
                </tr>
                <tr>
                    <td id="q" colspan="2"><span class="h2">Q</span></td>
                </tr>
                <tr>
                    <td><a href="html-quotes">&lt;q&gt;</a></td>
                    <td>It defines short inline quotation.</td>
                </tr>
                <tr>
                    <td id="r" colspan="2"><span class="h2">R</span></td>
                </tr>
                <tr>
                    <td><a href="html-rp-tag">&lt;rp&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines an alternative content if browser does not supports ruby annotations.</td>
                </tr>
                <tr>
                    <td><a href="html-rt-tag">&lt;rt&gt;</a></td>
                    <td>It defines explanations and pronunciations in ruby annotations.</td>
                </tr>
                <tr>
                    <td><a href="html-ruby-tag">&lt;ruby&gt;</a></td>
                    <td>It is used to represent ruby annotations.</td>
                </tr>
                <tr>
                    <td id="s" colspan="2"><span class="h2">S</span></td>
                </tr>
                <tr>
                    <td><a href="html-s-tag">&lt;s&gt;</a></td>
                    <td>It render text which is no longer correct or relevant.</td>
                </tr>
                <tr>
                    <td><a href="html-samp-tag">&lt;samp&gt;</a></td>
                    <td>It is used to represent sample output of a computer program.</td>
                </tr>
                <tr>
                    <td><a href="html-script-tag">&lt;script&gt;</a></td>
                    <td>It is used to declare the JavaScript within HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-section-tag">&lt;section&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines a generic section for a document.</td>
                </tr>
                <tr>
                    <td><a href="html-select-tag">&lt;select&gt;</a></td>
                    <td>It represents a control which provides a menu of options.</td>
                </tr>
                <tr>
                    <td><a href="html-small-tag">&lt;small&gt;</a></td>
                    <td>It is used to make text font one size smaller than document?s base font size.</td>
                </tr>
                <tr>
                    <td><a href="html-source-tag">&lt;source&gt;&gt;<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></a></td>
                    <td>It defines multiple media recourses for different media element such as &lt;picture&gt;,
                        &lt;video&gt;, and &lt;audio&gt; element.</td>
                </tr>
                <tr>
                    <td><a href="html-span-tag">&lt;span&gt;</a></td>
                    <td>It is used for styling and grouping inline.</td>
                </tr>
                <tr>
                    <td><a href="html-strike-tag">&lt;strike&gt;</a></td>
                    <td>It is used to render strike through the text. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td><a href="html-strong-tag">&lt;strong&gt;</a></td>
                    <td>It is used to define important text. </td>
                </tr>
                <tr>
                    <td><a href="html-style">&lt;style&gt;</a></td>
                    <td>It is used to contain style information for an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-sub-tag">&lt;sub&gt;</a></td>
                    <td>It defines a text which displays as a subscript text.</td>
                </tr>
                <tr>
                    <td><a href="html-summary-tag">&lt;summary&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines summary which can be used with &lt;details&gt; tag.</td>
                </tr>
                <tr>
                    <td><a href="html-sup-tag">&lt;sup&gt;</a></td>
                    <td>It defines a text which represent as superscript text.</td>
                </tr>
                <tr>
                    <td><a href="html-svg">&lt;svg&gt;</a></td>
                    <td>It is used as container of SVG (Scalable Vector Graphics). </td>
                </tr>
                <tr>
                    <td id="t" colspan="2"><span class="h2">T</span></td>
                </tr>
                <tr>
                    <td><a href="html-table">&lt;table&gt;</a></td>
                    <td>It is used to present data in tabular form or to create a table within HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-tbody-tag">&lt;tbody&gt;</a></td>
                    <td>It represents the body content of an HTML table and used along with &lt;thead&gt; and
                        &lt;tfoot&gt;.</td>
                </tr>
                <tr>
                    <td><a href="html-td-tag">&lt;td&gt;</a></td>
                    <td>It is used to define cells of an HTML table which contains table data </td>
                </tr>
                <tr>
                    <td><a href="html-template-tag">&lt;template&gt;</a></td>
                    <td>It is used to contain the client side content which will not display at time of page load and
                        may render later using JavaScript.</td>
                </tr>
                <tr>
                    <td><a href="html-textarea">&lt;textarea&gt;</a></td>
                    <td>It is used to define multiple line input, such as comment, feedback, and review, etc.</td>
                </tr>
                <tr>
                    <td><a href="html-tfoot-tag">&lt;tfoot&gt;</a></td>
                    <td>It defines the footer content of an HTML table.</td>
                </tr>
                <tr>
                    <td><a href="html-th-tag">&lt;th&gt;</a></td>
                    <td>It defines the head cell of an HTML table.</td>
                </tr>
                <tr>
                    <td><a href="html-thead-tag">&lt;thead&gt;</a></td>
                    <td>It defines the header of an HTML table. It is used along with &lt;tbody&gt; and &lt;tfoot&gt;
                        tags.</td>
                </tr>
                <tr>
                    <td><a href="html-time-tag">&lt;time&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to define data/time within an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-title">&lt;title&gt;</a></td>
                    <td>It defines the title or name of an HTML document.</td>
                </tr>
                <tr>
                    <td><a href="html-tr-tag">&lt;tr&gt;</a></td>
                    <td>It defines the row cells in an HTML table</td>
                </tr>
                <tr>
                    <td><a href="html-track-tag">&lt;track&gt;</a></td>
                    <td>It is used to define text tracks for &lt;audio&gt; and &lt;video&gt; elements.</td>
                </tr>
                <tr>
                    <td><a href="html-tt-tag">&lt;tt&gt;</a></td>
                    <td>It is used to define teletype text. <strong>(Not supported in HTML5)</strong></td>
                </tr>
                <tr>
                    <td id="u" colspan="2"><span class="h2">U</span></td>
                </tr>
                <tr>
                    <td><a href="html-u-tag">&lt;u&gt;</a></td>
                    <td>It is used to render enclosed text with an underline.</td>
                </tr>
                <tr>
                    <td><a href="html-unordered-list">&lt;ul&gt;</a></td>
                    <td>It defines unordered list of items.</td>
                </tr>
                <tr>
                    <td id="v" colspan="2"><span class="h2">V</span></td>
                </tr>
                <tr>
                    <td><a href="html-var-list">&lt;var&gt;</a></td>
                    <td>It defines variable name used in mathematical or programming context.</td>
                </tr>
                <tr>
                    <td><a href="html-video">&lt;video&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It is used to embed a video content with an HTML document</td>
                </tr>
                <tr>
                    <td id="w" colspan="2"><span class="h2">W</span></td>
                </tr>
                <tr>
                    <td><a href="html-wbr-tag">&lt;wbr&gt;</a><img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                    <td>It defines a position within text where break line is possible.</td>
                </tr>
            </tbody>
        </table>

        <hr>
        <div class="mb-2">
            <a href="html-3.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-5.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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