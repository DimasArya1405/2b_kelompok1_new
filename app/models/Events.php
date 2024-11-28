<?php
// app/models/User.php
require_once '../config/database.php';

class Events {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT * FROM events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM events WHERE id_events = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_acara, $deskripsi, $tanggal, $lokasi) {
        $query = $this->db->prepare("INSERT INTO events (nama_acara, deskripsi, tanggal, lokasi) VALUES (:nama_acara, :deskripsi, :tanggal, :lokasi)");
        $query->bindParam(':nama_acara', $nama_acara);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':tanggal', $tanggal);
        $query->bindParam(':lokasi', $lokasi);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE events SET nama_acara = :nama_acara, deskripsi = :deskripsi, tanggal = :tanggal, lokasi = :lokasi WHERE id_events = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_acara', $data['nama_acara']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':tanggal', $data['tanggal']);
        $stmt->bindParam(':lokasi', $data['lokasi']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM events WHERE id_events = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
