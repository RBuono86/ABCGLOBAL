<?php include '../../view/header_admin.php'; ?>

      <div class="container page-overlay"> 
        <div class="row">
          <div class="col-md-8">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/'; ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/product'; ?>">Products</a></li>
              <li class="breadcrumb-item active">View Product</li>
            </ol>
          </div>  
          <!-- display buttons -->
          <div class="col-md-2">
            <?php if (get_product_order_count($product_id) == 0) : ?> <!-- If not used in any Order. -->
            <form action="index.php" method="post" >
              <input type="hidden" name="action" value="delete_product">
              <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
              <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">
              <button class="btn btn-danger btn-block" style="margin: 5px 0px">Delete</button>
            </form>
            <?php endif; ?>
          </div>
          <div class="col-md-2">
            <form action="index.php" method="post" >
              <input type="hidden" name="action" value="show_add_edit_form">
              <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
              <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">
              <button class="btn btn-primary btn-block" style="margin: 5px 0px">Modify</button>
            </form>
          </div>
        </div>

        <hr class="hr" style="margin-top: 0rem">
        <div class="row">
          <div class="col-md-8">
            <!-- display product -->
            <?php include '../../view/product.php'; ?>
          </div>
          <div class="col-md-4">
            <h2>Image Manager</h2>
            <form action="index.php" method="post" enctype="multipart/form-data" id="upload_image_form">
              <input type="hidden" name="action" value="upload_image">
              <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
              <input type="file" name="file1">
              <button class="btn btn-warning" style="margin-left:-60px"><span class="fa fa-upload"></span></button>
            </form>
            <p style="margin-bottom:0px"><a href="../../images/<?php echo $product['productCode']; ?>.png">View large image</a></p>
            <p style="margin-bottom:0px"><a href="../../images/<?php echo $product['productCode']; ?>_s.png">View small image</a></p>
          </div>
        </div>
      </div>

<?php include '../../view/footer.php'; ?>
