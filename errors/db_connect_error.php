<?php include 'view/header_admin.php'; ?>
<div class="container section page-overlay"> <!-- The input-form class creates a light black transparent background -->
	<div class="row">
		<div class="col-md-12">
			<h2 class="section-head">Database Error</h2>
      <p>The following error encountered while connecting to the database.</p>
      <p>Error message: <?php echo $error_message; ?></p>
		</div>
  </div>
</div>
<?php include 'view/footer.php'; ?>
