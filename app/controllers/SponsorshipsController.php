<?php
// app/controllers/SponsorshipsController.php
require_once '../app/models/Sponsorships.php';

class SponsorshipsController extends Sponsorships{
    private $sponsorshipsModel;

    public function __construct() {
        $this->sponsorshipsModel = new Sponsorships();
    }

    public function index() {
        $sponsorships = $this->sponsorshipsModel->getAllSponsorships();
        require_once '../app/views/sponsorships/index.php';

    }

    public function create() {
        $events = $this->sponsorshipsModel->getAllEvents();
        require_once '../app/views/sponsorships/create.php';
    }

    public function store() {
        $id_events = $_POST['id_events'];
        $nama_sponsor = $_POST['nama_sponsor'];
        $nilai_sponsor = $_POST['nilai_sponsor'];
        $jenis_sponsor = $_POST['jenis_sponsor'];
        $this->sponsorshipsModel->add($id_events,$nama_sponsor, $nilai_sponsor, $jenis_sponsor);
        header('Location: /sponsorships/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->sponsorshipsModel->find($id); // Assume find() gets user by ID
        $sponsorships = $this->sponsorshipsModel->getAllEvents(); // Ambil data kategori
        require_once '../app/views/sponsorships/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->sponsorshipsModel->update($id, $data);
        if ($updated) {
            header("Location: /sponsorships/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->sponsorshipsModel->delete($id);
        if ($deleted) {
            header("Location: /sponsorships/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
    }
    }
}