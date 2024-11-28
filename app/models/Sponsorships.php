<?php
// app/models/Sponsorships.php
require_once '../config/database.php';

class Sponsorships {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT id_events,nama_acara FROM events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllSponsorships() {
        $query = $this->db->query("SELECT * FROM sponsorships");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM sponsorships WHERE id_sponsor = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_sponsor, $nilai_sponsor, $jenis_sponsor) {
        $query = $this->db->prepare("INSERT INTO sponsorships (nama_sponsor, nilai_sponsor, jenis_sponsor) VALUES (:nama_sponsor, :nilai_sponsor, :jenis_sponsor)");
        $query->bindParam(':nama_sponsor', $nama_sponsor);
        $query->bindParam(':nilai_sponsor', $nilai_sponsor);
        $query->bindParam(':jenis_sponsor', $jenis_sponsor);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE sponsorships SET nama_sponsor = :nama_sponsor, nilai_sponsor = :nilai_sponsor, jenis_sponsor = :jenis_sponsor WHERE id_sponsor = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_sponsor', $data['nama_sponsor']);
        $stmt->bindParam(':nilai_sponsor', $data['nilai_sponsor']);
        $stmt->bindParam(':jenis_sponsor', $data['jenis_sponsor']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM sponsorships WHERE id_sponsor = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
