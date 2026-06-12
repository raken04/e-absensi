<?php

include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($conn,"UPDATE mahasiswa SET nim='$nim', nama='$nama', email='$email', username='$username', password='$password' WHERE id='$id'");

header("Location: data-mhs.php");
exit;