<?php
// Start session
session_start();

// Destroy all sessions
session_destroy();

// Redirect to the login page or homepage
header("Location: login.php"); // "login.php" কে আপনার লগইন পেজের নাম দিয়ে প্রতিস্থাপন করুন
exit();
?>
