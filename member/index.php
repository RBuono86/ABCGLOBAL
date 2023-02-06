<?php

require_once('../utility/main.php');
require_once('utility/secure.php');

require_once('model/member_lib.php');
require_once('model/address_lib.php');
require_once('model/order_lib.php');
require_once('model/product_lib.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} elseif (isset($_SESSION['user'])) {
    $action = 'view_account';
} else {
    $action = 'view_login';
}

switch ($action) {
    case 'view_login':
        include 'member_login.php';
        break;
    case 'view_register':
        include 'member_register.php';
        break;
    case 'register':
        // Store user data in local variables
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $ship_line1 = $_POST['ship_line1'];
        $ship_line2 = $_POST['ship_line2'];
        $ship_city = $_POST['ship_city'];
        $ship_state = $_POST['ship_state'];
        $ship_zip = $_POST['ship_zip'];
        $ship_phone = $_POST['ship_phone'];
        $use_shipping = isset($_POST['use_shipping']);
        $bill_line1 = $_POST['bill_line1'];
        $bill_line2 = $_POST['bill_line2'];
        $bill_city = $_POST['bill_city'];
        $bill_state = $_POST['bill_state'];
        $bill_zip = $_POST['bill_zip'];
        $bill_phone = $_POST['bill_phone'];

        // Store data in the session
        $_SESSION['form_data'] = array();
        $_SESSION['form_data']['email'] = $email;
        $_SESSION['form_data']['first_name'] = $first_name;
        $_SESSION['form_data']['last_name'] = $last_name;
        $_SESSION['form_data']['ship_line1'] = $ship_line1;
        $_SESSION['form_data']['ship_line2'] = $ship_line2;
        $_SESSION['form_data']['ship_city'] = $ship_city;
        $_SESSION['form_data']['ship_state'] = $ship_state;
        $_SESSION['form_data']['ship_zip'] = $ship_zip;
        $_SESSION['form_data']['ship_phone'] = $ship_phone;
        $_SESSION['form_data']['use_shipping'] = isset($use_shipping);
        $_SESSION['form_data']['bill_line1'] = $bill_line1;
        $_SESSION['form_data']['bill_line2'] = $bill_line2;
        $_SESSION['form_data']['bill_city'] = $bill_city;
        $_SESSION['form_data']['bill_state'] = $bill_state;
        $_SESSION['form_data']['bill_zip'] = $bill_zip;
        $_SESSION['form_data']['bill_phone'] = $bill_phone;

        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // Validate user data
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            member_error('The e-mail address ' . $email . ' is not valid.');
        } elseif (is_valid_member_email($email)) {
            member_error('The e-mail address ' . $email . ' is already in use.');
        }
        if (empty($first_name)) {
            member_error('First name is a required field.');
        }
        if (empty($last_name)) {
            member_error('Last name is a required field.');
        }
        if (empty($password_1) || empty($password_2)) {
            member_error('Password is a required field.');
        } elseif ($password_1 !== $password_2) {
            member_error('Passwords do not match.');
        } elseif (strlen($password_1) < 6) {
            member_error('Password must be at least six characters long.');
        }

        // Validate shipping address
        if (empty($ship_line1)) {
            member_error('Shipping address line 1 is required.');
        }
        if (empty($ship_city)) {
            member_error('Shipping city is required.');
        }
        if (empty($ship_state)) {
            member_error('Shipping state is required.');
        }
        if (strlen($ship_state) > 2 ) {
            member_error('Use two-letter code for shipping state.');
        }
        if (empty($ship_zip)) {
            member_error('Shipping ZIP code is required.');
        }
        if (empty($ship_phone)) {
            member_error('Shipping phone number is required.');
        }

        // If necessary, validate billing address
        if (!$use_shipping) {
            if (empty($bill_line1)) {
                member_error('Billing address line 1 is required.');
            }
            if (empty($bill_city)) {
                member_error('Billing city is required.');
            }
            if (empty($bill_state)) {
                member_error('Billing state is required.');
            }
            if (strlen($bill_state) > 2 ) {
                member_error('Use two-letter code for billing state.');
            }
            if (empty($bill_zip)) {
                member_error('Billing ZIP code is required.');
            }
            if (empty($bill_phone)) {
                member_error('Billing phone number is required.');
            }
        }

        // Add the member data to the database
        $member_id = add_member($email, $first_name,
                                    $last_name, $password_1, $password_2);

        // Add the shipping address
        $shipping_id = add_address($member_id, $ship_line1, $ship_line2,
                                   $ship_city, $ship_state, $ship_zip,
                                   $ship_phone);
        member_change_shipping_id($member_id, $shipping_id);

        // Add the billing address
        if ($use_shipping) {
            $billing_id = add_address($member_id, $ship_line1, $ship_line2,
                                       $ship_city, $ship_state, $ship_zip,
                                       $ship_phone);
        } else {
            $billing_id = add_address($member_id, $bill_line1, $bill_line2,
                                   $bill_city, $bill_state, $bill_zip,
                                   $bill_phone);
        }
        member_change_billing_id($member_id, $billing_id);

        // Set up session data
        unset($_SESSION['form_data']);
        $_SESSION['user'] = get_member($member_id);

        // Redirect to the Checkout application if necessary
        if (isset($_SESSION['checkout'])) {
            unset($_SESSION['checkout']);
            redirect('../checkout');
        } else {
            redirect('.');
        }        
        break;
    case 'login':
        $email = $_POST['email'];
        $password = $_POST['password'];

        // If valid username/password, login
        if (is_valid_member_login($email, $password)) {
            $_SESSION['user'] = get_member_by_email($email);
        } else {
            member_error('Login failed. Invalid email or password.');
        }

        // If necessary, redirect to the Checkout app
        if (isset($_SESSION['checkout'])) {
            unset($_SESSION['checkout']);
            redirect('../checkout');
        } else {
            redirect('.');
        }
        break;
    case 'view_account':
        $member_name = $_SESSION['user']['fName'] . ' ' .
                         $_SESSION['user']['lName'];
        $email = $_SESSION['user']['memberEmail'];

        $ship_address_id = $_SESSION['user']['shipAddressID'];
        $shipping_address = get_address($ship_address_id);
        $ship_line1 = $shipping_address['line1'];
        $ship_line2 = $shipping_address['line2'];
        $ship_city = $shipping_address['city'];
        $ship_state = $shipping_address['state'];
        $ship_zip = $shipping_address['zipCode'];
        $ship_phone = $shipping_address['phone'];

        $billing_address = get_address($_SESSION['user']['billingAddressID']);
        $bill_line1 = $billing_address['line1'];
        $bill_line2 = $billing_address['line2'];
        $bill_city = $billing_address['city'];
        $bill_state = $billing_address['state'];
        $bill_zip = $billing_address['zipCode'];
        $bill_phone = $billing_address['phone'];
        $orders = get_orders_by_member_id($_SESSION['user']['memberID']);
        include 'member_view.php';
        break;
    case 'view_order':
        $order_id = $_GET['order_id'];
        $order = get_order($order_id);
        $order_date = strtotime($order['orderDate']);
        $order_date = date('M j, Y', $order_date);
        $order_items = get_order_items($order_id);
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

        include 'member_orders.php';
        break;
    case 'view_account_edit':
        $first_name = $_SESSION['user']['fName'];
        $last_name = $_SESSION['user']['lName'];
        $email = $_SESSION['user']['memberEmail'];
        $shipping_id = $_SESSION['user']['shipAddressID'];
        $billing_id = $_SESSION['user']['billingAddressID'];
        include 'member_edit.php';
        break;
    case 'update_account':
        // Get the member data
        $member_id = $_SESSION['user']['memberID'];
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // Get the old data for the member
        $old_member = get_member($member_id);

        // Validate the data for the member
        if ($email != $old_member['memberEmail']) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                member_error('The e-mail address ' . $email . ' is not valid.');
            } elseif (is_valid_member_email($email)) {
                member_error('The e-mail address ' . $email . ' is already in use.');
            }
        }
        if (empty($first_name)) {
            member_error('First name is a required field.');
        }
        if (empty($last_name)) {
            member_error('Last name is a required field.');
        }

        // Only validate the passwords if they are NOT empty
        if (!empty($password_1) && !empty($password_2)) {
            if ($password_1 !== $password_2) {
               member_error('Passwords do not match.');
            } elseif (strlen($password_1) < 6) {
                member_error('Password must be at least six characters.');
            }
        }

        // Update the member data
        update_member($member_id, $email, $first_name, $last_name,
            $password_1, $password_2);

        // Set the new member data in the session
        $_SESSION['user'] = get_member($member_id);

        redirect('.');
        break;
    case 'view_address_edit':
        // Set up variables for address type
        $billing = $_POST['address_type'] == 'billing';
        if ($billing) {
            $address_id = $_SESSION['user']['billingAddressID'];
            $heading = 'Update Billing Address';
        } else {
            $address_id = $_SESSION['user']['shipAddressID'];
            $heading = 'Update Shipping Address';
        }

        // Get the data for the address
        $address = get_address($address_id);
        $line1 = $address['line1'];
        $line2 = $address['line2'];
        $city = $address['city'];
        $state = $address['state'];
        $zip = $address['zipCode'];
        $phone = $address['phone'];

        // Display the data on the page
        include 'member_address.php';
        break;
    case 'update_address':
        $member_id = $_SESSION['user']['memberID'];
    
        // Get the address ID for the address to be updated
        $billing = $_POST['address_type'] == 'billing';
        if ($billing) {
            $address_id = $_SESSION['user']['billingAddressID'];
        } else {
            $address_id = $_SESSION['user']['shipAddressID'];
        }

        // Get the post data
        $line1 = $_POST['line1'];
        $line2 = $_POST['line2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];

        // Validate the data
        // TODO: Improve this validation
        if (empty($line1)) {
            member_error('Address line 1 is required.');
        }
        if (empty($city)) {
            member_error('City is required.');
        }
        if (empty($state)) {
            member_error('State is required.');
        }
        if (strlen($state) > 2 ) {
            member_error('Use two-letter code for state.');
        }
        if (empty($zip)) {
            member_error('ZIP code is required.');
        }
        if (empty($phone)) {
            member_error('Phone number is required.');
        }

        // If the old address has orders, disable it
        // Otherwise, delete it
        disable_or_delete_address($address_id);

        // Add the new address
        $address_id = add_address($member_id, $line1, $line2, $city,
                                   $state, $zip, $phone);

        // Relate the address to the member account
        if ($billing) {
            member_change_billing_id ($member_id, $address_id);
        } else {
            member_change_shipping_id ($member_id, $address_id);
        }

        // Set the user data in the session
        $_SESSION['user'] = get_member($member_id);
        redirect('.');
        break;
    case 'logout':
        unset($_SESSION['user']);
        redirect($app_path . 'member');
        break;
    case 'assign_password':
        $email = $_POST['email'];

        $_SESSION['password'] = get_member_by_email($email);
        $member_id = $_SESSION['password']['memberID'];

        if ($member_id <= 0) {
            member_error('E-mail address does not exist in our database.');
        }
        $new_password = update_pw($member_id, $email);  

        function sanitize_email($recipient_email) {
            $recipient_email = filter_var($recipient_email, FILTER_SANITIZE_EMAIL);
            if (filter_var($recipient_email, FILTER_VALIDATE_EMAIL)) {
               return true;
            } else {
               return false;
            }
         }
         $to = $email;
         $subject = "Your New Password From ABC Global Consulting";
         
         $message = "<b>Hello!</b>";
         $message .= "<h1>This is ABC Global Consulting Admin</h1>";
         $message .= "\n\nYour new password on ABC Global Consulting domain is: " . $new_password;
         
         $header = "From:it.ho@shafi.com \r\n";
         $header .= "Cc:techies81@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $valid_email = sanitize_email($to);
         if ($valid_email == false) {
            echo "Invalid input - message not sent";
         } else { //send email 
            mail($to, $subject, $message, $header);
	    include 'member_pw_sent.php';
         }
	    unset($_SESSION['password']);
        break;
    default:
        member_error("Unknown account action: " . $action);
        break;
}
?>
