<?php

// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Pagination.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/events.php');
require('controllers/rooms.php');
require('controllers/feedbacks.php');
require('controllers/about_Us.php');
require('controllers/reservations.php');


require('models/home.php');
require('models/user.php');
require('models/event.php');
require('models/room.php');
require('models/feedback.php');
require('models/about_us.php');
require('models/reservation.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}

