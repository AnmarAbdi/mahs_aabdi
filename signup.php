<?php
  include 'header.php';
  ?>
<br>
<form>
  <div class="form-group" action="includes/signup.inc.php" method="post">
    <input type="text" name="uid" placeholder="Username">
    <input type="text" name="mail" placeholder="Email">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwd-repeat" placeholder="Repeat password">
  </div>
  <button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
</form>
<!--
<main>
  <h1>Signup</h1>
  <form action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="mail" placeholder="Email">
      <input type="password" name="pwd" placeholder="Password">
      <input type="password" name="pwd-repeat" placeholder="Repeat password">
      <button type="submit" name="signup-submit">Signup</button>
  </form>
</main>
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
-->
<?php
  include 'footer.php';
?>