<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $inputKendaraan = new Form(); 

    $resultDelete = $inputKendaraan->deleteKendaraan($id); 

    if ($resultDelete === 1) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data kendaraan.";
    }
} else {
    echo "Invalid request.";
}
?>
