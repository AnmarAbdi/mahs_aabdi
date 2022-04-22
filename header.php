<?php
  session_start();
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="switch.php">Switch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
      </ul>
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
          <button class="btn btn-outline-info" type="submit" name="logout-submit">Logout</button>
      </form>';
        }
        else {
          echo '<form action="includes/login.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="Username/Email">
          <input type="password" name="pwd" placeholder="Password">
          <button class="btn btn-outline-info" type="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php" class="btn btn-outline-info">Signup</a>';
        }


      ?>
      
    </div>
  </nav>

    
    