<?php include '../../view/header_admin.php'; ?>

<div class="container section page-overlay"> 
  <div class="row">
    <div class="col-md-12">
      <h2 class="section-head">Manage Products</h2>
    </div>
    <?php include '../../view/sidebar_admin.php'; ?>
    <div class="col-md-10">
      <?php if (count($products) == 0) : ?>
        <p style="color:#ffc107; font-size: 1.75rem">There are no products for this category.</p>
      <?php else : ?>
        <h2 style="color:#ffc107; font-size: 1.25rem; float: left"><?php echo $current_category['categoryName']; ?></h2>
      <?php endif; ?>

      <a style="float: right; color: #fff" href="index.php?action=show_add_edit_form">Add a new Product</a>
      <?php
        if (count($products) > 0) {
      ?>
        <table class="table table-content table-border">
          <thead>
            <th>S.No.</th>
            <th>Image</th>
            <th>Product</th>
            <th>Category</th>
            <th>List Price</th>
            <th>Discount%</th>
            <th>Date Added</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php
            $serial = $offset + 1;
            foreach ($products as $product) : ?>
              <tr>
                <td><?php echo $serial; ?></td>
                <?php $image_filename = $product['productCode'] . '_m.png'; ?>
                <td><img src="<?php echo $app_path.'images/'.$image_filename; ?>" width="50" height="50"></td>  <!-- Product Image based on product code (TIM) -->
                <td><?php echo $product['productName']; ?></td>
                <td><?php echo $product['categoryName']; ?></td>
                <td><?php echo $product['listPrice']; ?></td>
                <td><?php echo $product['discountPercent']; ?></td>
                <td><?php echo $product['dateAdded']; ?></td>
                <td><a href="?action=view_product&amp;product_id=<?php echo $product['productID']; ?>"><i class='fa fa-edit'></i></a></td>
                <?php $product_order_count = get_product_order_count($product['productID']); 
                if ($product_order_count == 0) : ?> <!-- If not used in any Order -->
                  <td><a href='?action=delete_product&amp;product_id=<?php echo $product['productID']; ?>&category_id=<?php echo $product['categoryID']; ?>'><i class='fa fa-trash-o'></i></a></td>
                <?php else: ?>
                  <td></td>
                <?php endif; ?>
              </tr>
              <?php
              $serial++;
            endforeach; ?>
          </tbody>
        </table>
      <?php
      }else {
        echo "<h3>No Results Found.</h3>";
      }
      // Pagination
      if (count($products) > 0) { ?>
        <div>
          <form method="post" action="" id="pagination_form">
            <label for="num_rows" style="color:white">Number of records:</label>
            <select id="num_rows" name="num_rows">  <!-- Select List -->
              <?php
              $numrows_arr = array("1","2","3","10","25","50","100");
              foreach($numrows_arr as $nrow){
                if(isset($_POST['num_rows']) && $_POST['num_rows'] == $nrow){
                  echo '<option value="'.$nrow.'" selected="selected">'.$nrow.'</option>';
                }else{
                  echo '<option value="'.$nrow.'">'.$nrow.'</option>';
                }
              }
              ?>
            </select>

            <?php 
              $total_pages = ceil($products_records / $rowperpage);
              echo '<ul class="pagination">';
              $first_category = first_category();  // Fetch ID of first category using a function in Product_Lib.php
              if($page > 1){
                if (is_null($_GET['category_id'])){
                  echo '<li><a href="index.php?page='.($page - 1).'&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $first_category .'">Previous</a></li>';
                }else{
                  echo '<li><a href="index.php?page='.($page - 1).'&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $_GET['category_id'] .'">Previous</a></li>';
                }  
              }
              for($i = 1; $i <= $total_pages; $i++){
                if($i == $page){
                  $active = "active";
                }else{
                  $active = "";
                }
                if (is_null($_GET['category_id'])){
                  echo '<li class="'.$active.'"><a href="index.php?page='.($i).'&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $first_category .'">'.$i.'</a></li>';
                }else{
                  echo '<li class="'.$active.'"><a href="index.php?page='.($i).'&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $_GET['category_id'] .'">'.$i.'</a></li>';
                }
              }
              if($total_pages > $page){
                if (is_null($_GET['category_id'])){
                  echo '<li><a href="?page='.($page + 1).'index.php?&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $first_category .'">Next</a></li>';
                }else{
                  echo '<li><a href="?page='.($page + 1).'index.php?&amp;rowperpage=' . $rowperpage . '&amp;category_id=' . $_GET['category_id'] .'">Next</a></li>';
                }  
              }
              echo '</ul>';
            ?>
          </form>
        </div>
      <?php } ?>  
    </div>
  </div>
</div>

<?php include '../../view/footer.php'; ?>