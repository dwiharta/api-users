<?php
include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Users</title>

    <style>
        table{
            border-collapse:collapse;
            width:100%;
        }

        td,th{
            border:1px solid black;
            padding:8px;
        }

        a{
            text-decoration:none;
        }
    </style>
</head>
<body>

<h2>Data Users</h2>

<a href="tambah.php">Tambah Data</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php while($row=mysqli_fetch_assoc($data)){ ?>

<tr>

<td><?= $row['id']; ?></td>
<td><?= $row['name']; ?></td>
<td><?= $row['username']; ?></td>
<td><?= $row['address']; ?></td>

<td>

<a href="edit.php?id=<?= $row['id'];?>">Edit</a>

|

<a href="hapus.php?id=<?= $row['id'];?>"
onclick="return confirm('Yakin hapus?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>