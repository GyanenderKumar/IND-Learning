<?php

    $sub="java";
    $pag="2";

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

    <title>Java Getting Started</title>

    <link rel="stylesheet" href="stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include 'modules/_header_module.php';

    ?>


    <!-- ----------Java Getting Started------------ -->
    <div class="container">
        <h1>Java Getting Started</h1>
        <div>
            <a href="java-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>


        <hr>
        <h3>Java Install</h3>
        <p>
            Java installed on your computer, you can download it for free from
            oracle.com.
        </p>
        <p>To install Java on Windows:</p>
        <ol>
            <li>
                Go to "System Properties" (Can be found on Control Panel > System and
                Security > System > Advanced System Settings)

            </li>
            <li>
                Click on the "Environment variables" button under the "Advanced" tab
            </li>
            <li>
                Then, select the "Path" variable in System variables and click on the "Edit"
                button
            </li>
            <li>
                Click on the "New" button and add the path where Java is installed, followed by
                \bin. By default, Java is installed in C:\Program Files\Java\jdk-11.0.1 (If
                nothing else was specified when you installed it). In that case, You will have to
                add a new path with: C:\Program Files\Java\jdk-11.0.1\bin
                Then, click "OK", and save the settings

            </li>
            <li>
                At last, open Command Prompt (cmd.exe) and type java -version to see if Java
                is running on your machine
            </li>

        </ol>


        <hr>
        <h3>Java Quickstart</h3>
        <p>
            In Java, every application begins with a class name, and that class must match the
            filename.
            <br>
            Let's create our first Java file, called MyClass.java, which can be done in any text
            editor (like Notepad).
            <br>
            The file should contain a "Hello World" message, which is written with the following
            code:
        </p>
        <pre class="jumbotron">
            public class MyClass {
                public static void main(String[] args) {
                    System.out.println("Hello World");
                }
            }</pre>

        <p>
            Save the code in Notepad as "MyClass.java". Open Command Prompt (cmd.exe),
            navigate to the directory where you saved your file, and type "javac MyClass.java":
        </p>
        <pre class="jumbotron">
            C:\Users\Your Name>javac MyClass.java</pre>

        <p>
            This will compile your code. If there are no errors in the code, the command prompt
            will take you to the next line. Now, type "java MyClass" to run the file:
        </p>
        <pre class="jumbotron">
            C:\Users\Your Name>java MyClass</pre>

        <p>
            The output should read:
        </p>
        <pre class="jumbotron">
            Hello World</pre>

        <p>
            <b>Congratulations!</b> You have written and executed your first Java program.
        </p>


        <hr>
        <div class="mb-2">
            <a href="java-1.php" class="btn btn-outline-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</a>
            <a href="java-3.php" class="btn btn-outline-primary">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>