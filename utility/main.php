<?php
// Get the document root
$doc_root = $_SERVER['DOCUMENT_ROOT'];
//echo 'The value of doc_root is :'.$doc_root; // Returns C:/Program Files/Ampps/www

$uri = $_SERVER['REQUEST_URI'];
//echo 'The value of uri is :'.$uri; // Returns /abcglobal/admin/users/

$dirs = explode('/', $uri);
//echo 'The value is: '.$dirs[1];  // returns abcglobal
//echo ' The value is: '.$dirs[2]; // returns admin
//echo ' The value is: '.$dirs[3]; // returns users 


$app_path = '/' . $dirs[1] . '/'; //Get only the root directory i.e. ABCGLOBAL

// Set the include path 
set_include_path($doc_root . $app_path);
//echo "Value of set include path is " . set_include_path($doc_root . $app_path); // returns C:/Program Files/Ampps/www/abcglobal/

// Get common code
require_once('utility/tags.php');
require_once('model/db.php');


// Function to handle database errors 
function display_db_error($error_message) {
    global $app_path;
    include 'errors/db_connect_error.php';
    exit;
}

// Function to handle general errors (For Admins to display errors with their headers)
function display_error($error_message) {
    global $app_path;
    include 'errors/error.php';
    exit;
}

// Function to handle general errors (For Members to display errors with their headers)
function member_error($error_message) {
    global $app_path;
    include 'errors/member_error.php';
    exit;
}


// Redirect function
function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}

// Start session to store user and cart data
session_start();
?>
