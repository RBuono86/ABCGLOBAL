<?php include '../view/header_member.php'; ?>
<div class="container section page-overlay"> 
  <div class="col-md-8">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
        <li class="breadcrumb-item active">Product Details</li>
      </ol>
  </div>  
  <hr class="hr" style="margin-top: 0rem">
  <div class="row">
		<div class="col-md-8">
      <!-- display product -->
      <?php include '../view/product.php'; ?>
    </div>
    <div class="col-md-4">
	  	<?php include '../view/sidebar_member.php'; ?>
  	</div>					
  </div>    
</div>
<?php include '../view/footer.php'; ?>
