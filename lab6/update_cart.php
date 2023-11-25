<?php
session_start();

if(isset($_POST['quantity']) && is_array($_POST['quantity'])) {
    foreach($_POST['quantity'] as $isbn => $quantity) {
        $_SESSION['cart'][$isbn] = $quantity;
    }
}

header('Location: checkout.php');
exit;
?>
