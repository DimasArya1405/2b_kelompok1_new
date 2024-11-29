<?php
// app/controllers/UserController.php
require_once '../app/models/Attendees.php';

class AttendeesController {
    private $attendeesModel;

    public function __construct() {
        $this->attendeesModel = new Attendees();
    }
    
    public function index() {
        $attendees = $this->attendeesModel->getAllAttendees();
        require_once '../app/views/attendees/index.php';
    }

    public function create() {
        $events = $this->attendeesModel->getAllEvents();
        require_once '../app/views/attendees/create.php';
    }

    public function store() {
        $nama_peserta = $_POST['nama_peserta'];
        $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $acara = $_POST['acara'];
        $this->attendeesModel->add($nama_peserta, $email, $nomor_telepon, $acara);
        header('Location: /attendees/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->attendeesModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/attendees/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->attendeesModel->update($id, $data);
        if ($updated) {
            header("Location: /attendees/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->attendeesModel->delete($id);
        if ($deleted) {
            header("Location: /attendees/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
