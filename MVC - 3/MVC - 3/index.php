<?php

require "vendor/autoload.php";

use Routes\Routes;
use Model\Connect\Users;
use Model\Connect\Chat;
use Model\Connect\Message;

$routes = new Routes();

$users = new Users;
$chats = new Chat;
$messages = new Message;


print_r(
    $users->onerow(1)
);

// $routes->route("admin","index.html")