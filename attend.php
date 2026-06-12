<?php

date_default_timezone_set('Asia/Jakarta');

include 'koneksi.php';

$token = $_GET['token'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Absensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div id="status" class="alert alert-info">
        Mengambil lokasi...
    </div>

</div>

<script>

navigator.geolocation.getCurrentPosition(

function(position){

    let lat = position.coords.latitude;
    let lng = position.coords.longitude;

    fetch(
        "save-attendance.php",
        {
            method: "POST",

            headers: {
                "Content-Type":
                "application/x-www-form-urlencoded"
            },

            body:
                "token=<?=$token?>"+
                "&lat="+lat+
                "&lng="+lng
        }
    )

    .then(response => response.text())

    .then(data => {
        fetch("check-attendance.php?token=<?=$token?>")
        .then(response => response.json())
        .then(absen => {
            document.getElementById("status").innerHTML =
            `
                <div class="alert alert-success">
                    <h3>Absensi Berhasil</h3>

                    <p>
                        Hadir pada :
                        ${absen.waktu}
                    </p>

                    <p>Latitude : ${absen.lat}</p>

                    <p>Longitude : ${absen.lng}</p>
                </div>
            `;
        });
    });

}

);

</script>

</body>
</html>