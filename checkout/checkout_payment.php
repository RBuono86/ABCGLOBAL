<?php include '../view/header_member.php'; ?>
<div class="container section input-form"> <!-- The input-form class creates a light black transparent background -->
    <div class="col-md-8">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'member'; ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'cart'; ?>">Cart</a></li>
            <li class="breadcrumb-item"><a href="<?php echo $app_path.'checkout'; ?>">Check Out</a></li>
            <li class="breadcrumb-item active" style="color: #ffc107">Payment</li>
        </ol>
    </div>  
    <hr class="hr" style="margin-top: 0rem">

    <div class="row">
        <div class="col-md-6">
            <h3>Billing Address</h3>
            <hr class="hr" style="margin-top: 0rem">
            <p><?php echo $bill_line1; ?><br />
                <?php if ( strlen($bill_line2) > 0 ) : ?>
                <?php echo $bill_line2; ?><br />
                <?php endif; ?>
                <?php echo $bill_city; ?>, <?php echo $bill_state; ?>
                <?php echo $bill_zip; ?><br />
                <?php echo $bill_phone; ?>
            </p>
            <form action="../member/index.php" method="post">
                <input type="hidden" name="action" value="view_address_edit" />
                <input type="hidden" name="address_type" value="billing" />
                <button class="btn btn-primary btn-block" style="width:20%">Modify</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Payment Information</h3>
            <hr class="hr" style="margin-top: 0rem">
            <form action="index.php" method="post" id="payment_form">
                <input type="hidden" name="action" value="process" />
                <div class="form-group">
                    <label style="margin-bottom:-0.5rem !important">Card Type</label>
                    <select name="card_type" class="form-control">
                        <option selected="selected" value="1">Master Card</option>
                        <option value="2">Visa</option>
                        <option value="3">Discover</option>
                        <option value="4">American Express</option>
                    </select>
                </div>
                <div class="form-group">
                    <label style="margin-bottom:-0.5rem !important">Card Number (No dashes or spaces)</label>
                    <input type="text" name="card_number" required="vital" class="form-control"> 
                </div>
                <div class="form-group">
                    <label style="margin-bottom:-0.5rem !important">CVV</label>
                    <input type="text" name="card_cvv" required="vital" class="form-control"> 
                </div>
                <div class="form-group">
                    <label style="margin-bottom:-0.5rem !important">Expiration (MM/YYYY)</label>
                    <input type="text" name="card_expires" required="vital" class="form-control"> 
                </div>
                <button class="btn btn-primary btn-block" style="float:right; width:30%">Place Order</button>
            </form>    
        </div>
    </div>
</div>

<?php include '../view/footer.php'; ?>
