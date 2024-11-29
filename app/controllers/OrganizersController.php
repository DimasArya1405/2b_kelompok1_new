<?php
// app/controllers/UserController.php
require_once '../app/models/organizers.php';

class OrganizersController extends Organizers {
    private $organizersModel;

    public function __construct() {
        $this->organizersModel = new Organizers();
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
        $id_events = $_POST['id_events'];
        $nama_penyelenggara = $_POST['nama_penyelenggara'];
        $kontak = $_POST['kontak'];
        $email = $_POST['email'];
        $this->organizersModel->add($id_events, $nama_penyelenggara,$kontak, $email);
        header('Location: /organizers/index');
    }
    
    public function edit($id) {
        $user = $this->organizersModel->find($id); // Assume find() gets user by ID
        $organizers = $this->organizersModel->getAllEvents(); // Ambil data kategori
        require_once '../app/views/organizers/edit.php';
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

    public function indexx() {
        $organizersModel = new Organizers($this->db);
        $data['organizers'] = $organizersModel->getAllWithEventName();
    
        // Render view dengan data
        require_once _DIR_ . '/../views/organizers/index.php';
    }
    
}