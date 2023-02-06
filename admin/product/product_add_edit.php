<?php include '../../view/header_admin.php'; ?>

    <?php
    if (isset($product_id)) {
        $heading_text = 'Edit Product';
    } else {
        $heading_text = 'Add Product';
    }
    ?>

<form action="index.php" method="post">
    <div class="container page-overlay">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/'; ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo $app_path.'admin/product'; ?>">Products</a></li>
          <li class="breadcrumb-item active"><?php echo $heading_text; ?></li>
        </ol>
        <hr class="hr">
        <div class="row">
            <div class="col-md-8">
                <?php if (isset($product_id)) : ?>
                    <input type="hidden" name="action" value="update_product">
                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                <?php else: ?>
                    <input type="hidden" name="action" value="add_product">
                <?php endif; ?>
                    <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">

                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        <?php foreach ($categories as $category) : 
                            if ($category['categoryID'] == $product['categoryID']) {
                                $selected = 'selected';
                            } else {
                                $selected = '';
                            }
                        ?>
                            <option value="<?php echo $category['categoryID']; ?>"
                                <?php echo $selected ?>>
                                <?php echo $category['categoryName']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" maxlength="10" name="code" required="vital" class="form-control" value="<?php echo isset($product['productCode']); ?>">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" maxlength="50" name="name" required="vital" class="form-control" value="<?php echo isset($product['productName']); ?>">
                </div>
                <div class="form-group">
                    <label>List Price</label>
                    <input type="text" maxlength="12" name="price" required="vital" class="form-control" value="<?php echo isset($product['listPrice']); ?>">
                </div>
                <div class="form-group">
                    <label>Discount Percent</label>
                    <input type="text" maxlength="12" name="discount_percent" required="vital" class="form-control" value="<?php echo isset($product['discountPercent']); ?>">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="10"><?php echo isset($product['description']); ?></textarea>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="featured" 
                        <?php if (isset($product['featured'])) : ?>
                            checked="checked"
                        <?php endif; ?>
                    >
                    Featured Product
                </div>
                <div class="form-group">
                    <button class="btn btn-warning btn-block">Save</button>
                </div>
            </div>
            <div class="col-md-4">
                <!--Inline style applied because this section is unique and appeared only once-->
                <h2 style="margin-left:60px">How to work with the description</h2>
                <ul style="margin-left:20px">
                    <li>Use two returns to start a new paragraph.</li>
                    <li>Use an asterisk to mark items in a bulleted list.</li>
                    <li>Use one return between items in a bulleted list.</li>
                    <li>Use standard HMTL tags for bold and italics.</li>
                </ul>
            </div>     
        </div>
    </div>
</form>

<?php include '../../view/footer.php'; ?>
