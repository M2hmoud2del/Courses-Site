<?php
session_start(); // Start the session
// Destroy the session
session_destroy();
// Redirect to the login page
header('Location: login_register.php');
exit();
?>
