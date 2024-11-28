<?php
// app/models/User.php
require_once '../config/database.php';

class Attendees {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllAttendees() {
        $query = $this->db->query("SELECT * FROM attendees");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
 
    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM attendees WHERE id_peserta = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_peserta, $email, $nomor_telepon, $acara) {
        $query = $this->db->prepare("INSERT INTO attendees (nama_peserta, email, nomor_telepon, acara) VALUES (:nama_peserta, :email, :nomor_telepon, :acara)");
        $query->bindParam(':nama_peserta', $nama_peserta);
        $query->bindParam(':email', $email);
        $query->bindParam(':nomor_telepon', $nomor_telepon);
        $query->bindParam(':acara', $acara);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE attendees SET nama_peserta = :nama_peserta, email = :email, nomor_telepon = :nomor_telepon, acara = :acara WHERE id_peserta = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_peserta', $data['nama_peserta']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':nomor_telepon', $data['nomor_telepon']);
        $stmt->bindParam(':acara', $data['acara']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM attendees WHERE id_peserta = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
