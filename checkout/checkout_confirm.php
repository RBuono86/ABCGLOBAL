<?php include '../view/header_member.php'; ?>
<div class="container section page-overlay"> 
    <div class="col-md-8">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'cart'; ?>">Cart</a></li>
            <li class="breadcrumb-item active" style="color: #ffc107">Order Confirmation</li>
        </ol>
    </div>  
    <hr class="hr" style="margin-top: 0rem">

    <table class="table table-content table-border">
        <tr class="head">
            <th class="left" >Item</th>
            <th>Price&nbsp</th>
            <th>Quantity&nbsp</th>
            <th>Total&nbsp</th>
        </tr>
        <?php foreach ($cart as $product_id => $item) : ?>
            <tr>
                <td><?php echo $item['name']; ?></td>
                <td>
                    <?php echo sprintf('$%.2f', $item['unit_price']); ?>
                </td>
                <td>
                    <?php echo $item['quantity']; ?>
                </td>
                <td>
                    <?php echo sprintf('$%.2f', $item['line_price']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><b style="float:right">Subtotal</b></td>
            <td>
                <?php echo sprintf('$%.2f', $subtotal); ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"><b style="float:right"><?php echo $state; ?> Tax</b></td>
            <td>
                <?php echo sprintf('$%.2f', $tax); ?>
            </td>
        </tr>
        <tr>
            <td colspan="3"><b style="float:right">Shipping</b></td>
            <td>
                <?php echo sprintf('$%.2f', $shipping_cost); ?>
            </td>
        </tr>
            <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0;">
            <td colspan="3"><b style="float:right">Total</b></td>
            <td>
                <?php echo sprintf('$%.2f', $total); ?>
            </td>
        </tr>
    </table>
    <p>
        Proceed to: <a href="<?php echo '?action=payment'; ?>">Payment</a>
    </p>
</div>

<?php include '../view/footer.php'; ?>
