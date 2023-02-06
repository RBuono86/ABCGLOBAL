<?php include '../view/header_member.php'; ?>
<div class="container section input-form"> <!-- The input-form class creates a light black transparent background -->
   
  <form action="index.php" method="post">
    <div class="row">
      <div class="col-md-10">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
            <li class="breadcrumb-item active">Modify Member Account</li>
          </ol>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <input type="hidden" name="action" value="update_account" />
          <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Update</button>
        </div>
      </div>
    </div>  
    <hr class="hr" style="margin-top: 0rem">
    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">E-Mail</label>
          <input type="email" required="vital" class="form-control" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">First Name</label>
          <input type="text" required="vital" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Last Name</label>
          <input type="text" required="vital" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Password</label>
          <input type="password" required="vital" class="form-control" name="password_1">Leave blank to keep old password
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Retype Password</label>
          <input type="password" required="vital" class="form-control" name="password_2">
        </div>
      </div>
      <div class="col-md-4">
        <?php include '../view/sidebar_member.php'; ?>
      </div>
    </div>
  </form>
</div>

<?php include '../view/footer.php'; ?>