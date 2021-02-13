<?php

    $sub="html";
    $pag="2";

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

    <title>HTML text Editors</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>



    <!-- ----------HTML text Editors section------------ -->
    <div class="container">
        <h1>HTML text Editors</h1>
        <div>
            <a href="html-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>HTML text Editors</h3>
        <ul>
            <li>
                An HTML file is a text file, so to create an HTML file we can use any text editors.
            </li>
            <li>
                Text editors are the programs which allow editing in a written text, hence to create a web page we need
                to write our code in some text editor.
            </li>
            <li>
                There are various types of text editors available which you can directly download, but for a beginner,
                the best text editor is Notepad (Windows) or TextEdit (Mac).
            </li>
            <li>
                After learning the basics, you can easily use other professional text editors which are, Notepad++,
                Sublime Text, Vim, etc.
            </li>
            <li>
                In our tutorial, we will use Notepad and sublime text editor. Following are some easy ways to create
                your first web page with Notepad, and sublime text.
            </li>
        </ul>


        <hr>
        <h3>HTML code with Notepad. (Recommended for Beginners)</h3>
        <p>
            Notepad is a simple text editor and suitable for beginners to learn HTML. It is available in all versions of
            Windows, from where you easily access it.
        </p>
        <p>
            <b>Step 1: Open Notepad (Windows)</b>
        </p>

        <div class="container mt-3 mb-3">
            <img src="images/text-editors.png" alt="text-editors" />
        </div>

        <p>
            <b>Step 2: Write code in HTML</b>
        </p>

        <div class="container mt-3 mb-3">
            <img src="images/text-editors2.png" alt="text-editors2" />
        </div>

        <p>
            <b>Step 3: Save the HTML file with .htm or .html extension.</b>
        </p>

        <div class="container mt-3 mb-3">
            <img src="images/text-editors3.png" alt="text-editors3" />
        </div>

        <p>
            <b>Step 4: Open the HTML page in your web browser.</b>
        </p>
        <p>
            To run the HTML page, you need to open the file location, where you have saved the file and then either
            double-click on file or click on open with option.
        </p>

        <div class="container mt-3 mb-3">
            <img src="images/text-editors4.png" alt="text-editors4" />
        </div>


        <div class="container mt-3 mb-3">
            <img src="images/text-editors5.png" alt="text-editors5" />
        </div>



        <hr>
        <div class="mb-2">
            <a href="html-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                Previous</a>
            <a href="html-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right"
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