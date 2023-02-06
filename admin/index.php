<?php 
    require_once('../utility/main.php');
    require_once('utility/secure.php');
    require_once('utility/check_admin.php');
?>

<?php include 'view/header_admin.php'; ?>

<div id="admin_home">
    <div class="container section page-overlay"> 
        <div class="row">
            <div class="col-12">
                <h2 class="section-head">Admin Menu</h2>
            </div>
            <div class="col-md-3">
                <div class="news-post">
                    <img src="<?php echo $app_path ?>images/pexels-2.jpg" alt="">
                    <h3><a href="category">Category Manager</a></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-post">
                    <img src="<?php echo $app_path ?>images/pexels-3.jpg" alt="">
                    <h3><a href="product">Product Manager</a></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-post">
                    <img src="<?php echo $app_path ?>images/pexels-5.jpg" alt="">
                    <h3><a href="orders">Order Manager</a></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="news-post">
                    <img src="<?php echo $app_path ?>images/pexels-6.jpg" alt="">
                    <h3><a href="users">Admin Account Manager</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'view/footer.php'; ?>
