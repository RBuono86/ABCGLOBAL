<!DOCTYPE html>
<html lang="en">   <!-- The tag terminates in Footer.php file -->
    <!-- the head section -->
    <head>
      <title>ABC Global Consulting Inc.</title>
      <link rel="stylesheet" href="<?php echo $app_path ?>style.css" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo $app_path ?>css/bootstrap.css" />
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>

    <body>    <!-- The tag terminates in Footer.php file -->
          <?php
          // Check if member is logged in and display login status
             $member_url = $app_path . 'member';
             $logout_url = $member_url . '?action=logout';
             if (isset($_SESSION['user'])) :
          ?>
            <div class="row mr-0 mt-n2 mb-n2">
              <div class="col-md-12">
                  <div id="headlinks">
                    <p>
                    <span class="fa fa-user"></span><b><?php echo ' Hi, ' . $_SESSION['user'][1] . ' ' . $_SESSION['user'][2].'!'; ?></b>
                      &nbsp&nbsp<a href="<?php echo $logout_url; ?>"><span class="fa fa-sign-out">Logout</a> 
                    </p>
                  </div>
              </div>
            </div>
          <?php else: ?>
            <div class="row mr-0 mt-n2 mb-n2">  
              <div class="col-md-12">
                <div id="headlinks">
                  <p><a href="<?php echo $member_url; ?>"><span class="fa fa-sign-in"></span> Login/Register</a> </p>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php require_once('view/navbar.php'); ?>
