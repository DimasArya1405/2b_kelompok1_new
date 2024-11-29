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
        $query = $this->db->query("SELECT * 
        FROM sponsorships
        JOIN events ON sponsorships.id_events = events.id_events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM sponsorships
        JOIN events ON sponsorships.id_events = events.id_events
         WHERE id_sponsor = :id
        ");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_sponsor, $id_events, $nilai_sponsor, $jenis_sponsor) {
        $query = $this->db->prepare("INSERT INTO sponsorships (id_events, nama_sponsor, nilai_sponsor, jenis_sponsor) VALUES (:nama_sponsor, :id_events, :nilai_sponsor, :jenis_sponsor)");
        $query->bindParam(':id_events', $id_events);
        $query->bindParam(':nama_sponsor', $nama_sponsor);
        $query->bindParam(':nilai_sponsor', $nilai_sponsor);
        $query->bindParam(':jenis_sponsor', $jenis_sponsor);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE sponsorships SET nama_sponsor = :nama_sponsor, nilai_sponsor = :nilai_sponsor, jenis_sponsor = :jenis_sponsor, id_events  = :id_events WHERE id_sponsor = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_sponsor', $data['nama_sponsor']);
        $stmt->bindParam(':nilai_sponsor', $data['nilai_sponsor']);
        $stmt->bindParam(':jenis_sponsor', $data['jenis_sponsor']);
        $stmt->bindParam(':id_events', $data['id_events']);
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

    public function getAllWithEventName() {
        $query = "
            SELECT 
                sponsorships.id_events, 
                sponsorships.nama, 
                sponsorships.kontak, 
                sponsorships.email, 
                events.nama_acara 
            FROM 
                sponsorships
            JOIN 
                events ON sponsorships.id_events = events.id_events
        ";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
