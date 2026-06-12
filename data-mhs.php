<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/style.css">
    </head>

    <body>

        <nav class="navbar">
            <div class="container-fluid">
                <button class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#menu">☰</button>
                <span class="navbar-brand"><i class="bi bi-table"> </i>Data Mahasiswa</span>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start" id="menu">
            <div class="offcanvas-header">
                <h5>Menu</h5>
                <button class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>

            <div class="offcanvas-body">
                <a href="dashboard.php" class="list-group-item"><i class="bi bi-house"> </i>Dashboard</a>
                <a href="qr-scan.php" class="list-group-item"><i class="bi bi-qr-code-scan"> </i>Scan QR</a>
                <a href="form-add-mhs.php" class="list-group-item"><i class="bi bi-plus-circle"> </i>Tambah</a>
            </div>
        </div>

        <div class="container mt-3">

            <input type="text" class="form-control mb-3" placeholder="Cari...">

            <table class="table table-bordered text-center">
                <thead class="table-success">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php while($row = mysqli_fetch_assoc($data)) : ?>
                <tr>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>

                    <td>

                        <a
                        href="form.php?id=<?= $row['id']; ?>"
                        class="btn btn-success btn-sm">
                            Edit
                        </a>

                        <a
                        href="delete_mhs.php?id=<?= $row['id']; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Hapus data?')">
                            Hapus
                        </a>

                    </td>
                </tr>
                <?php endwhile; ?>
            </table>

        </div>
        <div class="container mt-3">
            <form action="form-add-mhs.php">
                <button class="btn btn-dark w-100">Tambah Mahasiswa</button>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>