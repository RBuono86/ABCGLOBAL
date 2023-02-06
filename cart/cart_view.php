<?php include '../view/header_member.php'; ?>
<div class="container section page-overlay"> 
    <div class="col-md-8">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
            <li class="breadcrumb-item active">View Cart</li>
        </ol>
    </div>  
    <hr class="hr" style="margin-top: 0rem">
    <?php if (cart_product_count() == 0) : ?>
        <p>There are no products in your cart.</p>
    <?php else: ?>
        <p>Enter 0 in the quantity box to remove an item from your cart.</p>
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="update" />
            <table class="table table-content table-border">
            <tr class="head">
                <th class="left">Item</th>
                <th>Price&nbsp</th>
                <th>&nbspQuantity</th>
                <th>Total</th>
            </tr>
            <?php foreach ($cart as $product_id => $item) : ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>
                    <?php echo sprintf('$%.2f', $item['unit_price']); ?>
                </td>
                <td>
                    <input type="text" size="3"
                           name="items[<?php echo $product_id; ?>]"
                           value="<?php echo $item['quantity']; ?>" />
                </td>
                <td>
                    <?php echo sprintf('$%.2f', $item['line_price']); ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0;">
                <td colspan="3" ><b>Subtotal</b></td>
                <td>
                    <?php echo sprintf('$%.2f', cart_subtotal()); ?>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="Update Cart" />
                </td>
            </tr>
            </table>
        </form>
        
    <?php endif; ?>

    <p>Return to: <a href="../products.php">Featured Products</a></p>

    <!-- display most recent category -->
    <?php if (isset($_SESSION['last_category_id'])) :
        $category_url = '../catalog' . '?category_id=' . $_SESSION['last_category_id'];
    ?>
        <p>Return to: <a href="<?php echo $category_url; ?>">
    <?php echo $_SESSION['last_category_name']; ?></a></p>
    <?php endif; ?>

    <!-- if cart has products, display the Checkout link -->
    <?php if (cart_product_count() > 0) : ?>
        <p>
            Proceed to: <a href="../checkout">Checkout</a>
        </p>
    <?php endif; ?>
</div>


<?php include '../view/footer.php'; ?>
