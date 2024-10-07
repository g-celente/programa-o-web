<?php 

require "../bootstrap.php";

use core\controller;


//dd(\app\Classes\Uri::uri());
try {
    $controller = new controller;
    $controller = $controller->getController();

    dd($controller);
} catch (Exception $e) {
    dd($e->getMessage());
}
