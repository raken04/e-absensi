<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'");

$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">
    </head>

    <body>

        <nav class="navbar">
            <div class="container-fluid">
                <span class="navbar-brand">Edit Data Mahasiswa</span>
            </div>
        </nav>

        <div class="container mt-3">
            <form action="edit_mhs.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <input name="nim" class="form-control mb-2" value="<?= $data['nim']; ?>" placeholder="NIM">
                <input name="nama" class="form-control mb-2" value="<?= $data['nama']; ?>" placeholder="Nama">
                <input name="email" class="form-control mb-2" value="<?= $data['email']; ?>" placeholder="Email">
                <input name="username" class="form-control mb-2" value="<?= $data['username']; ?>" placeholder="Username">
                <input name="password" class="form-control mb-2" value="<?= $data['password']; ?>" placeholder="Password">
                <!-- <input name="password" class="form-control mb-2" type="password" placeholder="Password"> -->

                <button type="submit" class="btn btn-success w-100">Simpan</button>
                <a href="data-mhs.php" class="btn btn-secondary w-100">Cancel</button>
                
            </form>
        </div>
        
    </body>
</html>