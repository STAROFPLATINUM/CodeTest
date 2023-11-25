<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Empty the cart
$_SESSION['cart'] = [];

// Redirect back to the checkout page
header("Location: checkout.php");
exit;
?>
