<?php

$con = mysqli_connect("localhost","root","mysql");
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "abcglobal");

$s_Name = $_POST['s_Name'];
$s_Title = $_POST['s_Title'];
$s_Enterprise = $_POST['s_Enterprise'];

if (isset($_POST['ac'])) {
  $n_Ac = 1;
} else {
  $n_Ac = 0;
}

if (isset($_POST['it'])) {
  $n_It = 1;
} else {
  $n_It = 0;
}

if (isset($_POST['hr'])) {
  $n_Hr = 1;
} else {
  $n_Hr = 0;
}

$s_Email = $_POST['s_Email'];
$n_Age = (is_numeric($_POST['n_Age']) ? (int)$_POST['n_Age'] : 0);
$s_Message = $_POST['s_Message'];

$sql="INSERT INTO contact (name,title,enterprise,ac,it,hr,email,age,message) VALUES ('$s_Name','$s_Title','$s_Enterprise','$n_Ac','$n_It','$n_Hr','$s_Email',$n_Age,'$s_Message')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

header('Location: ' . 'success.php');

mysqli_close($con);
?>
