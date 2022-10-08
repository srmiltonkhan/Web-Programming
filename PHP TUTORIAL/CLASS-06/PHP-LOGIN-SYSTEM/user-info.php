<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="my-5">Your Unique ID: <b><?php echo htmlspecialchars($_SESSION["id"]); ?></b></h1>
    <h1 class="my-5">Your Email is: <b><?php echo htmlspecialchars($_SESSION["email"]); ?></b></h1>
    <p>
        <a href="welcome.php" class="btn btn-danger ml-3">back to welcome page</a>
    </p>
</body>

</html>