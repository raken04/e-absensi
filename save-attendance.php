<?php

include 'koneksi.php';

date_default_timezone_set('Asia/Jakarta');

$token = $_POST['token'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

mysqli_query(
    $conn,
    "INSERT INTO absensi (token, waktu, status,latitude,longitude) VALUES (
        '$token',
        NOW(),
        'Hadir',
        '$lat',
        '$lng'
    )"
);

echo "success";