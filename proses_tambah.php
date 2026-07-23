<?php
include "koneksi.php";

$name = $_POST['name'];
$username = $_POST['username'];
$address = $_POST['address'];

mysqli_query($conn, "INSERT INTO users(name, username, address)
VALUES('$name', '$username', '$address')");

header("Location: index.php");
exit;
?>