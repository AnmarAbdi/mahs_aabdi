<?php
$servername = "localhost";
$dBUsername = "mahs_aabdi"; 
$dBPassword = "mustangs";
$dBName = "mahs_aabdi";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}