<?php
session_start();
//store the link for the previous page for user to redirect to continue shopping button
$_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FANTASY</title>
</head>
<?php include 'data.php'; ?>
<?php include 'includes/header_template.php';?>

<div class="container mt-5">
    <h1 class="text-center">Fantasy Books</h1>
    <div class="row">
        <?php 
        foreach ($books as $book) {
            if ($book['genre'] == 'Fantasy') {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo $book['image']; ?>" class="card-img-top" alt="<?php echo $book['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $book['title']; ?></h5>
                    <p><strong>Author:</strong> <?php echo $book['author']; ?></p>
                    <p><strong>ISBN:</strong> <?php echo $book['isbn']; ?></p>
                    <p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
                    <p><strong>Publication Year:</strong> <?php echo $book['year']; ?></p>

                    <!-- Add to cart form -->
                    <form action="cart_action.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $book['isbn']; ?>">
                    <input type="hidden" name="add_to_cart" value="1">
                    <input type="submit" class="btn btn-primary" value="Add to Cart">
                    </form>
                </div>
            </div>
        </div>
        <?php 
            } 
        } 
        ?>
    </div>
</div>

<?php include 'includes/footer_template.php';?>

</html>



