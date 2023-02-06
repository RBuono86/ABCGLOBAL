<?php include '../view/header_member.php'; ?>
<div class="container section page-overlay"> 
  <div class="col-md-8">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
        <li class="breadcrumb-item active">Products by Category</li>
      </ol>
  </div>  
  <hr class="hr" style="margin-top: 0rem">
  <div class="row">
		<div class="col-md-8">
      <h3 style="margin-left: 30px"><?php echo $category_name; ?></h3>
      <?php if (count($products) == 0) : ?>
        <p>There are no products in this category.</p>
      <?php else: ?>
        <table>
      
        <?php foreach ($products as $product) :
          
          // Get product data
          
          $list_price = $product['listPrice'];
          
          $discount_percent = $product['discountPercent'];
          
          $description = $product['description'];
          
          
          // Calculate unit price
          
          $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
          
          $unit_price = $list_price - $discount_amount;

          
          // Get first paragraph of description
          
          $description = add_tags($description);
          
          $i = strpos($description, "</p>");
          
          $description = substr($description, 3, $i);
        
        ?>
          
          <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0">
              
            <td>
                  
                <img src="../images/<?php echo $product['productCode']; ?>_s.png" alt="&nbsp;" style="margin-left: 30px">
              
            </td>
              
            <td>
                  
                <p>
                      
                  <b><a href="<?php echo '?product_id=' . $product['productID']; ?>" style="margin-left: 30px; font-size:25px">
                    <?php echo $product['productName']; ?>
                  </a></b>
                </p>
                  
                <p>
                      
                  <b style="margin-left: 30px">Your price:</b>
                      
                  $<?php echo number_format($unit_price, 2); ?>
                  
                </p>
                  
                <p style="margin-left: 30px">
                      
                  <?php echo $description; ?>
                  
                </p>
              
            </td>

          </tr>
        
        <?php endforeach; ?>
      
        </table>

      <?php endif; ?>
    </div>
    <div class="col-md-4">
	  	<?php include '../view/sidebar_member.php'; ?>
  	</div>					
  </div>
</div>

<?php include '../view/footer.php'; ?>
