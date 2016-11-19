<div class="jumbotron">
        <div class="container">
          <div class="card">
            <div class="card-header">
                Log in
            </div>
            <div class="card-block">
              <?php include 'incl/login.php'; ?>
            <form class="form-signin" method="POST" action="<?php echo $current_file; ?>">
              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="Email" class="sr-only">Email address</label>
              <input type="text" name="Email" class="form-control" placeholder="Email address" autofocus>
              <label for="Password" class="sr-only">Password</label>
              <input type="password" name="Password" class="form-control" placeholder="Password" style="margin-top:10px;">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
            </div>
    
        </div>
    </div>