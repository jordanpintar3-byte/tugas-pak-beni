<?php
class Database {
    private $host = "localhost"; // Port 3306 default, jadi cukup localhost
    private $db_name = "db_toko";
    private $username = "root";
    private $password = "root"; // <-- Ubah jadi "root" di sini!
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo "Koneksi database gagal: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>