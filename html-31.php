<?php

    $sub="html";
    $pag="31";

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

    <title>Global Attributes</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>Global Attributes</h1>
        <div>
            <a href="html-30.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-32.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>HTML global attributes are those attributes which are common for all HTML elements. The global attributes are
            supported by both standard and non-standard element. </p>
        <p>The global attributes can be used with all elements, although it may not have any effect on some elements.
        </p>
        <p>Following is the complete list of global attributes with their description:</p>
        <p>Here<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">represent new in
            HTML5. </p>
        <table class="table table-striped">
            <tr>
                <th>Attributes</th>
                <th>value</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>accesskey</td>
                <td>character</td>
                <td>It is used to generate keyboard shortcuts for the current element. </td>
            </tr>
            <tr>
                <td>class</td>
                <td>classname</td>
                <td>It is used to provide the class name for the current element. It is mainly used with the stylesheet.
                </td>
            </tr>
            <tr>
                <td>Contenteditable<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png"
                        alt="HTML Tags List"></td>
                <td>true<br>
                    false</td>
                <td>It determines whether the content within an element is editable or not. </td>
            </tr>
            <tr>
                <td>contextmenu</td>
                <td>menu_id</td>
                <td>It defines the id for the &lt;menu&gt; element which is used as a context menu (a menu appear on
                    right click) for an element. </td>
            </tr>
            <tr>
                <td>data-*<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List"></td>
                <td>somevalue</td>
                <td>It is used to store element-specific private data which can be accessed by Javascript.</td>
            </tr>
            <tr>
                <td>dir</td>
                <td>rtl<br>
                    ltr<br>
                    auto</td>
                <td>It specifies the direction of the content inside the current element. </td>
            </tr>
            <tr>
                <td>draggable<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">
                </td>
                <td>true<br>
                    false<br>
                    auto</td>
                <td>It specifies whether the content within an element is movable or not using Drag and Drop API. </td>
            </tr>
            <tr>
                <td>dropzone<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">
                </td>
                <td>copy<br>
                    move<br>
                    link</td>
                <td>It specifies the action is taken on the dragged element when it is dropped, ¬¬ such as whether it is
                    copied, moved or linked. </td>
            </tr>
            <tr>
                <td>hidden<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">
                </td>
                <td></td>
                <td>It is used to hide the element from view. </td>
            </tr>
            <tr>
                <td>id</td>
                <td>id</td>
                <td>It specifies a unique id for the element. It can be used with CSS and JavaScript.</td>
            </tr>
            <tr>
                <td>lang</td>
                <td>language_code</td>
                <td>It specifies the primary language for the content of an element. </td>
            </tr>
            <tr>
                <td>style</td>
                <td>style</td>
                <td>It is used to apply inline CSS to the current element. </td>
            </tr>
            <tr>
                <td>spellcheck<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">
                </td>
                <td>true<br>
                    false</td>
                <td>It specifies whether the content should be checked for spelling errors or not.</td>
            </tr>
            <tr>
                <td>tabindex</td>
                <td>number</td>
                <td>It determines the tabbing order of an element. </td>
            </tr>
            <tr>
                <td>title</td>
                <td>text</td>
                <td>It is used to provide the title, name, or some extra information about the element. </td>
            </tr>
            <tr>
                <td>translate<img style="margin:5px 4px -4px 0" src="images/html-tags-list.png" alt="HTML Tags List">
                </td>
                <td>yes<br>
                    no</td>
                <td>It specifies whether the content of the element should be translated when the page is localized or
                    not. </td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-30.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-32.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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