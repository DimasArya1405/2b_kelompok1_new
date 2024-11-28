<?php
// app/controllers/UserController.php
require_once '../app/models/Events.php';

class EventsController {
    private $EventsModel;

    public function __construct() {
        $this->EventsModel = new Events();
    }

    public function index() {
        $users = $this->EventsModel->getAllEvents();
        require_once '../app/views/events/index.php';

    }

    public function create() {
        require_once '../app/views/events/create.php';
    }

    public function store() {
        $nama_acara = $_POST['nama_acara'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $lokasi = $_POST['lokasi'];
        $this->EventsModel->add($nama_acara, $deskripsi, $tanggal, $lokasi);
        header('Location: /events/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->EventsModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/events/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->EventsModel->update($id, $data);
        if ($updated) {
            header("Location: /events/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->EventsModel->delete($id);
        if ($deleted) {
            header("Location: /events/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
