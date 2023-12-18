<?php

class Connection{
  public $host = "localhost";
  public $password = "#Helloworld123";
  public $user = "id21669170_dea";
  public $db_name = "id21669170_uaspengweb";
  public $conn;

  public function __construct(){
    $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);

    if (!$this->conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}

}
class Form extends Connection {
    public function inputKendaraan($name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi) {
        $duplicate = mysqli_query($this->conn, "SELECT * FROM kendaraan WHERE name = '$name' AND jenis_kendaraan = '$jenis_kendaraan'");

        if (mysqli_num_rows($duplicate) > 0) {
            return -1; 
        } else {
            $insertResult = $this->insertKendaraan($name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi);

            if ($insertResult) {
                return 1; 
            } else {
                return 0; 
            }
        }
    }

    public function editKendaraan($id, $name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi) {
        $updateQuery = "UPDATE kendaraan SET name='$name', jenis_kendaraan='$jenis_kendaraan', cc=$cc, warna='$warna', tanggal_produksi='$tanggal_produksi' WHERE id=$id";
        $updateResult = mysqli_query($this->conn, $updateQuery);

        return $updateResult ? 1 : 0; 
    }

    public function deleteKendaraan($id) {
        $deleteQuery = "DELETE FROM kendaraan WHERE id=$id";
        $deleteResult = mysqli_query($this->conn, $deleteQuery);

        return $deleteResult ? 1 : 0; 
    }
    public function selectKendaraanById($id) {
        $result = mysqli_query($this->conn, "SELECT * FROM kendaraan WHERE id = $id");
        return mysqli_fetch_assoc($result);
    }

    public function getAllKendaraan() {
        $result = mysqli_query($this->conn, "SELECT * FROM kendaraan");
        $kendaraanData = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $kendaraanData[] = $row;
        }

        return $kendaraanData;
    }

    private function insertKendaraan($name, $jenis_kendaraan, $cc, $warna, $tanggal_produksi) {
        $insertQuery = "INSERT INTO kendaraan (name, jenis_kendaraan, cc, warna, tanggal_produksi) VALUES ('$name', '$jenis_kendaraan', $cc, '$warna', '$tanggal_produksi')";
        $insertResult = mysqli_query($this->conn, $insertQuery);

        return $insertResult; 
    }
}
