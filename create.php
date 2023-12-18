<?php
session_start();

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $jenis_kendaraan = $_POST["jenis_kendaraan"];
    $cc = $_POST["cc"];
    $warna = $_POST["warna"];
    $tanggal_produksi = $_POST["tanggal_produksi"];

    $_SESSION['form_data'] = compact('name', 'jenis_kendaraan', 'cc', 'warna', 'tanggal_produksi');

    $inputKendaraan = new Form();
    $resultKendaraan = $inputKendaraan->inputKendaraan($name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi);

    if ($resultKendaraan === -1) {
        $message = "Kendaraan sudah terdaftar.";
    } elseif ($resultKendaraan === 1) {
        $message = "Data kendaraan berhasil ditambahkan.";
        header("Location: index.php");
        exit();
    } else {
        $message = "Gagal menambahkan data kendaraan.";
    }

    echo $message;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./form.js"></script>
</head>

<body>
    <div class="container">
        <form id="form" action="create.php" method="POST">
            <h1>Tambah data</h1>
            <div class="input-control">
                <label for="name">Nama Kendaraan</label>
                <input id="name" name="name" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                <select id="jenis_kendaraan" name="jenis_kendaraan">
                    <option value="motor">
                        Motor</option>
                    <option value="mobil">Mobil
                    </option>
                    <option value="truk">Truk
                    </option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cc">CC</label>
                <input id="cc" name="cc" type="number">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="warna">Warna</label>
                <input id="warna" name="warna" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="tanggal_produksi">Tanggal Produksi</label>
                <input id="tanggal_produksi" name="tanggal_produksi" type="date">
                <div class="error"></div>
            </div>
            <button type="submit">Tambah Kendaraan</button>
        </form>
    </div>
    <script>
        window.onload = function () {
            const formData = JSON.parse(localStorage.getItem('formData')) || {};
            document.getElementById('name').value = formData.name || '';
            document.getElementById('jenis_kendaraan').value = formData.jenis_kendaraan || '';
            document.getElementById('cc').value = formData.cc || '';
            document.getElementById('warna').value = formData.warna || '';
            document.getElementById('tanggal_produksi').value = formData.tanggal_produksi || '';
        };

        document.getElementById('form').addEventListener('submit', function () {
            const formData = {
                name: document.getElementById('name').value,
                jenis_kendaraan: document.getElementById('jenis_kendaraan').value,
                cc: document.getElementById('cc').value,
                warna: document.getElementById('warna').value,
                tanggal_produksi: document.getElementById('tanggal_produksi').value,
            };

            localStorage.setItem('formData', JSON.stringify(formData));
        });
    </script>
</body>

</html>