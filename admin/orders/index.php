<?php
require_once('../../utility/main.php');
require_once('utility/secure.php');
require_once('utility/check_admin.php');

require_once('model/member_lib.php');
require_once('model/address_lib.php');
require_once('model/order_lib.php');
require_once('model/product_lib.php');

if ( isset($_POST['action']) ) {
    $action = $_POST['action'];
} elseif ( isset($_GET['action']) ) {
    $action = $_GET['action'];
} else {
    $action = 'list_orders';
}

switch($action) {
    case 'list_orders':
        $new_orders = outstanding_orders();
        $old_orders = shipped_orders();
        include 'order_status.php';
        break;
    case 'view_order':
        $order_id = $_GET['order_id'];

        // Get order data
        $order = get_order($order_id);
        $order_date = date('M j, Y', strtotime($order['orderDate']));
        $order_items = get_order_items($order_id);

        // Get member data
        $member = get_member($order['memberID']);
        $name = $member['lName'] . ', ' . $member['fName'];
        $email = $member['memberEmail'];
        $card_number = $order['cardNumber'];
        $card_expires = $order['cardExpires'];
        $card_name = card_name($order['cardType']);

        $shipping_address = get_address($order['shipAddressID']);
        $ship_line1 = $shipping_address['line1'];
        $ship_line2 = $shipping_address['line2'];
        $ship_city = $shipping_address['city'];
        $ship_state = $shipping_address['state'];
        $ship_zip = $shipping_address['zipCode'];
        $ship_phone = $shipping_address['phone'];

        $billing_address = get_address($order['billingAddressID']);
        $bill_line1 = $billing_address['line1'];
        $bill_line2 = $billing_address['line2'];
        $bill_city = $billing_address['city'];
        $bill_state = $billing_address['state'];
        $bill_zip = $billing_address['zipCode'];
        $bill_phone = $billing_address['phone'];

        include 'order.php';
        break;
    case 'set_ship_date':
        $order_id = intval($_POST['order_id']);
        set_ship_date($order_id);
        $url = '?action=view_order&order_id=' . $order_id;
        redirect($url);
    case 'confirm_delete':
        // Get order data
        $order_id = intval($_POST['order_id']);
        $order = get_order($order_id);
        $order_date = date('M j, Y', strtotime($order['orderDate']));

        // Get member data
        $member = get_member($order['memberID']);
        $name = $member['lName'] . ', ' . $member['fName'];
        $email = $member['memberEmail'];

        include 'order_delete.php';
        break;
    case 'delete':
        $order_id = intval($_POST['order_id']);
        delete_order($order_id);
        redirect('.');
        break;
    default:
        display_error("Unknown order action: " . $action);
        break;
}
?>
