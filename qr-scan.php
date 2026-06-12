<?php

include 'koneksi.php';

$token = uniqid();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>

<body>

<nav class="navbar">
    <div class="container-fluid">
        <span class="navbar-brand">QR Scanner</span>
    </div>
</nav>

<div class="container text-center mt-4">

    <div id="scanner-box">

        <div id="qrcode"></div>

        <p class="mt-3">
            Silakan scan QR Code menggunakan HP
        </p>

    </div>

    <form action="dashboard.php">
        <button class="btn btn-dark w-100 mt-3">
            Halaman Utama
        </button>
    </form>

</div>

<script>

new QRCode(
    document.getElementById("qrcode"),
    "https://192.168.100.113/e-absensi_2/attend.php?token=<?=$token?>"
);

</script>

<script>

setInterval(() => {

    fetch("check-attendance.php?token=<?=$token?>")
    .then(response => response.json())
    .then(data => {

        if(data.success){

            document.getElementById("scanner-box").innerHTML = `
                <div class="alert alert-success">
                    <h4>✓ Absensi Berhasil</h4>
                    <p>Waktu : ${data.waktu}</p>
                    <p>Latitude : ${data.lat}</p>
                    <p>Longitude : ${data.lng}</p>
                </div>
            `;

        }

    });

}, 2000);

</script>

</body>
</html>