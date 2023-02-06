<?php include '../utility/main.php'; ?>
<?php include '../utility/secure.php'; ?>
<?php include '../view/header_member.php'; ?>

<div class="container input-form">  <!-- The input-form class creates a light black transparent background -->
      <h3>Retrieve Password</h3>
      <hr class="hr" style="margin-top: 0rem">
      <form action="index.php" method="post" id="get_password">
        <input type="hidden" name="action" value="assign_password" />
        <div class="form-group">
          <label>Please enter your e-mail address</label>
          <input type="email" maxlength="35" size="35" name="email" required="vital" placeholder="me@example.com" class="form-control">
        </div>
        <button class="btn btn-primary btn-block" style="margin: 5px 0px">Get Password!</button>
      </form>
</div>
<?php include '../view/footer.php'; ?>
