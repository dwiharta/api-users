<?php

$conn = mysqli_connect("localhost", "root", "", "data_api");

$json = file_get_contents("https://jsonplaceholder.typicode.com/users");
$data = json_decode($json, true);

foreach ($data as $row) {

    $address = $row['address']['street'] . ", " .
               $row['address']['suite'] . ", " .
               $row['address']['city'] . ", " .
               $row['address']['zipcode'];

    mysqli_query($conn, "INSERT INTO users(id,name,username,address)
    VALUES(
    '{$row['id']}',
    '{$row['name']}',
    '{$row['username']}',
    '$address'
    )");
}

echo "Import berhasil!";
?>