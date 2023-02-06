<?php include 'view/header_admin.php'; ?>

<div class="container input-form">  <!-- The input-form class creates a light black transparent background -->
  <div class="row">
    <div class="col-md-8">
      <ol class="breadcrumb">
        <li class="breadcrumb-item" style="margin-left: -10px"><a href="<?php echo $app_path.'admin/'; ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/orders'; ?>">Orders</a></li>
        <li class="breadcrumb-item active">Delete Order</li>
      </ol>
    </div>
    <!-- display buttons -->
    <div class="col-md-2">
      <form action="index.php" method="post" >
        <button class="btn btn-primary btn-block" style="margin: 5px 0px">Cancel</button>
      </form>
    </div>
    <div class="col-md-2">
      <form action="index.php" method="post" >
        <input type="hidden" name="action" value="delete" />
        <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
        <button class="btn btn-danger btn-block" style="margin: 5px 0px">Delete</button>
      </form>
    </div>
  </div>
  <hr class="hr">
  <div class="row">
    <div class="col-md-12">
      <h3 class="section-head" style="margin-bottom: 1.5rem;">Are you sure you want to <span style="color:#ffc107">delete</span> this order?</h3>
      <p style="display: inline-block;">Order Number:</p> 
      <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $order_id; ?></p><br>
      <p style="display: inline-block;">Order Date:</p> 
      <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $order_date; ?></p><br>
      <p style="display: inline-block;">Member:</p> 
      <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $name . ' (' . $email . ')'; ?></p>
    </div>
  </div>
</div>

<?php include 'view/footer.php'; ?>
