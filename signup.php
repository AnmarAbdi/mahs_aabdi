<?php
  include 'header.php';
  ?>
<br>
<main>
<h1>Signup</h1>
<?php


 if (isset($_GET["error"])) {
   if ($_GET["error"] == "emptyfields") {
     echo '<p class="signuperror">Fill in all fields!</p>';
   }
   else if ($_GET["error"] == "invaliduidmail") {
     echo '<p class="signuperror">Invalid username and email!</p>';
   }
   else if ($_GET["error"] == "invaliduid") {
    echo '<p class="signuperror">Invalid username!</p>';
   }
   else if ($_GET["error"] == "invalidmail") {
    echo '<p class="signuperror">Invalid email!</p>';
   }
   else if ($_GET["error"] == "passwordcheck") {
    echo '<p class="signuperror">Your passwords do not match!</p>';
   }
   else if ($_GET["error"] == "usertaken") {
    echo '<p class="signuperror">Username is already taken!</p>';
  }
 }
 if (isset($_GET["signup"])) {
  if ($_GET["signup"] == "success") {
  echo '<p>Signup successful!</p>'; 
 }
}
?>
<div class="container d-flex justify-content-center">
  <div class="row">
    <div class="card">
      <form action="includes/signup.inc.php" method="post">
        <div class="form-group">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat password">
        </div>
        <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
</main>
<!--
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
-->
<?php
  include 'footer.php';
?>