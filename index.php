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
require('controllers/roomLists.php');
require('controllers/userLists.php');
require('controllers/eventLists.php');
require('controllers/reservations.php');
require('controllers/payment.php');
require('controllers/confirmation.php');
require('controllers/complete.php');


require('models/home.php');
require('models/user.php');
require('models/event.php');
require('models/room.php');
require('models/feedback.php');
require('models/about_us.php');
require('models/roomList.php');
require('models/userList.php');
require('models/eventList.php');
require('models/reservation.php');
require('models/payment.php');
require('models/confirmation.php');
require('models/complete.php');



$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}

