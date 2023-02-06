<?php include 'view/header_member.php'; ?>

<div class="container page-overlay">  
   <h2>Featured products</h2>
   <hr class="hr" style="margin-top: 0rem">
   <p>We have a great collection of IT related products including software, hardware, and network that add value to your business.</p>
    
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
  <!-- display products -->
   <div class="row">
      <div class="col-md-8">
         <table class="table table-content table-border">
            <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0">
               <td class="right">
                  <img src="images/<?php echo $product['productCode']; ?>_s.png" alt="&nbsp;">
               </td>
               <td>
                  <p>
                     <b style="font-size: 25px"><a href="catalog?product_id=<?php echo
                     $product['productID']; ?>" style="color: #ffc107 !important">
                     <?php echo $product['productName']; ?>
                     </a></b>
                  </p>
                  <p>
                     <b>Your price:</b>
                     $<?php echo number_format($unit_price, 2); ?>
                  </p>
                  <p>
                     <?php echo $description; ?>
                  </p>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
      </div>
      <div class="col-md-4">
         <?php include 'view/sidebar_member.php'; ?>
      </div>
   </div>
</div>

<?php include 'view/footer.php'; ?>
