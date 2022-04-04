<?php
session_start();
$_SESSION['username'] = "AnmarAbdi";
echo $_SESSION['username'];
if (!isset($_SESSION['username'])) {
    echo "You are not logged in!";
} else {
    echo " You are logged in!";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="main.css" />
    <script
      src="https://kit.fontawesome.com/52e9b973f0.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>

  <body>
    <h3><a href="index.php">Home</a></h3>
    <h3><a href="calendar.php">Calendar</a></h3>
    <h3><a href="calculator.php">Calculator</a></h3>
    <h3><a href="switch.php">Switch</a></h3>

    <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/Email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="signup.php">Signup</a>
    <form action="includes/logout.inc.php" method="post">
        <button type="submit" name="logout-submit">Logout</button>
    </form>