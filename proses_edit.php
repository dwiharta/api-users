<?php

include "koneksi.php";

$id=$_POST['id'];
$name=$_POST['name'];
$username=$_POST['username'];
$address=$_POST['address'];

mysqli_query($conn,"
UPDATE users SET

name='$name',
username='$username',
address='$address'

WHERE id='$id'
");

header("Location:index.php");