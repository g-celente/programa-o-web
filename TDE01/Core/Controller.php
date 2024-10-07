<?php 


namespace core;

use app\Classes\Uri;
use app\exceptions\ControllerNotExistsException;

class controller {
    private $uri;
    private $namespace;
    private $controller;
    private $folders = [
        'app\Controllers\admin',
        'app\Controllers\user'
    ];

    public function __construct()
    {
        $this->uri = Uri::uri();
    }

    public function getController() {
        if($this->isHome()) {
            return $this->controllerHome();
        }

        return $this->controllerNotHome();
    }

    private function isHome() {
        return ($this->uri == "/");
    }

    private function controllerHome(){
        if (!$this->controllerExists('HomeController')) {
            throw new ControllerNotExistsException('Esse Controller Não Existe');
        }

        return $this->instantiateController();
    
    }

    private function controllerNotHome(){
        //
    }

    private function controllerExists($controller) {

        $controllerExist = false;

        foreach ($this->folders as $folder) {
            if (class_exists($folder.'\\'.$controller)){
                $controllerExist = true;
                $this->namespace = $folder;
                $this->controller = $controller;
            }
            
        }

        return $controllerExist;
    }

    private function instantiateController () {
        $controller = $this->namespace.'\\'.$this->controller;

        return new $controller;
    }
}
