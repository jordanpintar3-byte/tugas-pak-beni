<?php
require_once __DIR__ . '/../models/BarangModel.php';

class BarangController {
    private $model;

    public function __construct() {
        $this->model = new BarangModel();
    }

    public function index() {
        $pesan = "";
        $status = "";

        if(isset($_POST['submit'])) {
            $kode_barang = trim($_POST['kode_barang']);
            $nama_barang = trim($_POST['nama_barang']);
            $kategori   = trim($_POST['kategori']);
            $harga      = trim($_POST['harga']);
            $stok       = trim($_POST['stok']);

            // Validasi Sederhana
            if(empty($kode_barang) || empty($nama_barang) || empty($kategori) || empty($harga) || empty($stok)) {
                $pesan = "Semua kolom wajib diisi!";
                $status = "error";
            } elseif(!is_numeric($harga) || !is_numeric($stok)) {
                $pesan = "Harga dan stok harus berupa angka!";
                $status = "error";
            } else {
                $result = $this->model->tambahBarang($kode_barang, $nama_barang, $kategori, $harga, $stok);
                if($result) {
                    $pesan = "Data barang berhasil disimpan!";
                    $status = "success";
                } else {
                    $pesan = "Gagal menyimpan data barang (mungkin Kode Barang sudah ada).";
                    $status = "error";
                }
            }
        }

        // Panggil View
        require_once __DIR__ . '/../views/tambah_barang.php';
    }
}
?>