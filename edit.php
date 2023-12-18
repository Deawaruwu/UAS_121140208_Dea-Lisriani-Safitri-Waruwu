<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $select = new Form(); 

    $kendaraanData = $select->selectKendaraanById($id);

    if (!$kendaraanData) {
        echo "Kendaraan not found.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["_method"]) && strtoupper($_POST["_method"]) === "PUT") {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $jenis_kendaraan = $_POST["jenis_kendaraan"];
        $cc = $_POST["cc"];
        $warna = $_POST["warna"];
        $tanggal_produksi = $_POST["tanggal_produksi"];

        $inputKendaraan = new Form(); 
        $resultEdit = $inputKendaraan->editKendaraan($id, $name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi);

        if ($resultEdit === 1) {
            header("Location: index.php");
            exit();
        } else {
            $messageEdit = "Gagal mengedit data kendaraan.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kendaraan Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script defer src="./form.js"></script>
</head>

<body>
    <div class="container">
        <form id="form" action="edit.php" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="id" value="<?php echo $kendaraanData['id']; ?>">
            <h1>Edit Kendaraan Data</h1>
            <div class="input-control">
                <label for="name">Nama Kendaraan</label>
                <input id="name" name="name" type="text" value="<?php echo $kendaraanData['name']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="jenis_kendaraan">Jenis Kendaraam</label>
                <select id="jenis_kendaraan" name="jenis_kendaraan">
                    <option value="motor" <?php echo ($kendaraanData['jenis_kendaraan'] == 'motor') ? 'selected' : ''; ?>>
                        Motor</option>
                    <option value="mobil" <?php echo ($kendaraanData['jenis_kendaraan'] == 'mobil') ? 'selected' : ''; ?>>Mobil
                    </option>
                    <option value="truk" <?php echo ($kendaraanData['jenis_kendaraan'] == 'truk') ? 'selected' : ''; ?>>Truk
                    </option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cc">CC</label>
                <input id="cc" name="cc" type="number" value="<?php echo $kendaraanData['cc']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="warna">Warna</label>
                <input id="warna" name="warna" type="text" value="<?php echo $kendaraanData['warna']; ?>">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="tanggal_produksi">Tanggal Produksi</label>
                <input id="tanggal_produksi" name="tanggal_produksi" type="date"
                    value="<?php echo $kendaraanData['tanggal_produksi']; ?>">
                <div class="error"></div>
            </div>
            <button type="submit">Update Kendaraan</button>
        </form>
    </div>
</body>

</html>