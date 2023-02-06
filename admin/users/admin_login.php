<?php include 'view/header_admin.php'; ?>
  <!----Login Form---->
  <form action="index.php" method="post">
      <div class="container login-form">
          <input type="hidden" name="action" value="login" />
          <h3>Admin Login</h3>
          <hr class="hr">
          <div class="row">
              <div class="col-md-5 mx-auto">
                  <div class="form-group text-box">
                      <i class="fa fa-user"></i>
                      <input type="email" name="usremail" maxlength="35" size="35" required="vital" autofocus placeholder="me@example.com" class="form-control">
                  </div>

                  <div class="form-group text-box">
                      <i class="fa fa-lock"></i>
                      <input type="password" name="password" required="vital" placeholder="password" class="form-control">
                  </div>
                  
                  <div class="form-group">
                      <button class="btn btn-warning btn-block">Log in</button>
                  </div>
              </div>
          </div>
      </div>
  </form>
<?php include 'view/footer.php'; ?>
