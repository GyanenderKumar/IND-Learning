<?php

    $sub="html";
    $pag="18";

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

    <title>HTML Form</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Form</h1>
        <div>
            <a href="html-17.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-19.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>

        <hr>
        <h3>HTML Form</h3>
        <p>
            An <b>HTML form</b> is a section of a document which contains controls such as text fields, password fields,
            checkboxes, radio buttons, submit button, menus etc.<br><br>
            An HTML form facilitates the user to enter data that is to be sent to the server for processing such as
            name, email address, password, phone number, etc. .
        </p>
        <hr>
        <h3>Why use HTML Form</h3>
        <p>
            HTML forms are required if you want to collect some data from of the site visitor.<br><br>
            <b>For example: </b>If a user want to purchase some items on internet, he/she must fill the form such as
            shipping address and credit/debit card details so that item can be sent to the given address.
        </p>
        <h3>HTML Form Syntax</h3>
        <pre class="jumbotron">
        &lt;form action="server url" method="get|post"&gt;  
            //input controls e.g. textfield, textarea, radiobutton, button  
        &lt;/form&gt; </pre>
        <hr>
        <h3>HTML Form Tags</h3>
        Let's see the list of HTML 5 form tags.
        <table class="table table-striped">
            <tr>
                <th>Tag</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>&lt;form&gt;</td>
                <td>It defines an HTML form to enter inputs by the used side.</td>
            </tr>
            <tr>
                <td>&lt;input&gt;</td>
                <td>It defines an input control.</td>
            </tr>
            <tr>
                <td>&lt;textarea&gt;</td>
                <td>It defines a multi-line input control.</td>
            </tr>
            <tr>
                <td>&lt;label&gt;</td>
                <td>It defines a label for an input element.</td>
            </tr>
            <tr>
                <td>&lt;fieldset&gt;</td>
                <td>It groups the related element in a form.</td>
            </tr>
            <tr>
                <td>&lt;legend&gt;</td>
                <td>It defines a caption for a &lt;fieldset&gt; element.</td>
            </tr>
            <tr>
                <td>&lt;select&gt;</td>
                <td>It defines a drop-down list.</td>
            </tr>
            <tr>
                <td>&lt;optgroup&gt;</td>
                <td>It defines a group of related options in a drop-down list.</td>
            </tr>
            <tr>
                <td>&lt;option&gt;</td>
                <td>It defines an option in a drop-down list.</td>
            </tr>
            <tr>
                <td>&lt;button&gt;</td>
                <td>It defines a clickable button.</td>
            </tr>
        </table>
        <h3>HTML 5 Form Tags</h3>
        Let's see the list of HTML 5 form tags.
        <table class="table table-striped">
            <tr>
                <th>Tag</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>&lt;datalist&gt;</td>
                <td>It specifies a list of pre-defined options for input control.</td>
            </tr>
            <tr>
                <td>&lt;keygen</td>
                <td>It defines a key-pair generator field for forms.</td>
            </tr>
            <tr>
                <td>&lt;output&gt;</td>
                <td>It defines the result of a calculation.</td>
            </tr>
        </table>
        <hr>
        <h3>HTML &lt;form&gt; element</h3>
        <p>
            The HTML &lt;form&gt; element provide a document section to take input from user. It provides various
            interactive controls for submitting information to web server such as text field, text area, password field,
            etc.
        </p>
        <h5>Syntax :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            //Form elements  
        &lt;/form&gt; </pre>
        <hr>
        <h3>HTML &lt;input&gt; element</h3>
        <p>
            The HTML &lt;input&gt; element is fundamental form element. It is used to create form fields, to take input
            from user. We can apply different input filed to gather different information form user. Following is the
            example to show the simple text input.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;body&gt;  
            &lt;form&gt;  
               Enter your name  &lt;br&gt;  
              &lt;input type="text" name="username"&gt;  
            &lt;/form&gt;  
        &lt;/body&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-form.png" alt="html-form">
        <hr>
        <h3>HTML TextField Control</h3>
        <p>
            The type="text" attribute of input tag creates textfield control also known as single line textfield
            control. The name attribute is optional, but it is required for the server side component such as JSP, ASP,
            PHP etc.
        </p>
        <pre class="jumbotron">
        &lt;form&gt;  
            First Name: &lt;input type="text" name="firstname"/&gt; &lt;br/&gt;  
            Last Name:  &lt;input type="text" name="lastname"/&gt; &lt;br/&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-textfield-control.png" alt="html-textfield-control">
        <hr>
        <h3>HTML &lt;textarea&gt; tag in form</h3>
        <p>
            The &lt;textarea&gt; tag in HTML is used to insert multiple-line text in a form. The size of
            &lt;textarea&gt; can be specify either using "rows" or "cols" attribute or by CSS.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
            &lt;head&gt;  
                &lt;title&gt;Form in HTML&lt;/title&gt;  
            &lt;/head&gt;  
            &lt;body&gt;  
                &lt;form&gt;  
                    Enter your address:&lt;br&gt;  
                    &lt;textarea rows="2" cols="20"&gt;&lt;/textarea&gt;  
                &lt;form&gt;  
            &lt;/body&gt;  
        &lt;/html&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-textarea-tag-in-form.png" alt="html-textarea-tag-in-form">
        <hr>
        <h3>Label Tag in Form</h3>
        <p>
            It is considered better to have label in form. As it makes the code parser/browser/user friendly.<br><br>
            If you click on the label tag, it will focus on the text control. To do so, you need to have for attribute
            in label tag that must be same as id attribute of input tag.
        </p>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label for="firstname"&gt;First Name: &lt;/label&gt; &lt;br/&gt;  
                &lt;input type="text" id="firstname" name="firstname"/&gt; &lt;br/&gt;  
            &lt;label for="lastname"&gt;Last Name: &lt;/label&gt;  
                &lt;input type="text" id="lastname" name="lastname"/&gt; &lt;br/&gt;  
        &lt;form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-label-tag-in-form.png" alt="html-label-tag-in-form">
        <hr>
        <h3>HTML Password Field Control</h3>
        The password is not visible to the user in password field control.
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label for="password"&gt;Password: &lt;/label&gt;  
                &lt;input type="password" id="password" name="password"/&gt; &lt;br/&gt;  
        &lt;form&gt; </pre>
        <img src="images/html-password-field-control.png" alt="html-password-field-control">
        <hr>
        <h3>HTML 5 Email Field Control</h3>
        <p>
            The email field in new in HTML 5. It validates the text for correct email address. You must use @ and . in
            this field.
        </p>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label for="email"&gt;Email: &lt;/label&gt;  
                &lt;input type="email" id="email" name="email"/&gt; &lt;br/&gt;  
        &lt;/form&gt; </pre>
        It will display in browser like below:<br>
        <img src="images/html-5-email-field-control.png" alt="html-5-email-field-control"><br>
        <img src="images/html-5-email-field-control2.png" alt="html-5-email-field-control2"><br>
        <hr>
        <h3>Radio Button Control</h3>
        <p>
            The radio button is used to select one option from multiple options. It is used for selection of gender,
            quiz questions etc.<br>
            If you use one name for all the radio buttons, only one radio button can be selected at a time.<br>
            Using radio buttons for multiple options, you can only choose a single option at a time.
        </p>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label for="gender"&gt;Gender: &lt;/label&gt;  
                &lt;input type="radio" id="gender" name="gender" value="male"/&gt;Male  
                &lt;input type="radio" id="gender" name="gender" value="female"/&gt;Female &lt;br/&gt;  
        &lt;/form&gt; </pre><br>
        <img src="images/radio-button-control.png" alt="radio-button-control"><br>
        <hr>
        <h3>Checkbox Control</h3>
        The checkbox control is used to check multiple options from given checkboxes.
        <pre class="jumbotron">
        &lt;form&gt;  
            Hobby:&lt;br&gt;  
            &lt;input type="checkbox" id="cricket" name="cricket" value="cricket"/&gt;  
                &lt;label for="cricket"&gt;Cricket&lt;/label&gt; &lt;br&gt;  
            &lt;input type="checkbox" id="football" name="football" value="football"/&gt;  
                &lt;label for="football"&gt;Football&lt;/label&gt; &lt;br&gt;  
            &lt;input type="checkbox" id="hockey" name="hockey" value="hockey"/&gt;  
                &lt;label for="hockey"&gt;Hockey&lt;/label&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/checkbox-control.png" alt="checkbox-control"><br>
        <hr>
        <h3>Submit button control</h3>
        <p>
            HTML <b>&lt;input type="submit"&gt;</b> are used to add a submit button on web page. When user clicks on
            submit button, then form get submit to the server.
        </p>
        Syntax :
        <pre class="jumbotron">
        &lt;input type="submit" value="submit"&gt; </pre>
        <p>
            The type = submit , specifying that it is a submit button<br>
            The value attribute can be anything which we write on button on web page.<br>
            The name attribute can be omit here.
        </p>
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;`  
            &lt;label for="name"&gt;Enter name&lt;/label&gt;&lt;br&gt;  
                &lt;input type="text" id="name" name="name"&gt;&lt;br&gt;  
            &lt;label for="pass"&gt;Enter Password&lt;/label&gt;&lt;br&gt;  
                &lt;input type="Password" id="pass" name="pass"&gt;&lt;br&gt;  
                &lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/submit-button-control.png" alt="submit-button-control"><br>
        <hr>
        <h3>HTML &lt;fieldset&gt; element:</h3>
        <p>
            The &lt;fieldset&gt; element in HTML is used to group the related information of a form. This element is
            used with &lt;legend&gt; element which provide caption for the grouped elements.
        </p>
        <pre class="jumbotron">
        &lt;form&gt;
            &lt;fieldset&gt;  
                &lt;legend&gt;User Information:&lt;/legend&gt;  
                &lt;label for="name"&gt;Enter name&lt;/label&gt;&lt;br&gt;
                &lt;input type="text" id="name" name="name"&gt;&lt;br&gt;  
                &lt;label for="pass">Enter Password&lt;/label&gt;&lt;br&gt;  
                &lt;input type="Password" id="pass" name="pass"&gt;&lt;br&gt;  
                &lt;input type="submit" value="submit"&gt;  
            &lt;/fieldset&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/html-fieldset-element.png" alt="html-fieldset-element">
        <hr>
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
                <td>&lt;form&gt;</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
                <td>Yes</td>
            </tr>
        </table>
        <hr>

        <div class="mb-2">
            <a href="html-17.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-19.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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