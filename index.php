<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan Data</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1 class="title">List Kendaraan Di Bengkel</h1>
    <?php
    include 'db.php';
    $inputKendaraan = new Form();
    $resultKendaraan = $inputKendaraan->getAllKendaraan();
    $no = 1;
    echo "<table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Jenis Kendaraan</th>
            <th>CC</th>
            <th>Warna</th>
            <th>Tanggal Produksi</th>
            <th>Action</th>
        </tr>";

    foreach ($resultKendaraan as $row) {
        echo "<tr>
            <td>" . $no++ . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["jenis_kendaraan"] . "</td>
            <td>" . $row["cc"] . "</td>
            <td>" . $row["warna"] . "</td>
            <td>" . $row["tanggal_produksi"] . "</td>
            <td class='action-buttons'>
                <a class='edit-button' href='edit.php?id=" . $row["id"] . "'>Edit</a>
                <a class='delete-button' href='delete.php?id=" . $row["id"] . "'>Delete</a>
            </td>
          </tr>";
    }

    echo "</table>";
    ?>
     <a class="add-button" href="create.php">Tambah Data</a>

    <div id="cookie-notice">
        <p>Kami menggunakan cookie untuk meningkatkan pengalaman Anda di situs web ini. Dengan melanjutkan, Anda setuju dengan kebijakan cookie kami.</p>
        <button onclick="acceptCookies()">Setuju</button>
    </div>

    <script>
        function acceptCookies() {
            setCookie("cookie", "true", 30);
            document.getElementById("cookie-notice").style.display = "none";
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        var cookieAccepted = getCookie("cookie");
        if (cookieAccepted === "true") {
            document.getElementById("cookie-notice").style.display = "none";
        }
    </script>
</body>

</html>
