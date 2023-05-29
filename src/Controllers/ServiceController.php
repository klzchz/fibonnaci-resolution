<?php

namespace Kernel\Controllers;


use Kernel\Interfaces;

class ServiceController {
    public $fibonnaciRight;
    public function __construct($serviceInterface)
    {       
            $this->fibonnaciRight = $serviceInterface;
            $this->runServices($this->fibonnaciRight->validation());
    }


    protected function runServices($params){
     
        echo $this->fibonnaciRight->service($params);

    }


}