<?php

    $sub="html";
    $pag="32";

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

    <title>HTML Event Attributes</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Event Attributes</h1>
        <div>
            <a href="html-31.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-33.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>
        <hr>
        <p>When a browser reacts on user action, then it is called as an event. For example, when you click on the
            submit button, then if the browser displays an information box. </p>
        <p>In HTML5 there are lots of event attributes available which can be activated using a programming language
            such as JavaScript. </p>
        <p>Following is a table of event attributes, using these attributes you can perform several events. </p>
        <h3>Windows Event Attributes</h3>
        <p>Windows events are related for the window object, and it can only be applied with &lt;body&gt; tag. </p>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>onafterprint</td>
                <td>Executed the script after the document is printed.</td>
            </tr>
            <tr>
                <td>onbeforeprint</td>
                <td>Executed the script before the document is printed.</td>
            </tr>
            <tr>
                <td>onbeforeunload</td>
                <td>Executed the script before a document being unloaded.</td>
            </tr>
            <tr>
                <td>onerror</td>
                <td>Executed the script when an error occurs.</td>
            </tr>
            <tr>
                <td>onhashchange</td>
                <td>Executed the script when the anchor part in URL of the webpage is changed.</td>
            </tr>
            <tr>
                <td>onload</td>
                <td>Executed the script when the webpage is entirely loaded.</td>
            </tr>
            <tr>
                <td>onmessage</td>
                <td>Executed the script when a message event occurs.</td>
            </tr>
            <tr>
                <td>onoffline</td>
                <td>Executed the script when the network connection is disconnected, and browser started working
                    offline.</td>
            </tr>
            <tr>
                <td>ononline</td>
                <td>Executed the script when the browser started working online</td>
            </tr>
            <tr>
                <td>onpagehide</td>
                <td>Executed the script when the current webpage is hidden such as if the user has moved away from the
                    current webpage.</td>
            </tr>
            <tr>
                <td>onpageshow</td>
                <td>Executed the script when the current webpage is focused.</td>
            </tr>
            <tr>
                <td>onpopstate</td>
                <td>Executed the script when the window's active history is changed.</td>
            </tr>
            <tr>
                <td>onresize</td>
                <td>Executed the script when the window is resized.</td>
            </tr>
            <tr>
                <td>onstorage</td>
                <td>Executed the script when web storage is updated.</td>
            </tr>
            <tr>
                <td>onunload</td>
                <td>Executed the script when the current webpage is unloaded, or window is closed.</td>
            </tr>
        </table>
        <h3>Form Event Attributes</h3>
        <p>Form event occurs when the user performs some action within the form such as submitting the form, selecting
            input field, etc. </p>
        <p>The form events can be used with any element, but these are mainly used with HTML form elements.</p>
        <p>Following is the list of all Form Event attributes:</p>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>onblur</td>
                <td>Executed the script when form element loses the focus. </td>
            </tr>
            <tr>
                <td>onchange</td>
                <td>Executed the script when the value of the element is changed.</td>
            </tr>
            <tr>
                <td>onfocus</td>
                <td>Trigger an event when the element gets focused. </td>
            </tr>
            <tr>
                <td>oninput</td>
                <td>Executed the script when the user enters input to the element.</td>
            </tr>
            <tr>
                <td>oninvalid</td>
                <td>Executed the script when the element does not satisfy its predefined constraints. </td>
            </tr>
            <tr>
                <td>onreset</td>
                <td>Triggers the event when user reset the form element values. </td>
            </tr>
            <tr>
                <td>onsearch</td>
                <td>Triggers the event when a search field receives some input.</td>
            </tr>
            <tr>
                <td>onselect</td>
                <td>Triggers the event when the user has selected some text.</td>
            </tr>
            <tr>
                <td>onsubmit</td>
                <td>Triggers the event when a form is submitted.</td>
            </tr>
        </table>
        <h3>Keyboard Event Attributes</h3>
        <p>Keyboard event occurs when a user interacts with the keyboard. Following is a list of the Keyboard event.</p>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>onkeydown</td>
                <td>Triggers the event when the user presses down a key on the keyboard.</td>
            </tr>
            <tr>
                <td>onkeypress</td>
                <td>Trigger the event when the user presses the key which displays some character.</td>
            </tr>
            <tr>
                <td>onkeyup</td>
                <td>Trigger the event when the user releases the currently pressed key. </td>
            </tr>
        </table>
        <h3>Mouse Event Attributes</h3>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>onclick</td>
                <td>Trigger the event when the mouse clicks on the element.</td>
            </tr>
            <tr>
                <td>ondblclick</td>
                <td>Trigger the event when mouse double-click occurs on the element.</td>
            </tr>
            <tr>
                <td>onmousedown</td>
                <td>Trigger the event when the mouse button is pressed on the element.</td>
            </tr>
            <tr>
                <td>onmousemove</td>
                <td>Trigger the event when the mouse pointer moves over the element.</td>
            </tr>
            <tr>
                <td>onmouseout</td>
                <td>Trigger the event when the mouse moves outside the element.</td>
            </tr>
            <tr>
                <td>onmouseover</td>
                <td>Trigger the event when the mouse moves onto the element.</td>
            </tr>
            <tr>
                <td>onmouseup</td>
                <td>Trigger the event when the mouse button is released.</td>
            </tr>
            <tr>
                <td>onmousewheel</td>
                <td>Deprecated. Use the onwheel attribute.</td>
            </tr>
            <tr>
                <td>onwheel</td>
                <td>Trigger the event when the mouse wheel rolls up or down on the element</td>
            </tr>
        </table>
        <h3>Clipboard Event Attributes</h3>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>oncopy</td>
                <td>Trigger the event when the user copies the content to the system clipboard.</td>
            </tr>
            <tr>
                <td>oncut</td>
                <td>Trigger the event when the content of an element is cut and copy to the clipboard.</td>
            </tr>
            <tr>
                <td>onpaste</td>
                <td>Trigger the event when the user pastes some content in an element.</td>
            </tr>
        </table>
        <h3>Media Event Attributes</h3>
        <table class="table table-striped">
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>onabort</td>
                <td>Executed the script when media playback is aborted.</td>
            </tr>
            <tr>
                <td>oncanplay</td>
                <td>Executed the script when the media file is ready to play.</td>
            </tr>
            <tr>
                <td>oncanplaythrough</td>
                <td>Executed the script when the media file is ready to play without buffering or stopping.</td>
            </tr>
            <tr>
                <td>oncuechange</td>
                <td>Executed the script text cue of &lt;track&gt; element is changed.</td>
            </tr>
            <tr>
                <td>ondurationchange</td>
                <td>Executed the script when the media file duration is changed.</td>
            </tr>
            <tr>
                <td>onemptied</td>
                <td>Executed the script if media occurs some fatal error, and the file becomes unavailable.</td>
            </tr>
            <tr>
                <td>onended</td>
                <td>Executed the script when the media file occurs its end point.</td>
            </tr>
            <tr>
                <td>onerror</td>
                <td>Executed the script when some error occurred while fetching the media data.</td>
            </tr>
            <tr>
                <td>onloadeddata</td>
                <td>Executed the script when media data is loaded.</td>
            </tr>
            <tr>
                <td>onloadedmetadata</td>
                <td>Executed the script when metadata of media file is loaded.</td>
            </tr>
            <tr>
                <td>onloadstart</td>
                <td>Executed the script when loading of media file starts.</td>
            </tr>
            <tr>
                <td>onpause</td>
                <td>Executed the script when media playback is paused.</td>
            </tr>
            <tr>
                <td>onplay</td>
                <td>Executed the script when media file ready to play after being paused.</td>
            </tr>
            <tr>
                <td>onplaying</td>
                <td>Executed the script when media file is started playing.</td>
            </tr>
            <tr>
                <td>onprogress</td>
                <td>Executed the script when the browser is in the process of getting the media data.</td>
            </tr>
            <tr>
                <td>onratechange</td>
                <td>Executed the script when playback speed changed.</td>
            </tr>
            <tr>
                <td>onseeked</td>
                <td>Executed the script when seek operation is ended and seeking attribute is set to false.</td>
            </tr>
            <tr>
                <td>onseeking</td>
                <td>Executed the script when seek operation is active and seeking attribute is set to true.</td>
            </tr>
            <tr>
                <td>onstalled</td>
                <td>Executed the script when browser unexpectedly stopped fetching the data media.</td>
            </tr>
            <tr>
                <td>onsuspend</td>
                <td>Executed the script if fetching of media data is intentionally stopped.</td>
            </tr>
            <tr>
                <td>ontimeupdate</td>
                <td>Executed the script when playback position is changed, such as if a user fasts forward the track.
                </td>
            </tr>
            <tr>
                <td>onvolumechange</td>
                <td>Executed the script when media volume is changed (muted or unmuted). </td>
            </tr>
            <tr>
                <td>onwaiting</td>
                <td>Executed the script if playback pause to wait for loading more data.</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-31.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-33.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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