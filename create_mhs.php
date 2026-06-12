<?php

include 'koneksi.php';

$nim      = $_POST['nim'];
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "
INSERT INTO mahasiswa
(nim,nama,email,username,password)
VALUES
('$nim','$nama','$email','$username','$password')";

mysqli_query($conn, $sql);

header("Location: data-mhs.php");
exit;