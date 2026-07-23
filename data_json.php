<?php

header("Content-Type: application/json");

$conn = mysqli_connect("localhost", "root", "", "data_api");

$query = mysqli_query($conn, "SELECT * FROM users");

$data = [];

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT);

?>