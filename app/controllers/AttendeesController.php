<?php
// app/controllers/UserController.php
require_once '../app/models/Attendees.php';
require_once '../app/models/Events.php';

class AttendeesController extends Attendees{
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
        $id_events = $_POST['id_events'];
        $nama_peserta = $_POST['nama_peserta'];
        $email = $_POST['email'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $this->attendeesModel->add($id_events,$nama_peserta, $email, $nomor_telepon);
        header('Location: /attendees/index');
    }
    public function edit($id) {
        $user = $this->attendeesModel->find($id); // Assume find() gets user by ID
        $attendees = $this->attendeesModel->getAllEvents(); // Ambil data kategori
        require_once '../app/views/attendees/edit.php';
}

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