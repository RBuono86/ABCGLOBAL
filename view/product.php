<?php
    // Parse data
    $category_id = $product['categoryID'];
    $product_code = $product['productCode'];
    $product_name = $product['productName'];
    $description = $product['description'];
    $list_price = $product['listPrice'];
    $discount_percent = $product['discountPercent'];

    // Add HMTL tags to the description
    $description = add_tags($description);

    // Calculate discounts
    $discount_amount = round($list_price * ($discount_percent / 100), 2);
    $unit_price = $list_price - $discount_amount;

    // Format discounts
    $discount_percent = number_format($discount_percent, 0);
    $discount_amount = number_format($discount_amount, 2);
    $unit_price = number_format($unit_price, 2);

    // Get image URL and alternate text
    $image_filename = $product_code . '_m.png';
    $image_path = $app_path . 'images/' . $image_filename;
    $image_alt = 'Image filename: ' . $image_filename;
?>
<h3><?php echo $product_name; ?></h3>
<div class="row">
    <div class="col-md-4" style="margin-top:10px">
        <img src="<?php echo $image_path; ?>" alt="<?php echo $image_alt; ?>">
    </div>    
    <div class="col-md-8" style="margin-top:12px">
        <p style="display: inline-block;">List Price:</p>
        <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo '$' . $list_price; ?></p><br>
        <p style="display: inline-block;">Discount:</p>
        <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $discount_percent . '%'; ?></p><br>
        <p style="display: inline-block;">Your Price:</p>
        <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo '$' . $unit_price; ?> (You save <?php echo '$' . $discount_amount; ?>)</p>
        <form action="<?php echo $app_path . 'cart' ?>" method="get" id="add_to_cart_form">
            <input type="hidden" name="action" value="add">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"> Quantity:&nbsp;
            <input type="text" name="quantity" value="1" size="3" maxlength="3">
            <input type="submit" value="Add to Cart">
        </form>
    </div>
</div> <!-- Row class -->

<h2>Description</h2>
<?php echo $description; ?>
