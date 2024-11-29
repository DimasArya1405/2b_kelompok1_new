<?php
// config/database.php
class Database {
    private $host = '160.19.166.42';
    private $db_name = '2B_klp1';
    private $username = '2B_klp1';
    private $password = 'fbVVrQF8_*ut.Koc';
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }

}
try {
    $db = new PDO('mysql:host=160.19.166.42;dbname=2B_klp1', '2B_klp1', 'fbVVrQF8_*ut.Koc');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}