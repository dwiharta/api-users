<?php

include "koneksi.php";

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");

$row=mysqli_fetch_assoc($data);

?>

<form action="proses_edit.php" method="post">

<input type="hidden" name="id" value="<?= $row['id']?>">

Nama<br>
<input type="text" name="name" value="<?= $row['name']?>"><br><br>

Username<br>
<input type="text" name="username" value="<?= $row['username']?>"><br><br>

Alamat<br>

<textarea name="address"><?= $row['address']?></textarea>

<br><br>

<button>Simpan</button>

</form>