<?php

namespace Routes;

use Controller\Controller;

class Routes
{
    
    public $method;
    
    public $loction;
    
    public $object;
    
    // construct function
    
    // public function __construct(){
    //     echo "hello";   
    // }   

    public function route($method,$location)
    {
        $controller = new Controller;
        
        if (isset($controller->get["q"])) {
            if ($method == $controller->get["q"]) {
                
                include "view/layout/head.html";
                include "view/$location";
        
            }
            else {
                
                // $this->object=true;
                include "view/index.html";
                
            }
        }    
    }
    
    // destruct  function
    
    // public function __destruct()
    // {
    //     if ($this->object) {
    //         include "../view/index.html";
    //     }        
    // }
}