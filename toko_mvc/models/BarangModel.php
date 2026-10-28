<?php
require_once __DIR__ . '/../config/Database.php';

class BarangModel {
    private $conn;
    private $table_name = "barang";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function tambahBarang($kode_barang, $nama_barang, $kategori, $harga, $stok) {
        $query = "INSERT INTO " . $this->table_name . " (kode_barang, nama_barang, kategori, harga, stok) VALUES (:kode_barang, :nama_barang, :kategori, :harga, :stok)";
        
        $stmt = $this->conn->prepare($query);

        // Sanitasi dan binding data untuk keamanan
        $stmt->bindParam(":kode_barang", $kode_barang);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":kategori", $kategori);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":stok", $stok);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>