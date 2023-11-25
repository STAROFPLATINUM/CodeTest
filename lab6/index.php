<?php
session_start();





$visitCount = 1; // Default value for a new visitor

if (isset($_COOKIE['visit_count'])) {
    $visitCount = (int)$_COOKIE['visit_count'] + 1;
}

// Set the "visit_count" cookie with the updated value
setcookie('visit_count', $visitCount, time() + (86400 * 30), '/');
?>



<!-- set the cookie -->
<?php
$userName = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_name'])) {
   $username = $_POST['user_name'];
   setcookie("user_name", $username, time() + (86400 * 30), "/");

   // Redirect to the main page
   header("Location: index.php");
   exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Book Store</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

    <!-- Include the header template -->
<?php include 'includes/header_template.php';?>

    <div class="container mt-5"> <!-- Added container for consistent padding -->
        <div class="jumbotron text-center">
            <h1 class="display-4">BEST BOOK STORE</h1>
            <p class="lead">Discover a world of books across various genres.</p>
            <p style="font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">This page has been visited <?php echo $visitCount; ?> times.</p> <!-- Display the visit count -->
            <hr class="my-4">  <!-- Divider line -->
            <p>Check the navbar to explore our collection.</p>
        </div>
        <div class="my-4">
            <h3>What Readers Say:</h3>
            <blockquote class="blockquote">
                <p class="mb-0">This book store has an amazing collection of fantasy books!</p>
                <br>
                <footer class="blockquote-footer">Bot1</footer>
            </blockquote>
        </div>
    </div>
    <!-- Include the footer template -->
    <?php include 'includes/footer_template.php';?>
</body>
</html>
