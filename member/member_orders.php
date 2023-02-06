<?php include '../view/header_member.php'; ?>
<div class="container input-form">  <!-- The input-form class creates a light black transparent background -->
    <div class="row">
        <div class="col-md-8">
            <ol class="breadcrumb">
              <li class="breadcrumb-item" style="margin-left: -10px"><a href="<?php echo $app_path.'member/'; ?>">Home</a></li>
              <li class="breadcrumb-item active">View Order</li>
            </ol>
        </div>
    </div>
    <hr class="hr" style="margin-top: 0rem">
    <div class="row">
        <div class="col-md-12">
            <h2>Your Order Details</h2>
            <p style="display: inline-block;">Order Number:</p> 
            <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $order_id; ?></p><br>
            <p style="display: inline-block;">Order Date:</p> 
            <p style="display: inline-block; color: rgb(165, 165, 165)"><?php echo $order_date; ?></p><br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3 style="margin-top: 20px;">Shipping</h3>
            <hr class="hr" style="margin-top: 0rem">
            <!-- The identical symbol (===) checks that the two values are true and have the same type -->    
            <p>Ship Date:
                <?php
                    if ($order['shipDate'] === NULL) {
                        echo 'Not shipped yet';
                    } else {
                        $ship_date = strtotime($order['shipDate']);
                        echo date('M j, Y', $ship_date);
                    }
                ?>
            </p>
            <p><?php echo $ship_line1; ?><br />
                <?php if ( strlen($ship_line2) > 0 ) : ?>
                <?php echo $ship_line2; ?><br />
                <?php endif; ?>
                <?php echo $ship_city; ?>, <?php echo $ship_state; ?>
                <?php echo $ship_zip; ?><br />
                <?php echo $ship_phone; ?>
            </p>
        </div>
        <div class="col-md-6">
            <h3 style="margin-top: 20px;">Billing</h3>
            <hr class="hr" style="margin-top: 0rem">
            <p>Card Number: ...<?php echo substr($order['cardNumber'], -4); ?></p>
            <p><?php echo $bill_line1; ?><br />
                <?php if ( strlen($bill_line2) > 0 ) : ?>
                <?php echo $bill_line2; ?><br />
                <?php endif; ?>
                <?php echo $bill_city; ?>, <?php echo $bill_state; ?>
                <?php echo $bill_zip; ?><br />
                <?php echo $bill_phone; ?>
            </p>
       </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <h3>Order Items</h3>
            <table class="table table-content table-border">
                <thead>
                    <th>Item</th>
                    <th>List Price</th>
                    <th>Savings </th>
                    <th>Your Cost </th>
                    <th>Quantity </th>
                    <th>Line Total</th>
                </thead>
                <?php
                $subtotal = 0;
                foreach ($order_items as $item) :
                    $product_id = $item['productID'];
                    $product = get_product($product_id);
                    $item_name = $product['productName'];
                    $list_price = $item['itemPrice'];
                    $savings = $item['discountAmount'];
                    $your_cost = $list_price - $savings;
                    $quantity = $item['quantity'];
                    $line_total = $your_cost * $quantity;
                    $subtotal += $line_total;
                    ?>
                    <tr>
                        <td><?php echo $item_name; ?></td>
                        <td>
                            <?php echo sprintf('$%.2f', $list_price); ?>
                        </td>
                        <td>
                            <?php echo sprintf('$%.2f', $savings); ?>
                        </td>
                        <td>
                            <?php echo sprintf('$%.2f', $your_cost); ?>
                        </td>
                        <td>
                            <?php echo $quantity; ?>
                        </td>
                        <td>
                            <?php echo sprintf('$%.2f', $line_total); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5"><b style="float:right">Subtotal:</b></td>
                    <td>
                        <?php echo sprintf('$%.2f', $subtotal); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><b style="float:right"><?php echo $ship_state; ?> Tax:</b></td>
                    <td>
                        <?php echo sprintf('$%.2f', $order['taxAmount']); ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="5"><b style="float:right">Shipping:</b></td>
                    <td>
                        <?php echo sprintf('$%.2f', $order['shipAmount']); ?>
                    </td>
                </tr>
                <tr style="border-top: solid 1px #333; box-shadow: #000 0 -1px 0">
                    <td colspan="5"><b style="float:right">Total:</b></td>
                    <td>
                        <?php
                            $total = $subtotal + $order['taxAmount'] + $order['shipAmount'];
                            echo sprintf('$%.2f', $total);
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php include '../view/footer.php'; ?>
