<?php

class Routeur {
    private $request;
    private $route = [
        'home' => ['controller' => 'HomePage' , 'method' => 'showHome']
    ];

    public function __construct($request){
        $this->request = $request;
    }

    public function renderController(){
        $request =$this->request;
        if(key_exists($request, $this->route)){
            $controller = $this->route[$request]['controller'];
            $method = $this->route[$request]['method'];

            $currentController = new $controller();
            $currentController->$method();
        }else{
            require_once(VIEW.'error.php');
        }
    }
}