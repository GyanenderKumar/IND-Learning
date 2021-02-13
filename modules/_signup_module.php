<?php

echo '<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="signupModalLabel">Sign Up to the IND-Learning</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="container">
        <form action="/ind-learning/modules/_signup_handle.php" method="post">
          <div class="form-group">
            <label for="username">Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone
              else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small class="form-text text-muted">Enter same password both the inputs</small>
          </div>
          <div class="form-group">
          <label for="user_type">User Type</label>
          <input type="text" class="form-control" id="user_type" name="user_type">
          <small class="form-text text-muted">i.e Student OR Teacher</small>
        </div>
          <button type="submit" class="btn btn-outline-success">Sign Up</button>
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>';

?>