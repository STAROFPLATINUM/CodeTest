<!-- reset the visit count once user logged out -->
<?php
session_start(); // Start or resume the session

// Check if the user is logged in
if (isset($_COOKIE['user_name'])) {
    // Reset the visit count for the current user
    $_SESSION['visit_count'] = 0;
}
?>

<!-- destroy the cookie -->
<?php

// Check if the user is logged in, if yes then log them out
if(isset($_COOKIE["user_name"])) {
    // Set the cookie expiration date in the past to delete it
    setcookie("user_name", "", time() - 86400 * 31, "/");
}

// Redirect user to index.php
header("Location: index.php");
exit;
?>
