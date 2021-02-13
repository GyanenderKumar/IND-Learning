<?php

session_start();

echo '<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="/ind-learning/index.php"><img src="/ind-learning/images/ind-learning.jpg" style="border-radius:5px;" alt="..." width="100px"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
  aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
      <a class="nav-link" href="/ind-learning/index.php">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/ind-learning/#all-courses">All Courses</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/ind-learning/#about-us">About Us</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/ind-learning/#contact-us">Contact Us</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0" action="/ind-learning/modules/_search_result_module.php" method="GET">
    <input class="form-control mr-sm-2" name="search_query" type="search" placeholder="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search  <i class="fa fa-search" aria-hidden="true"></i></button>
  </form>';

  
  if(isset($_SESSION["loggedin"])  && $_SESSION["loggedin"]==true){
    echo '<div>
              <a href="/ind-learning/modules/_profile_module.php" class="btn btn-outline-success"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
              <a href="/ind-learning/modules/_logout_handle.php" class="btn btn-outline-danger mr-1">Logout  <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>';
  }else{
    echo '<div>
      <button class="btn btn-outline-success mr-1" data-toggle="modal" data-target="#loginModal">Login  <i class="fa fa-sign-in" aria-hidden="true"></i></button>
      <button class="btn btn-outline-success" data-toggle="modal" data-target="#signupModal">Sign Up  <i class="fa fa-user-plus" aria-hidden="true"></i></button>
    </div>';
  }
  
  
  
  echo '</div>
</nav>';


include '_login_module.php';
include '_signup_module.php';


if (isset($_GET["signupsuccess"]) && $_GET["signupsuccess"]=="true") {
  echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong>SignUp Success!</strong> You can continue and go to logIn.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
} elseif(isset($_GET["signupsuccess"]) && isset($_GET["error"])){
  echo '<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
          <strong>SignUp Failed!</strong> ERROR : ' . $_GET["error"] . '.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}

if (isset($_GET["loginsuccess"]) && $_GET["loginsuccess"]=="true") {
  echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong>LogIn Success!</strong> Welcome to IND-Learning website.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
} elseif(isset($_GET["loginsuccess"]) && isset($_GET["error"])){
  echo '<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
          <strong>LogIn Failed!</strong> ERROR : ' . $_GET["error"] . '.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}

if (isset($_GET["contactsuccess"]) && $_GET["contactsuccess"]=="true") {
  echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          <strong>Contact Success!</strong> Your details are inserted successfully. Thank you for our greatful suggesion.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
} elseif(isset($_GET["contactsuccess"]) && isset($_GET["error"])){
  echo '<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
          <strong>Contact Failed!</strong> ERROR : ' . $_GET["error"] . '.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
}

?>