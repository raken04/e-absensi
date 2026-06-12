<?php

include 'koneksi.php';

$token = $_GET['token'];

$query = mysqli_query(
    $conn, "SELECT * FROM absensi WHERE token='$token' LIMIT 1"
);

$data = mysqli_fetch_assoc($query);

if($data){

    echo json_encode([
        'success' => true,
        'waktu' => $data['waktu'],
        'lat' => $data['latitude'],
        'lng' => $data['longitude']
    ]);

}else{

    echo json_encode([
        'success' => false
    ]);

}