<?php
// app/models/User.php
require_once '../config/database.php';

class Organizers{
    public $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllEvents() {
        $query = $this->db->query("SELECT id_events,nama_acara FROM events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllorganizers() {
        $query = $this->db->query("SELECT * 
        FROM organizers
        JOIN events ON organizers.id_events = events.id_events");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM organizers
        JOIN events ON organizers.id_events = events.id_events
         WHERE id_nama_penyelenggara = :id
        ");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_penyelenggara, $id_events, $kontak, $email) {
        $query = $this->db->prepare("INSERT INTO organizers ( nama_penyelenggara,id_events, kontak, email) VALUES ( :id_events, :nama_penyelenggara, :kontak, :email)");
        $query->bindParam(':id_events', $id_events);
        $query->bindParam(':nama_penyelenggara', $nama_penyelenggara);
        $query->bindParam(':kontak', $kontak);
        $query->bindParam(':email', $email);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE organizers SET nama_penyelenggara = :nama_penyelenggara, kontak = :kontak , email = :email, id_events = :id_events WHERE id_nama_penyelenggara = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_penyelenggara', $data['nama_penyelenggara']);
        $stmt->bindParam(':kontak', $data['kontak']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':id_events', $data['id_events']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM organizers WHERE id_nama_penyelenggara = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getAllWithEventName() {
        $query = "
            SELECT 
                organizers.id_events, 
                organizers.nama, 
                organizers.kontak, 
                organizers.email, 
                events.nama_acara 
            FROM 
                organizers
            JOIN 
                events ON organizers.id_events = events.id_events
        ";
    
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}