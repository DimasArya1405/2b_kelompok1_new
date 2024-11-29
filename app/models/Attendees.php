<?php
// app/models/User.php
require_once '../config/database.php';

class Attendees {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllAttendees() {
        $query = $this->db->query("SELECT * 
        FROM attendees
        JOIN events ON attendees.id_events = events.id_events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT id_events,nama_acara FROM events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM attendees
        JOIN events ON attendees.id_events = events.id_events
         WHERE id_peserta = :id
        ");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_peserta, $email, $nomor_telepon, $id_events) {
        $query = $this->db->prepare("INSERT INTO attendees (nomor_telepon, id_events,nama_peserta, email) VALUES (:id_events,:nama_peserta, :email, :nomor_telepon)");
        $query->bindParam(':id_events', $id_events);
        $query->bindParam(':nama_peserta', $nama_peserta);
        $query->bindParam(':email', $email);
        $query->bindParam(':nomor_telepon', $nomor_telepon);
        // $query->bindParam(':acara', $acara);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE attendees SET nama_peserta = :nama_peserta, email = :email, nomor_telepon = :nomor_telepon, id_events = :id_events WHERE id_peserta = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_peserta', $data['nama_peserta']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':nomor_telepon', $data['nomor_telepon']);
        $stmt->bindParam(':id_events', $data['id_events']);
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

    public function getAllWithEventName() {
        $query = "
            SELECT 
                attendees.id_events, 
                attendees.nama, 
                attendees.kontak, 
                attendees.email, 
                events.nama_acara 
            FROM 
                attendees
            JOIN 
                events ON attendees.id_events = events.id_events
        ";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}