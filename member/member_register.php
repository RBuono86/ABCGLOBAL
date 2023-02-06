<?php include '../utility/main.php'; ?>
<?php include '../utility/secure.php'; ?>
<?php include '../view/header_member.php'; ?>

<div class="container section page-overlay"> 
	<div class="row">
		<div class="col-md-12">
			<h2 class="section-head">Member Registration</h2>
		</div>
	</div>
	<form action="index.php" method="post" id="register_form">
		<input type="hidden" name="action" value="register" />
		<div class="row">
			<div class="col-md-4">
				<div><h3>Member Information</h3></div>
				<hr class="hr" style="margin-top: 0rem">
				<div class="form-group">
					<label style="margin-bottom:-0.5rem !important">E-Mail</label>
					<input type="email" required="vital" class="form-control" name="email" placeholder="me@example.com" value="<?php echo isset($_SESSION['form_data']['email']); ?>">
				</div>
				<div class="form-group">
					<label style="margin-bottom:-0.5rem !important">Password</label>
					<input type="password" required="vital" class="form-control" name="password_1">
				</div>
				<div class="form-group">
					<label style="margin-bottom:-0.5rem !important">Retype Password</label>
					<input type="password" required="vital" class="form-control" name="password_2">
				</div>
				<div class="form-group">
					<label style="margin-bottom:-0.5rem !important">First Name</label>
					<input type="text" required="vital" class="form-control" name="first_name" value="<?php echo isset($_SESSION['form_data']['first_name']); ?>">
				</div>
				<div class="form-group">
					<label style="margin-bottom:-0.5rem !important">Last Name</label>
					<input type="text" required="vital" class="form-control" name="last_name" value="<?php echo isset($_SESSION['form_data']['last_name']); ?>">
				</div>
	</div>
	<div class="col-md-4">
				<div><h3>Shipping Address</h3></div>
				<hr class="hr" style="margin-top: 0rem">
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Address</label>
								<input type="text" class="form-control" name="ship_line1" value="<?php echo isset($_SESSION['form_data']['ship_line1']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Line 2</label>
								<input type="text" class="form-control" name="ship_line2" value="<?php echo isset($_SESSION['form_data']['ship_line2']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">City</label>
								<input type="text" class="form-control" name="ship_city" value="<?php echo isset($_SESSION['form_data']['ship_city']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">State</label>
								<input type="text" class="form-control" name="ship_state" value="<?php echo isset($_SESSION['form_data']['ship_state']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Zip Code</label>
								<input type="text" class="form-control" name="ship_zip" value="<?php echo isset($_SESSION['form_data']['ship_zip']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Phone</label>
								<input type="text" class="form-control" name="ship_phone" value="<?php echo isset($_SESSION['form_data']['ship_phone']); ?>">
				</div>
				<div class="form-group">
								<input type="checkbox" name="use_shipping" 
											<?php if (isset($_SESSION['form_data']['use_shipping'])) : ?>
											checked="checked"
											<?php endif; ?>
								> Use this address for billing
				</div>
	</div>

	<div class="col-md-4">
				<div><h3>Billing Address</h3></div>
				<hr class="hr" style="margin-top: 0rem">
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Address</label>
								<input type="text" class="form-control" name="bill_line1" value="<?php echo isset($_SESSION['form_data']['bill_line1']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Line 2</label>
								<input type="text" class="form-control" name="bill_line2" value="<?php echo isset($_SESSION['form_data']['bill_line2']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">City</label>
								<input type="text" class="form-control" name="bill_city" value="<?php echo isset($_SESSION['form_data']['bill_city']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">State</label>
								<input type="text" class="form-control" name="bill_state" value="<?php echo isset($_SESSION['form_data']['bill_state']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Zip Code</label>
								<input type="text" class="form-control" name="bill_zip" value="<?php echo isset($_SESSION['form_data']['bill_zip']); ?>">
				</div>
				<div class="form-group">
								<label style="margin-bottom:-0.5rem !important">Phone</label>
								<input type="text" class="form-control" name="bill_phone" value="<?php echo isset($_SESSION['form_data']['bill_phone']); ?>">
				</div>
				<button class="btn btn-primary btn-block" style="margin: 5px 0px">Register</button>
			</div>
		</div>
	</form>
</div>


<?php
if (isset($_SESSION['form_data'])) {
    unset($_SESSION['form_data']);
}
?>


<?php include '../view/footer.php'; ?>
