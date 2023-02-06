<?php
    // If administrator is not logged in, call index.php to show login form
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . $app_path . 'admin/users/' );
    }
?>
