<?php include '../view/header_member.php'; ?>

<div class="container section page-overlay"> 
	<div class="row">
		<div class="col-md-12">
			<h2 class="section-head">Manage Your Account</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form action="index.php" method="post">
				<!-- Display h3 and button side by side using display:inline-block and float:right attributes -->
				<h3 style="display: inline-block">My Account</h3>
				<button class="btn btn-primary btn-block" style="float:right; width:20%">Modify</button>
				<hr class="hr" style="margin-top: 0rem">
				<p><?php echo $member_name . ' (' . $email . ')'; ?></p>
				<input type="hidden" name="action" value="view_account_edit" />
			</form>

			<form action="index.php" method="post">
				<h3 style="margin-top: 30px; display: inline-block">Shipping Address</h3>
				<button class="btn btn-primary btn-block" style="float:right; margin-top: 30px; width:20%">Modify</button>
				<hr class="hr" style="margin-top: 0rem">
				<p><?php echo $ship_line1; ?><br>
					<?php if ( strlen($ship_line2) > 0 ) : ?>
						<?php echo $ship_line2; ?><br>
					<?php endif; ?>
					<?php echo $ship_city; ?>, <?php echo $ship_state; ?>
					<?php echo $ship_zip; ?><br />
					<?php echo $ship_phone; ?>
				</p>
				<input type="hidden" name="action" value="view_address_edit">
				<input type="hidden" name="address_type" value="shipping">
			</form>

			<form action="index.php" method="post">
				<h3 style="margin-top: 30px; display: inline-block">Billing Address</h3>
				<button class="btn btn-primary btn-block" style="float:right; margin-top: 30px; width:20%">Modify</button>
				<hr class="hr" style="margin-top: 0rem">
				<p><?php echo $bill_line1; ?><br>
					<?php if ( strlen($bill_line2) > 0 ) : ?>
					<?php echo $bill_line2; ?><br>
					<?php endif; ?>
					<?php echo $bill_city; ?>, <?php echo $bill_state; ?>
					<?php echo $bill_zip; ?><br>
					<?php echo $bill_phone; ?>
				</p>
				<input type="hidden" name="action" value="view_address_edit">
				<input type="hidden" name="address_type" value="billing">
			</form>
			
			<?php if (count($orders) > 0 ) : ?>
			<br> 
			<h3>My Orders</h3>
			<hr class="hr" style="margin-top: 0rem">
			<ul>
				<?php foreach($orders as $order) :
					$order_id = $order['orderID'];
					$order_date = strtotime($order['orderDate']);
					$order_date = date('M j, Y', $order_date);
					if ($order['shipDate'] != NULL){
							$ship_date = strtotime($order['shipDate']);
							$ship_date = date('M j, Y', $ship_date);
					}else{
							$ship_date='';
					}
					$url = $app_path . 'member' . '?action=view_order&order_id=' . $order_id;
				?>
				<li>
					<a href="<?php echo $url; ?>">Order No. 
						<?php echo $order_id; ?></a> placed on
						<?php echo $order_date; ?> 
						<?php if ($ship_date != '') {
						echo ' - Shipped on ' . $ship_date;} else {echo ' - Yet to be shipped';}?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?><br/>
		</div>
		<div class="col-md-4">
			<?php include '../view/sidebar_member.php'; ?>
		</div>					
	</div>
</div>

<?php include '../view/footer.php'; ?>
