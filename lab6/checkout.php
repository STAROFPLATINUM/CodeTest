<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
   session_start();
}
include 'data.php';



// Initialize cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function getProductDetailsById($isbn) {
   global $books;  // Access the $books array from data.php

   // Loop through the books array to find the matching ISBN
   foreach ($books as $book) {
      if ($book['isbn'] === $isbn) {
         if (!isset($book['price'])) {
             $book['price'] = 0.00;
         }
         if (!isset($book['title'])) {
             $book['title'] = "Unknown";
         }
         return $book;
     }
     
   }

   // Return null if no matching book is found
   return null;
}

$cartItems = [];
$totalPrice = 0.00;

foreach ($_SESSION['cart'] as $productId => $quantity) {
    $productDetails = getProductDetailsById($productId);
    $productDetails['quantity'] = $quantity;
    $productDetails['subTotal'] = $productDetails['price'] * $quantity;
    $totalPrice += $productDetails['subTotal'];
    $cartItems[] = $productDetails;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center my-4">Your Shopping Cart</h2>
    <form action="update_cart.php" method="post">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Item Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cartItems as $item): ?>
                    <tr>
                        <td><?= $item['title']; ?></td>
                        <td>
                            <input type="number" name="quantity[<?= $item['isbn']; ?>]" value="<?= $item['quantity']; ?>" min="1">
                        </td>
                        <td>$<?= number_format($item['subTotal'], 2); ?></td>
                        <td>
                            <a href="delete_item.php?isbn=<?= $item['isbn']; ?>" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr class="table-primary">
                    <td><strong>Total:</strong></td>
                    <td colspan="2"><strong>$<?= number_format($totalPrice, 2); ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <input type="submit" value="Update Cart" class="btn btn-info">
    </form>

    <div class="actions mt-3">
        <a href="<?= isset($_SESSION['previous_page']) ? $_SESSION['previous_page'] : 'index.php' ?>" class="btn btn-primary">Continue shopping</a>
        <a href="empty_cart.php" class="btn btn-danger">Empty cart</a>
    </div>
</div>
</body>
</html>
