<?php
// app/controllers/UserController.php
require_once '../app/models/organizers.php';

class OrganizersController {
    private $organizersModel;

    public function __construct() {
        $this->organizersModel = new organizers();
    }

    public function index() {
        $users = $this->organizersModel->getAllorganizers();
        require_once '../app/views/organizers/index.php';

    }

    public function create() {
        $events = $this->organizersModel->getAllEvents();
        require_once '../app/views/organizers/create.php';
    }

    public function store() {
        $nama_penyelenggara = $_POST['nama_penyelenggara'];
        $kontak = $_POST['kontak'];
        $email = $_POST['email'];
        header('Location: /organizers/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $organizers = $this->organizersModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/organizers/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->organizersModel->update($id, $data);
        if ($updated) {
            header("Location: /organizers/index"); // Redirect to user list
        } else {
            echo "Failed to update organizers.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->organizersModel->delete($id);
        if ($deleted) {
            header("Location: /organizers/index"); // Redirect to user list
        } else {
            echo "Failed to delete organizers.";
        }
    }
}
