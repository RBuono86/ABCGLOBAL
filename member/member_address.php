<?php include '../view/header_member.php'; ?>

<div class="container section page-overlay"> 
  <form action="index.php" method="post" id="edit_address_form">
    <div class="row">
      <div class="col-md-10">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
            <li class="breadcrumb-item active"><?php echo $heading; ?></li>
          </ol>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <input type="hidden" name="action" value="update_address" />
          <button class="btn btn-primary btn-block" style="margin: 5px -0.5rem">Update</button>
        </div>
      </div>
    </div>  
    <hr class="hr" style="margin-top: 0rem">
    <?php if ($billing) : ?>
      <input type="hidden" name="address_type" value="billing" />
    <?php else: ?>
      <input type="hidden" name="address_type" value="shipping" />
    <?php endif; ?>

    <div class="row">
      <div class="col-md-8">
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Address</label>
          <input type="text" required="vital" class="form-control" name="line1" value="<?php echo $line1; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Line 2</label>
          <input type="text" class="form-control" name="line2" value="<?php echo $line2; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">City</label>
          <input type="text" class="form-control" name="city" value="<?php echo $city; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">State</label>
          <input type="text" class="form-control" name="state" value="<?php echo $state; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Zip Code</label>
          <input type="text" class="form-control" name="zip" value="<?php echo $zip; ?>">
        </div>
        <div class="form-group">
          <label style="margin-bottom:-0.5rem !important">Phone</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
        </div>
      </div>
      <div class="col-md-4">
        <?php include '../view/sidebar_member.php'; ?>
      </div>
    </div>  
  </form>
</div>

<?php include '../view/footer.php'; ?>
