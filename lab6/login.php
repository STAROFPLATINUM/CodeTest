<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href = "./includes/login.css">
</head>

<form action="index.php" method="post">
    <label for="user_name">User Name:</label>
    <input type="text" name="user_name" id="user_name" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Login">
</form>

</html>
