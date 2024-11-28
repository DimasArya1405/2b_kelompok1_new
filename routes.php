<?php
// routes.php
require_once 'app/controllers/EventsController.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/OrganizersController.php';
require_once 'app/controllers/SponsorshipsController.php';
require_once 'app/controllers/AttendeesController.php';


$eventscontroller = new EventsController();
$homeController = new HomeController();
$organizerscontroller = new OrganizersController();
$sponsorshipscontroller = new SponsorshipsController();
$attendeescontroller = new AttendeesController();

$url = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($url == '/home' || $url == '/') {
    $homeController->index();
  
} elseif ($url == '/events/index' || $url == '/') {
    $eventscontroller->index();
} elseif ($url == '/events/create' && $requestMethod == 'GET') {
    $eventscontroller->create();
} elseif ($url == '/events/store' && $requestMethod == 'POST') {
    $eventscontroller->store();
} elseif (preg_match('/\/events\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $eventscontroller->edit($userId);
} elseif (preg_match('/\/events\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $eventscontroller->update($userId, $_POST);
} elseif (preg_match('/\/events\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $eventscontroller->delete($userId);

}elseif ($url == '/organizers/index' || $url == '/') {
    $organizerscontroller->index();
} elseif ($url == '/organizers/create' && $requestMethod == 'GET') {
    $organizerscontroller->create();
} elseif ($url == '/organizers/store' && $requestMethod == 'POST') {
    $organizerscontroller->store();
} elseif (preg_match('/\/organizers\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $organizerscontroller->edit($userId);
} elseif (preg_match('/\/organizers\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $organizerscontroller->update($userId, $_POST);
} elseif (preg_match('/\/organizers\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $organizerscontroller->delete($userId);

}elseif ($url == '/sponsorships/index' || $url == '/') {
    $sponsorshipscontroller->index();
} elseif ($url == '/sponsorships/create' && $requestMethod == 'GET') {
    $sponsorshipscontroller->create();
} elseif ($url == '/sponsorships/store' && $requestMethod == 'POST') {
    $sponsorshipscontroller->store();
} elseif (preg_match('/\/sponsorships\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $sponsorshipscontroller->edit($userId);
} elseif (preg_match('/\/sponsorships\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $sponsorshipscontroller->update($userId, $_POST);
} elseif (preg_match('/\/sponsorships\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $sponsorshipscontroller->delete($userId);
  
} elseif ($url == '/attendees/index' || $url == '/') {
    $attendeescontroller->index();
} elseif ($url == '/attendees/create' && $requestMethod == 'GET') {
    $attendeescontroller->create();
} elseif ($url == '/attendees/store' && $requestMethod == 'POST') {
    $attendeescontroller->store();
} elseif (preg_match('/\/attendees\/edit\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $attendeescontroller->edit($userId);
} elseif (preg_match('/\/attendees\/update\/(\d+)/', $url, $matches) && $requestMethod == 'POST') {
    $userId = $matches[1];
    $attendeescontroller->update($userId, $_POST);
} elseif (preg_match('/\/attendees\/delete\/(\d+)/', $url, $matches) && $requestMethod == 'GET') {
    $userId = $matches[1];
    $attendeescontroller->delete($userId);

}
else {
    http_response_code(404);
    echo "404 Not Found";
}


