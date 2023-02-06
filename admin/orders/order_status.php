<?php include 'view/header_admin.php'; ?>
<div class="container section page-overlay">  
    <div class="row">
        <div class="col-md-12">
        <h2 class="section-head">Manage Orders</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-content table-border">
                <h3>Outstanding Orders</h3>
                <tbody>
                    <?php if (count($new_orders) > 0 ) : ?>
                        <tr>
                            <td>
                                <ol>
                                    <?php foreach($new_orders as $order) :
                                        $order_id = $order['orderID'];
                                        $order_date = strtotime($order['orderDate']);
                                        $order_date = date('M j, Y', $order_date);
                                        $url = $app_path . 'admin/orders' . '?action=view_order&order_id=' . $order_id;
                                    ?>
                                        <li>
                                            <a href="<?php echo $url; ?>">Order # 
                                            <?php echo $order_id; ?></a> for
                                            <?php echo $order['fName'] . ' ' . $order['lName']; ?> placed on
                                            <?php echo $order_date; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </td>
                        </tr>    
                    <?php else: ?>
                        <p>There are no outstanding orders.</p>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <table class="table table-content table-border">
                <h3>Shipped Orders</h3>
                <tbody>
                    <?php if (count($old_orders) > 0 ) : ?>
                        <tr>
                            <td>
                                <ol>
                                    <?php foreach($old_orders as $order) :
                                        $order_id = $order['orderID'];
                                        $order_date = strtotime($order['orderDate']);
                                        $order_date = date('M j, Y', $order_date);
                                        $url = $app_path . 'admin/orders' . '?action=view_order&order_id=' . $order_id;
                                    ?>
                                        <li>
                                            <a href="<?php echo $url; ?>">Order #
                                            <?php echo $order_id; ?></a> for
                                            <?php echo $order['fName'] . ' ' . $order['lName']; ?> placed on
                                            <?php echo $order_date; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </td>
                        </tr>    
                    <?php else: ?>
                        <p>There are no shipped orders.</p>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'view/footer.php'; ?>
