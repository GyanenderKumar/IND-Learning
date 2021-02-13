<?php

    $sub="html";
    $pag="19";

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- ---Font Awesome CDN-- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>HTML Form Input Types</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML Introduction section------------ -->
    <div class="container">
        <h1>HTML Form Input Types</h1>
        <div>
            <a href="html-18.php" class="btn
                                btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>Previous</a>
            <a href="html-20.php" class="btn
                                btn-outline-primary">Next <i class="fa
                                    fa-arrow-right" aria-hidden="true"></i></a>
        </div>
        <hr>
        <h3>HTML Form Input Types</h3>
        <p>
            In HTML &lt;input type=" "&gt; is an important element of HTML form. The "type" attribute of input element
            can be various types, which defines information field. Such as &lt;input type="text" name="name"&gt; gives a
            text box.
        </p>
        <h4>Following is a list of all types of &lt;input&gt; element of HTML.</h4>
        <table class="table table-striped">
            <tr align="center">
                <th>type = " "</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>text</td>
                <td>Defines a one-line text input field</td>
            </tr>
            <tr>
                <td>password</td>
                <td>Defines a one-line password input field</td>
            </tr>
            <tr>
                <td>submit</td>
                <td> Defines a submit button to submit the form to server</td>
            </tr>
            <tr>
                <td>reset</td>
                <td> Defines a reset button to reset all values in the form.</td>
            </tr>
            <tr>
                <td>radio</td>
                <td>Defines a radio button which allows select one option.</td>
            </tr>
            <tr>
                <td>checkbox</td>
                <td>Defines checkboxes which allow select multiple options form.</td>
            </tr>
            <tr>
                <td>button</td>
                <td>Defines a simple push button, which can be programmed to perform a task on an event.</td>
            </tr>
            <tr>
                <td>file</td>
                <td>Defines to select the file from device storage.
                </td>
            </tr>
            <tr>
                <td>image</td>
                <td>Defines a graphical submit button.</td>
            </tr>
        </table>
        <hr>
        <h5>HTML5 added new types on &lt;input&gt; element. Following is the list of types of elements of HTML5</h5>
        <table class="table table-striped">
            <tr align="center">
                <th>type = " "</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>color</td>
                <td>Defines an input field with a specific color.
                </td>
            </tr>
            <tr>
                <td>date</td>
                <td>Defines an input field for selection of date.
                </td>
            </tr>
            <tr>
                <td>datetime-local</td>
                <td>Defines an input field for entering a date without time zone.</td>
            </tr>
            <tr>
                <td>email</td>
                <td>Defines an input field for entering an email address.
                </td>
            </tr>
            <tr>
                <td>month</td>
                <td>Defines a control with month and year, without time zone.</td>
            </tr>
            <tr>
                <td>number</td>
                <td>Defines an input field to enter a number.</td>
            </tr>
            <tr>
                <td>url</td>
                <td>Defines a field for entering URL</td>
            </tr>
            <tr>
                <td>week</td>
                <td>Defines a field to enter the date with week-year, without time zone.</td>
            </tr>
            <tr>
                <td>search</td>
                <td>Defines a single line text field for entering a search string.</td>
            </tr>
            <tr>
                <td>tel</td>
                <td>Defines an input field for entering the telephone number.</td>
            </tr>
        </table>
        <hr>
        <h5>Following is the description about types of &lt;input&gt; element with examples.</h5>
        <h3>1. &lt;input type="text"&gt;:</h3>
        &lt;input&gt; element of type "text" are used to define a single-line input text field.
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;Enter first name&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="firstname"&gt;&lt;br&gt;  
            &lt;label&gt;Enter last name&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="lastname"&gt;&lt;br&gt;  
            &lt;p&gt;&lt;strong&gt;Note:&lt;/strong&gt;The default maximum cahracter lenght is 20.&lt;/p&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/text.png" alt="text">
        <hr>
        <h3>2. &lt;input type="password"&gt;:</h3>
        <p>
            The &lt;input&gt; element of type "password" allow a user to enter the password securely in a webpage. The
            entered text in password filed converted into "*" or ".", so that it cannot be read by another user.
        </p>
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;Enter User name&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="firstname"&gt;&lt;br&gt;  
            &lt;label&gt;Enter Password&lt;/label&gt;&lt;br&gt;  
            &lt;input type="Password" name="password"&gt;&lt;br&gt;  
            &lt;br&gt;&lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/password.png" alt="password">
        <hr>
        <h3>3. &lt;input type="submit"&gt;:</h3>
        <p>
            The &lt;input&gt; element of type "submit" defines a submit button to submit the form to the server when the
            "click" event occurs.
        </p>
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form action="https://www.ind-learning.com/html-tutorial"&gt;  
            &lt;label&gt;Enter User name&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="firstname"&gt;&lt;br&gt;  
            &lt;label&gt;Enter Password&lt;/label&gt;&lt;br&gt;  
            &lt;input type="Password" name="password"&gt;&lt;br&gt;  
            &lt;br&gt;&lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/submit.png" alt="submit">
        <hr>
        <h3>4. &lt;input type="reset"&gt;:</h3>
        The &lt;input&gt; type "reset" is also defined as a button but when the user performs a click event, it by
        default reset the all inputted values.
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;User id: &lt;/label&gt;  
            &lt;input type="text" name="user-id" value="user"&gt;  
            &lt;label&gt;Password: &lt;/label&gt;  
            &lt;input type="password" name="pass" value="pass"&gt;&lt;br&gt;&lt;br&gt;  
            &lt;input type="submit" value="login"&gt;  
            &lt;input type="reset" value="Reset"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/reset.png" alt="reset">
        <hr>
        <h3>5. &lt;input type="radio"&gt;:</h3>
        The &lt;input&gt; type "radio" defines the radio buttons, which allow choosing an option between a set of
        related options. At a time only one radio button option can be selected at a time.
        <pre class="jumbotron">
        &lt;/form&gt;  
            &lt;p&gt;Kindly Select your favorite color&lt;/p&gt;  
            &lt;input type="radio" name="color" value="red"&gt; Red &lt;br&gt;  
            &lt;input type="radio" name="color" value="blue"&gt; blue &lt;br&gt;  
            &lt;input type="radio" name="color" value="green"&gt;green &lt;br&gt;  
            &lt;input type="radio" name="color" value="pink"&gt;pink &lt;br&gt;  
            &lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/radio.png" alt="radio">
        <hr>
        <h3>6. &lt;input type="checkbox"&gt;:</h3>
        The &lt;input&gt; type "checkbox" are displayed as square boxes which can be checked or unchecked to select the
        choices from the given options.
        <pre class="jumbotron">
        &lt;/form&gt;   
            &lt;label&gt;Enter your Name:</label>  
            &lt;input type="text" name="name"&gt;  
            &lt;p&gt;Kindly Select your favourite sports&lt;/p&gt;  
            &lt;input type="checkbox" name="sport1" value="cricket"&gt;Cricket&lt;br&gt;
            &lt;input type="checkbox" name="sport2" value="tennis"&gt;Tennis&lt;br&gt;
            &lt;input type="checkbox" name="sport3" value="football"&gt;Football&lt;br&gt;  
            &lt;input type="checkbox" name="sport4" value="baseball"&gt;Baseball&lt;br&gt;  
            &lt;input type="checkbox" name="sport5" value="badminton"&gt;Badminton&lt;br&gt;&lt;br&gt;  
            &lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/checkbox.png" alt="checkbox">
        <hr>
        <h3>7. &lt;input type="button"&gt;:</h3>
        The &lt;input&gt; type "button" defines a simple push button, which can be programmed to control a functionally
        on any event such as, click event.
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;input type="button" value="Clcik me " onclick="alert('you are learning HTML')"&gt;  
        &lt;/form&gt; </pre>
        <h5>Examples :</h5>
        <img src="images/button.png" alt="button">
        <hr>
        <h3>8. &lt;input type="file"&gt;:</h3>
        The &lt;input&gt; element with type "file" is used to select one or more files from user device storage. Once
        you select the file, and after submission, this file can be uploaded to the server with the help of JS code and
        file API.
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;Select file to upload:&lt;/label&gt;  
            &lt;input type="file" name="newfile"&gt;  
            &lt;input type="submit" value="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/file.png" alt="file">
        <hr>
        <h3>9. &lt;input type="image"&gt;:</h3>
        The &lt;input&gt; type "image" is used to represent a submit button in the form of image.
        <h5>Examples :</h5>
        <pre class="jumbotron">
        &lt;!DOCTYPE html&gt;  
        &lt;html&gt;  
        &lt;body&gt;  
        &lt;h2&gt;Input "image" type.&lt;/h2&gt;  
        &lt;p&gt;We can create an image as submit button&lt;/p&gt; 
        &lt;form&gt;  
            &lt;label&gt;User id:&lt;/label&gt;&lt;br&gt;  
            &lt;input type="text" name="name"&gt;&lt;br&gt;&lt;br&gt;  
            &lt;input type="image" alt="Submit" src="login.png"  width="100px"&gt;  
        &lt;/form&gt;  
        &lt;/body&gt;  
        &lt;/html&gt;  </pre>
        <hr>
        <h3>HTML5 newly added <input> types element</h3>
        <h3>1. &lt;input type="color"&gt;:</h3>
        The &lt;input&gt; type "color" is used to define an input field which contains a colour. It allows a user to
        specify the colour by the visual colour interface on a browser.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            Pick your Favorite color: &lt;br&gt; &lt;br&gt;   
            &lt;input type="color" name="upclick" value="#a52a2a"&gt; Upclick&lt;br&gt; &lt;br&gt; 
            &lt;input type="color" name="downclick" value="#f5f5dc"&gt; Downclick  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/color.png" alt="color">
        <hr>
        <h3>2. &lt;input type="date"&gt;:</h3>
        The &lt;input&gt; element of type "date" generates an input field, which allows a user to input the date in a
        given format. A user can enter the date by text field or by date picker interface.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            Select Start and End Date: &lt;br&gt;&lt;br&gt; 
            &lt;input type="date" name="Startdate"&gt; Start date:&lt;br&gt;&lt;br&gt; 
            &lt;input type="date" name="Enddate"&gt; End date:&lt;br&gt;&lt;br&gt; 
            &lt;input type="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/date.png" alt="date">
        <hr>
        <h3>3. &lt;input type="datetime-local"&gt;:</h3>
        The &lt;input&gt; element of type "datetime-local" creates input filed which allow a user to select the date as
        well as local time in the hour and minute without time zone information.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;  
              Select the meeting schedule: &lt;br&gt;&lt;br&gt;  
              Select date & time: &lt;input type="datetime-local" name="meetingdate"&gt; &lt;br&gt;&lt;br&gt; 
            &lt;/label&gt;  
            &lt;input type="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/datetime-local.png" alt="datetime-local">
        <hr>
        <h3>4. &lt;input type="email"&gt;:</h3>
        The &lt;input&gt; type "email" creates an input filed which allow a user to enter the e-mail address with
        pattern validation. The multiple attributes allow a user to enter more than one email address.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;&lt;b&gt;Enter your Email-address&lt;/b&gt;&lt;/label&gt;  
            &lt;input type="email" name="email" required&gt;  
            &lt;input type="submit"&gt;  
            &lt;p&gt;&lt;strong&gt;Note:&lt;/strong&gt;User can also enter multiple email addresses separating by comma or whitespace as following: &lt;/p&gt;  
            &lt;label&gt;&lt;b&gt;Enter multiple Email-addresses&lt;/b&lt;&lt;/label&gt;  
            &lt;input type="email" name="email"  multiple&gt;  
            &lt;input type="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/email.png" alt="email">
        <hr>
        <h3>5. &lt;input type="month"&gt;:</h3>
        The &lt;input&gt; type "month" creates an input field which allows a user to easily enter month and year in the
        format of "MM, YYYY" where MM defines month value, and YYYY defines the year value. New
        <h5>Output :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label&gt;Enter your Birth Month-year: &lt;/label&gt;  
            &lt;input type="month" name="newMonth"&gt;  
            &lt;input type="submit"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/month.png" alt="month">
        <hr>
        <h3>6. &lt;input type="number"&gt;:</h3>
        The &lt;input&gt; element type number creates input filed which allows a user to enter the numeric value. You
        can also restrict to enter a minimum and maximum value using min and max attribute.
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label>Enter your age: &lt;/label&gt;  
            &lt;input type="number" name="num" min="50" max="80"&gt;  
            &lt;input type="submit"&gt;  
        &lt;/form&gt;   </pre>
        <h5>Output :</h5>
        <img src="images/number.png" alt="number">
        <hr>
        <h3>7. &lt;input type="url"&gt;:</h3>
        The &lt;input&gt; element of type "url" creates an input filed which enables user to enter the URL.
        <h5>Example :</h5>
        <pre class="jumbotron">
        &lt;form&gt;  
            &lt;label>Enter your website URL: &lt;/label&gt;  
            &lt;input type="url" name="website" placeholder="http://example.com">&lt;br&gt;  
            &lt;input type="submit" value="send data"&gt;  
        &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/url.png" alt="url">
        <hr>
        <h3>8. &lt;input type="week"&gt;:</h3>
        The &lt;input&gt; type week creates an input field which allows a user to select a week and year form the
        drop-down calendar without time zone.
        <h5>Example</h5>
        <pre class="jumbotron">
                    &lt;form&gt;  
                        &lt;label&gt;&lt;b&gt;Select your best week of year:&lt;/b&gt;&lt;/label&gt;&lt;br&gt;&lt;br&gt;  
                        &lt;input type="week" name="bestweek"&gt;  
                        &lt;input type="submit" value="Send data"&gt;  
                    &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/week.png" alt="week">
        <hr>
        <h3>9. &lt;input type="search"&gt;:</h3>
        The &lt;input&gt; type "search" creates an input filed which allows a user to enter a search string. These are
        functionally symmetrical to the text input type, but may be styled differently.
        <h5>Example :</h5>
        <pre class="jumbotron">
                    &lt;form&gt;  
                        &lt;label&gt;Search here:&lt;/label&gt;  
                        &lt;input type="search" name="q"&gt;  
                        &lt;input type="submit" value="search"&gt;  
                    &lt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/search.png" alt="search">
        <hr>
        <h3>10. &lt;input type="tel"&gt;:</h3>
        The &lt;input&gt; element of type ?tel? creates an input filed to enter the telephone number. The "tel" type
        does not have default validation such as email, because telephone number pattern can vary worldwide.
        <h5>Example :</h5>
        <pre class="jumbotron">
                    &lt;form&gt;  
                        &lt;label&gt;&lt;b&gt;Enter your Telephone Number(in format of xxx-xxx-xxxx):&lt;/b&gt;&lt;/label&gt;  
                        &lt;input type="tel" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required&gt;  
                        &lt;input type="submit"&gt;&lt;br&gt;&lt;br&gt;  
                    &gt;/form&gt; </pre>
        <h5>Output :</h5>
        <img src="images/tel.png" alt="alt">
        <hr>



        <div class="mb-2">
            <a href="html-18.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-20.php" class="btn btn-outline-primary">Next
                <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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