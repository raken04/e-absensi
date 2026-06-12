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
                <span class="navbar-brand"><i class="bi bi-plus-circle"> </i>Tambah Data Mahasiswa</span>
            </div>
        </nav>

        <div class="container mt-3">
            <form action="create_mhs.php" method="POST">
                <input name="nim" class="form-control mb-2" placeholder="NIM">
                <input name="nama" class="form-control mb-2" placeholder="Nama">
                <input name="email" class="form-control mb-2" placeholder="Email">
                <input name="username" class="form-control mb-2" placeholder="Username">
                <input name="password" class="form-control mb-2" placeholder="Password">
                <input name="reenter_password" class="form-control mb-2" placeholder="Reenter Password">

                <button type="submit" class="btn btn-success w-100">Tambah</button>
                <button class="btn btn-secondary w-100">Cancel</button>
                
            </form>
        </div>
        
    </body>
</html>