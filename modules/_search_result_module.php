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


    <title>IND-Learning - Search Result</title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

    <style>
        h1,
        h2,
        h5 {
            font-style: italic;
            font-weight: lighter;
            color: #007bff;
        }

        .jumbotron {
            border-radius: 10px;
        }

        .jumbotron h1 {
            color: black;
        }
    </style>

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include '_header_module.php';

    ?>


    <!-- ----------------Search Result------------ -->
    <div class="container my-3">
        <h1>Search results for "<spam class="font-italic"><?php echo $_GET['search_query']; ?>"</spam>
        </h1>


        <hr>
        <h2>Courses result</h2>
        <?php
        include '_database_connection.php';
        $search_query = $_GET["search_query"];
        $sql_query = "SELECT * FROM `courses` WHERE MATCH (course_name,course_description) against ('$search_query')";
        $result = mysqli_query($connection, $sql_query);

        $noresult = true;
        echo '<div class="jumbotron">';
        while ($row = mysqli_fetch_assoc($result)) {
            $noresult = false;
            echo '<h5><a href="/ind-learning/' . $row["course_image_name"] . '-1.php">' . $row["course_name"] . '</a></h5>
                  <p>' . $row["course_description"] . '</p>';
        }
        if ($noresult) {
            echo '<h1 class="display-4">No result found</h1>';
        }
        echo '</div>';
        ?>


        <hr>
        <h2>Query result</h2>
        <?php
        include '_database_connection.php';
        $search_query = $_GET["search_query"];
        $sql_query = "SELECT * FROM `querys` WHERE MATCH (query,subject) against ('$search_query')";
        $result = mysqli_query($connection, $sql_query);

        $noresult = true;

        echo '<div class="jumbotron">';
        while ($row = mysqli_fetch_assoc($result)) {
            $noresult = false;
            echo '<h5><a href="/ind-learning/modules/_comments_module.php?querynumber=' . $row["s_no"] . '">' . $row["query"] . '</a></h5>
            <p>Posted by : "<spam>' . $row["user_name"] . '</spam>"</p>';
        }
        if ($noresult) {
            echo '<h1 class="display-4">No result found</h1>';
        }
        echo '</div>';
        ?>


        <hr>
        <h2>Comments result</h2>
        <?php
        include '_database_connection.php';
        $search_query = $_GET["search_query"];
        $sql_query = "SELECT * FROM `comments` WHERE MATCH (comment,user_name) against ('$search_query')";
        $result = mysqli_query($connection, $sql_query);

        $noresult = true;

        echo '<div class="jumbotron">';
        while ($row = mysqli_fetch_assoc($result)) {
            $noresult = false;
            echo '<h5><a href="/ind-learning/modules/_comments_module.php?querynumber=' . $row["query_no"] . '">' . $row["comment"] . '</a></h5>
                    <p>Posted by : "<spam>' . $row["user_name"] . '</spam>"</p>';
        }
        if ($noresult) {
            echo '<h1 class="display-4">No result found</h1>';
        }
        echo '</div>';
        ?>

    </div>




    <!-- ------Footer Module----- -->
    <?php

    include '_footer_module.php';

    ?>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>