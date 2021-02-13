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

  <title>IND-Learning - Home page</title>

  <link rel="stylesheet" href="/ind-learning/stylesheet/style.css">

</head>

<body>
  <!-- -----------------Header Module--------------- -->
  <?php

  include 'modules/_header_module.php';

  ?>


  <!-- ------Curosel for photos section------ -->
  <section>
    <div id="carouselPhotos" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselPhotos" data-slide-to="0" class="active"></li>
        <li data-target="#carouselPhotos" data-slide-to="1"></li>
        <li data-target="#carouselPhotos" data-slide-to="2"></li>
        <li data-target="#carouselPhotos" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/img-1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img-2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img-3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/img-4.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselPhotos" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselPhotos" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  <!-- -----------Main content section------------ -->
  <section class="mt-3 mb-3" id="all-courses">
    <h1 class="text-center text-primary font-weight-light font-italic">All Courses</h1>
    <div class="container mt-3 mb-3">
      <div class="row row-cols-1 row-cols-md-3">

        <?php
        include 'modules/_database_connection.php';

        $sql_query = "Select * from `courses`";
        $result = mysqli_query($connection, $sql_query);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col mb-4">
                  <div class="card border-primary">
                    <img src="images/' . $row["course_image_name"] . '.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">' . $row["course_name"] . '</h5>
                      <p class="card-text overflow-auto" style="height: 125px;">' . $row["course_description"] . '</p>
                      <a href="/ind-learning/' . $row["course_url"] . '-1.php" class="btn btn-outline-primary">Go Tutorials <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>';
        }
        ?>


      </div>
    </div>
  </section>


  <!-- ----------------About us section -->
  <section class="mt-3 mb-3" id="about-us">
    <h1 class="text-center text-primary font-weight-light font-italic">About Us</h1>
    <div class="container mt-3 mb-3">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">

        <?php
        include 'modules/_database_connection.php';

        $sql_query = "Select * from `about`";
        $result = mysqli_query($connection, $sql_query);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col mb-3">
                  <div class="card text-center border-none" style="border: none;">
                    <img src="images/' . $row["image_name"] . '.png" class="card-img-top border border-primary" style="width: 120px; border-radius:50%; margin: auto;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-danger">' . $row["name"] . '</h5>
                      <p class="text-primary font-weight-light font-italic">' . $row["job_name"] . '</p>
                      <p class="card-text">
                        <i class="fa fa-quote-left text-danger"></i>
                        ' . $row["qualification"] . '
                        <i class="fa fa-quote-right text-danger"></i>
                      </p>
                    </div>
                  </div>
                </div>';
        }
        ?>

      </div>
  </section>

  <!-- ----------------Testimonials section -->
  <section class="mt-3 mb-3">
    <h1 class="text-center text-primary font-weight-light font-italic">Testimonials</h1>
    <div class="container mt-3 mb-3">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">


      <?php
        include 'modules/_database_connection.php';

        $sql_query = "Select * from `testimonials`";
        $result = mysqli_query($connection, $sql_query);

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col mb-3">
                  <div class="card border-0" style="text-align:center;">
                    <div class="card-body">
                      <p class="card-text mb-1">
                        <i class="fa fa-quote-left text-danger"></i>
                        ' . $row["test_description"] . '
                        <i class="fa fa-quote-right text-danger"></i>
                      </p>
                      <div class="text-danger">';

                        for ($i=0; $i < 5; $i++) { 
                          if($i<$row["test_rating"]){
                            echo '<i class="fa fa-star"></i>';
                          }else{
                            echo '<i class="fa fa-star-o"></i>';
                          }
                        }

                echo '</div>
                      <h5 class="card-title mt-1 mb-2">' . $row["test_name"] . '</h5>
                      <img src="images/' . $row["image_name"] . '.png" class="card-img-top border border-primary rounded-circle" style="width:75px; margin:auto;" alt="...">
                    </div>
                  </div>
                </div>';
        }

      ?>


      </div>
    </div>
  </section>


  <!-- ---------Sponsers section------------ -->
  <section class="mt-3 mb-3">
    <h1 class="text-center text-primary font-weight-light font-italic">Sponsers</h1>
    <div id="carouselSponser" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item text-center active">
          <img src="images/logo-coca-cola.png" alt="...">
        </div>
        <div class="carousel-item text-center">
          <img src="images/logo-godrej.png" alt="...">
        </div>
        <div class="carousel-item text-center">
          <img src="images/logo-oppo.png" alt="...">
        </div>
        <div class="carousel-item text-center">
          <img src="images/logo-paypal.png" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselSponser" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselSponser" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- ------------Google Map---------- -->
  <section class="mt-3 mb-3">
    <div class="container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.63219193845!2d77.09337991456192!3d28.730536086390455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d06e8703a46b3%3A0x2e01057562e081f9!2sSirifort%20Institute%20Of%20Management%20Studies!5e0!3m2!1sen!2sin!4v1607503585894!5m2!1sen!2sin" class="container" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </section>

  <!-- -----------Contact us section------------ -->
  <section class="mt-3 mb-3" id="contact-us">
    <h1 class="text-center text-primary font-weight-light font-italic">Contact Us</h1>
    <div class="container mt-3 mb-3" style="width:50%;">
      <form action="/ind-learning/modules/_contact_handle.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="number" class="form-control" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <div class="form-group">
          <label for="suggestion">Suggestion</label>
          <textarea class="form-control" id="suggestion" name="suggestion" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>


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