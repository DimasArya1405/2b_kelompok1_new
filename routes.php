<?php
// routes.php
require_once 'app/controllers/EventsController.php';
require_once 'app/controllers/HomeController.php';

$eventscontroller = new EventsController();
$homeController = new HomeController();

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
  
} else {
    http_response_code(404);
    echo "404 Not Found";
}


