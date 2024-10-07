<?php 

use Core\Controller;

require "../bootstrap.php";

dd(\app\Classes\Uri::uri());

$controller = new Controller;
$controller = $controller->getController();

dd($controller);