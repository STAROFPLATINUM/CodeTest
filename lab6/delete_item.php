<?php
session_start();

if(isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];
    unset($_SESSION['cart'][$isbn]);
}

header('Location: checkout.php');
exit;
?>
