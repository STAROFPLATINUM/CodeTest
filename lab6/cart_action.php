<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addToCart($productId, $quantity) {
   // Start session if not already started
   if (session_status() == PHP_SESSION_NONE) {
       session_start();
   }

   // Initialize cart if not set
   if (!isset($_SESSION['cart'])) {
       $_SESSION['cart'] = [];
   }

   // If the product is not in the cart, add it
   if (!array_key_exists($productId, $_SESSION['cart'])) {
       $_SESSION['cart'][$productId] = $quantity;
   } else {
       // Increment the quantity of the product if it exists
       $_SESSION['cart'][$productId] += $quantity;
   }
}



// Handling the POST request for adding items to the cart
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add_to_cart'])) {
    $productId = $_POST['product_id'];
    $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;

    addToCart($productId, $quantity);

    // Redirect back to the referring page 
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
?>
