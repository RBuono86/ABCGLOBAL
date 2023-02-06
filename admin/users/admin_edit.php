<?php include 'view/header_admin.php'; ?>

<div class="container section page-overlay"> 
  <div class="row">
    <div class="col-md-12">
      <form action="index.php" method="post">
        <div class="row">
          <div class="col-md-10">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/'; ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/users'; ?>">Admin Accounts</a></li>
              <li class="breadcrumb-item active">Edit Admin Account</li>
            </ol>
          </div>   
          <div class="col-md-2">
            <div class="form-group">
              <input type="hidden" name="action" value="update">
              <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
              <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Update</button>
            </div>
          </div>
        </div>  
        <hr class="hr" style="margin-top: 0rem">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
        <table class="table table-content table-border">
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
            <label style="margin-bottom:-0.5rem !important">New Password</label>
            <input type="password" class="form-control" name="password_1">Leave blank to keep old password
          </div>
          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">Retype password:</label>
            <input type="password" class="form-control" name="password_2">
          </div>
        </table>
      </form>
    </div>    
  </div>
</div>




<!--          <div class="form-group">
            <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Update</button>
          </div>
        </table>
      </form>
      <form action="" method="post">
        <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Cancel</button>
      </form>-->

    <!--<table>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
        <tr>
        <td><label for="email">E-Mail:</label></td>
        <td><input type="text" name="email" value="<?php echo $email; ?>" /></td>
        </tr>

        <tr>
        <td><label for="first_name">First Name:</label></td>
        <td><input type="text" name="first_name" value="<?php echo $first_name; ?>" /></td>
        </tr>

        <tr> 
        <td><label for="last_name">Last Name:</label></td>
        <td><input type="text" name="last_name" value="<?php echo $last_name; ?>" /></td>
        </tr>

        <tr> 
        <td><label for="password_1">New Password:</label></td>
        <td><input type="password" name="password_1" />Leave blank to keep old values</td>
        </tr>
 
        <tr>
        <td><label for="password_2">Retype Password:</label></td>
        <td><input type="password" name="password_2" /></td>
        </tr>
        <label>&nbsp;</label>
      <tr>
      <td colspan=2><input type="image" id="right_button" src="<?php echo $app_path; ?>images/update.png">
      </form>
      <td>    
        <form action="" method="post">
          <input type="image" id="right_button" src="<?php echo $app_path; ?>images/cancel.png">
        </form>
      </td>
      </tr>
    </table><br/>-->

<?php include 'view/footer.php'; ?>
