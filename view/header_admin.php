<!DOCTYPE html>
<html lang="en">
    <head>
      <title>ABC Global Consulting Inc.</title>
      <link rel="stylesheet" href="<?php echo $app_path ?>style.css" />
      <link rel="stylesheet" href="<?php echo $app_path ?>css/bootstrap.css" />
      <script src="<?php echo $app_path ?>jquery-3.3.1.min.js"></script>
    <!-- For Pagination in Product_List.php -->
      <script>
        $(document).ready(function() {
          $("#num_rows").change(function() {
              $("#pagination_form").submit();  // A form in Product_List.php
          });
        });
      </script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
   <body>
      <?php
      // Check if administrator is logged in and display login status
        $account_url = $app_path . 'admin/users';
        $logout_url = $account_url . '?action=logout';
        if (isset($_SESSION['admin'])) :
      ?>
      <div class="row mr-0 mt-n2 mb-n2">
        <div class="col-md-12">
          <div id="headlinks">
            <p>
              <span class="fa fa-user"></span><b><?php echo ' Hi, ' . $_SESSION['admin'][1].'!'; ?></b> &nbsp&nbsp<a href="<?php echo $logout_url; ?>"><span class="fa fa-sign-out"></span>Logout</a>
            </p>
          </div>
        </div>
      </div>
      <?php else: ?>
        <div class="searchbar">
          <div class="row mr-0 mt-n2 mb-n2">  
            <div class="col-md-12">
              <div id="headlinks">
                <p><a href="<?php echo $account_url; ?>"><span class="fa fa-sign-in"></span> Login</a></p>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php require_once('view/navbar_admin.php'); ?>