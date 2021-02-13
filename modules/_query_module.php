<?php

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  echo '<form action="/ind-learning/modules/_query_handle.php?subject=' . $sub . '&page=' . $pag . '" method="post">
          <div class="form-group">
              <h3>Put Our Query</h3>
              <textarea class="form-control"rows="3" id="query" name="query"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
} else {
  echo '<h3>Put Our Query</h3>
        <div class="jumbotron" style="border-radius:10px;">
          <h1 class="display-4">Login first if you want to put our query.</h1>
        </div>';
}

include "_database_connection.php";
$sql_query = "Select * from `querys` where subject = '$sub' AND page= '$pag'";
$result = mysqli_query($connection, $sql_query);

$noresult = true;

echo '<hr>
          <div class="my-3">
            <h3>All Querys</h3>
            <div class="jumbotron" style="border-radius:10px;">';
while ($row = mysqli_fetch_assoc($result)) {

  $noresult = false;
  echo '<h1 class="display-4 nav-item"><a href="/ind-learning/modules/_comments_module.php?querynumber=' . $row["s_no"] . '" style="text-decoration:none; color:black;">' . $row["query"] . '</a></h1>';
}

if ($noresult) {
  echo '<h1 class="display-4">No result.</h1>';
}
echo '</div>
  </div>';
