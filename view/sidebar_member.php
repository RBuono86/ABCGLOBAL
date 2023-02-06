    <h3>Links</h3>
    <hr class="hr" style="margin-top: 0rem">
    <?php
       // If user is logged in, display My Account link
       $account_url = $app_path . 'member';
       if (isset($_SESSION['user'])) :
    ?>
         <a href="<?php echo $account_url; ?>">My Account</a><br>
       <?php endif; ?>

    <a href="<?php echo $app_path . 'cart'; ?>">View Cart</a><br>
    <a href="<?php echo $app_path . 'products.php'; ?>">Featured Products</a>

    <h3 style="margin-top: 22px;">Categories</h3>
    <hr class="hr" style="margin-top: 0rem">
    <!-- display links for all categories -->
    <?php
       require_once('model/db.php');
       require_once('model/category_lib.php');
            
       $categories = get_categories();
       foreach($categories as $category) :
           $name = $category['categoryName'];
           $id = $category['categoryID'];
           $url = $app_path . 'catalog?category_id=' . $id;
    ?>
           <a href="<?php echo $url; ?>">
             <?php echo $name; ?>
           </a><br>
       <?php endforeach; ?>
