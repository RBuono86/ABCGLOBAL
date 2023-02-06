
      <div id="nav-bar">
        <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <!--<a class="navbar-brand" href="#">My Website</a>-->
            <a class="navbar-brand" href="<?php echo $app_path ?>"> <!-- Logo turned into a link to switch to site's home index.php --> 
                <!-- /abcglobal/images/logo.png -->
                <img src="<?php echo $app_path . 'images/' ?>logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> ABC Global Consulting Inc.
            </a>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">  <!-- /abcglobal/index.php -->
                        <a class="nav-link" href="<?php echo $app_path ?>admin">Home</a>
                    </li>
                    <li class="nav-item">  
                        <a class="nav-link" href="<?php echo $app_path ?>admin/category">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $app_path ?>admin/product">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $app_path ?>admin/orders">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $app_path ?>admin/users">Admin Accounts</a>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
