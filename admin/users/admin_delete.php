<?php include 'view/header_admin.php'; ?>
<div class="container section page-overlay"> 
  <div class="row">
    <div class="col-md-12">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/'; ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/users'; ?>">Admin Accounts</a></li>
        <li class="breadcrumb-item active">Delete Admin Account</li>
      </ol>
      <hr class="hr" style="margin-top: 0rem">
    </div>  
  </div>

  <div class="row">  
    <div class="col-md-12">
      <h2>Delete Account</h2>
      <p>Are you sure you want to delete the account for <?php echo $last_name . ', ' . $first_name . ' (' . $email . ')'; ?>?</p>
      <hr class="hr" style="margin-top: 0rem">
    </div>
  </div>

  <div class="row">
    <div class="col-md-8"></div>
      <div class="col-md-2">
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="delete" />
            <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>" />
            <button class="btn btn-danger btn-block" style="margin: 5px -0.5rem">Delete</button>
            <!--<input type="image" id="right_button" src="<?php echo $app_path; ?>images/delete.png">-->
        </form>
      </div>  
      <div class="col-md-2">
        <form action="index.php" method="post">
          <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Cancel</button>
          <!--<input type="image" id="right_button" src="<?php echo $app_path; ?>images/cancel.png">-->
        </form><br/><br/>
      </div>  
    </div>
  </div>
</div>

<?php include 'view/footer.php'; ?>
