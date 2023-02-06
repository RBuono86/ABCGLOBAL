<?php
// Connect to the ABCGLOBAL database
$dsn = 'mysql:host=localhost;dbname=abcglobal';
$username = 'root';
$password = 'mysql';

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try 
{
  $db = new PDO($dsn, $username, $password, $options);
} 
catch (PDOException $e) 
{
  $error_message = $e->getMessage();
  include('errors/db_connect_error.php');
  exit();
}
?>