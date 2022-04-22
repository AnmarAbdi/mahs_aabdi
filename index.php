<?php
  include 'header.php';
  ?>
<br>
<main>
  <?php
    if (isset($_SESSION['userId'])) {
      echo '<p>You are logged in!</p>';
    }
    else {
      echo '<p>You are logged out!</p>';
    }
  ?>



</main>

<br>
<br>
<br>
<br>
<!--
<?php
echo $_POST['name'];
setcookie("name", "Anmar", time() + 172800);
?>
<form method="POST">
  <input type="hidden" name="name" value="Anmar">
  <button type="submit">PRESS ME!</button>

</form>

<br>
<form method="GET">
  <input type="text" name="person">
  <button>SUBMIT</button>
</form>

  <?php
    $name = $_GET['person'];
    echo $name." is a handsome fellow!";


  ?>
-->

<?php
  include 'footer.php';
?>