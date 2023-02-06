<?php

  require_once('utility/main.php');

  require_once('model/product_lib.php');



  $products = get_featured_product();

  
// Display products


  include('show_product.php');

?>