<?php include 'view/header_member.php'; ?>

<!--<section class="content">
  <section class="signin">
     <h2>Member Login</h2>
     <form action="index.php" method="post" id="login_form">
        <input type="hidden" name="action" value="login" />
        <label>E-mail Address:<br />
        <input type="email" name="email" maxlength="35" size="35" required="vital" autofocus placeholder="me@example.com"/></label><br />
        <label>Password:<br />
        <input type="password" name="password" required="vital"/></label>
        <p><input type="image" alt="Login" src="<?php echo $app_path; ?>images/login.png"></p>
        <p>
          <a href="member_register.php">Register&nbsp&nbsp</a>
          <a href="member_password.php">Forgot password?</a>
        </p>
     </form>
  </section>
</section>-->

<form action="index.php" method="post" id="login_form">
        <div class="container login-form">
            <input type="hidden" name="action" value="login" />
            <h3>Member Login</h3>
            <hr>
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="form-group text-box">
                        <i class="fa fa-user"></i>
                        <input type="email" name="email" maxlength="35" size="35" required="vital" autofocus placeholder="me@example.com" class="form-control">
                    </div>

                    <div class="form-group text-box">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" required="vital" placeholder="password" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-warning btn-block">Log in</button>
                    </div>
                    <p class="register">
                    <a href="member_password.php">Forgot password?</a>
                    <a href="member_register.php">Register&nbsp&nbsp</a>
                    </p>
                </div>
            </div>
        </div>
    </form>


<!-- The following line is commented out using double forward slashes to hide sidebar -->
<?php //include 'view/sidebar_member.php'; ?>

<?php include 'view/footer.php'; ?>