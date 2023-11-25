<?php
session_start(); 

$welcomeMessage = "";
if (isset($_COOKIE["user_name"])) {
    $welcomeMessage = "Welcome back " . $_COOKIE["user_name"];
}
?>

<!-- Bootstrap Navbar for Navigation -->
<header>  
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Best Book Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comics.php">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="fantasy.php">Fantasy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sci-fi.php">Sci-Fi</a>
                </li>
            </ul>

            <!-- Cart information -->
            <div class="ml-auto mr-3">
                <a href="checkout.php" class="btn btn-outline-primary">
                    Cart (<?php echo isset($_SESSION['cart']) ? array_sum($_SESSION['cart']) : 0; ?> items)
                </a>
            </div>
            
            <!-- login button -->
            <div class="ml-2 mr-3">
               <?php
                if ($welcomeMessage) {
                    echo "<span class='btn btn-outline-success'>$welcomeMessage</span>";
                    echo "<a href='logout.php' class='btn btn-danger ml-2'>Logout</a>";
                } else {
                    echo "<a href='login.php' class='btn btn-info'>Login</a>";
                }
                ?>
            </div>
        </div>
    </nav>
</header>
