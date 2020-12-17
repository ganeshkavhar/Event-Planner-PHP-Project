<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';


$connection = Connection::getInstance();
$gateway1 = new LocationTableGateway($connection);
$gateway2 = new EventTableGateway($connection);

$statement1 = $gateway1->getLocations();
$statement2 = $gateway2->getEvents();

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'utils/header.php'; ?>
        <?php require 'utils/toolbar.php'; ?>

        <?php 
        if (isset($message)) {
            echo '<p>'.$message.'</p>';
        }
        ?>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
