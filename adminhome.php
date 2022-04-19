<?php

session_start();
$_SESSION['usertype'] = 'admin';
$_SESSION['usertype'] = 'user';
if (isset($_SESSION['usertype'] == 'user' ) {
    header("Location: index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN HOME</title>
</head>
<body>
    <p>ADMIN HOME</p>
</body>
</html>