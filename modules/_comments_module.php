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


    <title>IND-Learning - Comments</title>


    <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
    <!-- -----------------Header Module--------------- -->
    <?php

    include '_header_module.php';

    ?>


    <?php

    if (isset($_GET["querynumber"])) {
        $querynumber = $_GET["querynumber"];

        include "_database_connection.php";
        $sql_query = "Select * from `querys` where s_no = '$querynumber'";
        $result = mysqli_query($connection, $sql_query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="container my-3">
                    <div class="jumbotron" style="border-radius:10px;">
                        <h1 class="display-4"><spam class="font-weight-bold">Query : </spam>' . $row["query"] . '</h1>
                        <p class="lead"><b>Posted By : </b>' . strtoupper($row["user_name"]) . '<br><b>Date and Time : </b>' . $row["date_time"] . '</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="/ind-learning/' . $row["subject"] . '-' . $row["page"] . '.php" role="button">Back to Learn</a>
                    </div>
                </div>';
        }
    } else {
        echo '<div class="container my-3">
                <div class="jumbotron" style="border-radius:10px;">
                    <h1 class="display-4">Error</h1>
                </div>
            </div>';
    }
    
    ?>


    <?php

    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
        echo '<div class="container my-3">
                <form action="/ind-learning/modules/_comments_handle.php?querynumber=' . $_GET["querynumber"] . '" method="post">
                    <div class="form-group">
                        <h3>Put Our Comment</h3>
                        <textarea class="form-control"rows="3" id="comment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>';
    } else {
        echo '<div class="container my-3">
                <h3>Put Our Comment</h3>
                <div class="jumbotron" style="border-radius:10px;">
                    <h1 class="display-4">Login first if you want to put our comment.</h1>
                </div>
              </div>';
    }

    ?>


    <?php

    if (isset($_GET["querynumber"])) {
        $querynumber = $_GET["querynumber"];

        $noresult = true;

        include "_database_connection.php";
        $sql_query = "Select * from `comments` where query_no = '$querynumber'";
        $result = mysqli_query($connection, $sql_query);

        echo '<div class="container my-3">
                <h3>All Comments</h3>
                <div class="jumbotron" style="border-radius:10px;">';
        while ($row = mysqli_fetch_assoc($result)) {
            $noresult = false;
            echo '<h1 class="display-4">' . $row["comment"] . '</h1>';
        }
        if($noresult){
            echo '<h1 class="display-4">No result</h1>';
        }
        echo '</div>
            </div>';
    } else {
        echo '<div class="container my-3">
                <div class="jumbotron" style="border-radius:10px;">
                    <h1 class="display-4">Error</h1>
                </div>
            </div>';
    }

    ?>


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