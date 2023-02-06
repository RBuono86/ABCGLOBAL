<?php include 'view/header_admin.php'; ?>

<div class="container section page-overlay"> 
  <div class="row">
    <div class="col-md-12">
      <h2 class="section-head">Admin Accounts</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <?php if (isset($_SESSION['admin'])) : ?>
      <h3>Your Account</h3>
        <form action="index.php" method="post">
          <input type="hidden" name="action" value="view_edit" /> 
          <table class="table table-content table-border">
            <tr>
              <td><?php echo $name . ' (' . $email . ')'; ?>
                <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
              </td> 
              <td><button class="btn btn-primary btn-block" style="margin: 5px 0px">Modify</button></td>
            </tr>
          </table>
        </form>
      <?php endif; ?>

      <?php if ( count($admins) > 1 ) : ?>
        <h3>Other Administrators</h3>
        <table class="table table-content table-border">
          <?php foreach($admins as $admin):
            if ( $admin['adminID'] != $admin_id ) :
          ?>
          <tr>
            <td><?php echo $admin['lName'] . ', ' . $admin['fName']; ?></td>
            <td>
              <form action="index.php" method="post">
                <input type="hidden" name="action" value="view_edit" />
                <input type="hidden" name="admin_id" value="<?php echo $admin['adminID']; ?>" />
                <button class="btn btn-primary btn-block" style="margin: 5px 0px">Modify</button>
              </form>
            </td>
            <td>
              <form action="index.php" method="post">
                <input type="hidden" name="action" value="view_delete_confirm" />
                <input type="hidden" name="admin_id" value="<?php echo $admin['adminID']; ?>" />
                <button class="btn btn-danger btn-block" style="margin: 5px 0px">Delete</button>
              </form>
            </td>
          </tr>
          <?php endif; ?>
          <?php endforeach; ?>
        </table>
      <?php endif; ?>
    </div>

    <div class="col-md-4">
      <h3>Add Administrator</h3>
      <hr class="hr">
      <form action="index.php" method="post">
        <input type="hidden" name="action" value="create">
        <table class="table table-content table-border">
          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">E-Mail</label>
            <input type="email" required="vital" class="form-control" name="email" placeholder="me@example.com" value="<?php echo isset($_SESSION['form_data']['email']); ?>">
          </div>

          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">First Name</label>
            <input type="text" required="vital" class="form-control" name="first_name" required="vital" value="<?php echo isset($_SESSION['form_data']['first_name']); ?>">
          </div>

          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">Last Name</label>
            <input type="text" required="vital" class="form-control" name="last_name" required="vital" value="<?php echo isset($_SESSION['form_data']['last_name']); ?>">
          </div>

          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">Password</label>
            <input type="password" required="vital" class="form-control" name="password_1">
          </div>

          <div class="form-group">
            <label style="margin-bottom:-0.5rem !important">Retype password:</label>
            <input type="password" required="vital" class="form-control" name="password_2">
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" style="margin: 5px 0px">Add</button>
          </div>
        </table>
      </form>
    </div>
  </div>
</div>

<?php
if (isset($_SESSION['form_data'])) {
    unset($_SESSION['form_data']);
}
?>

<?php include 'view/footer.php'; ?>
