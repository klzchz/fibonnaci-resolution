<?php

namespace Service\controllers;

use Service\interfaces\ServiceInterface;

class ServiceController {
    public $fibonnaciRight;
    public function __construct(ServiceInterface $serviceInterface,...$params = null)
    {       
            $this->fibonnaciRight = $serviceInterface;
            $this->runServices($this->fibonnaciRight->validation());
    }


    protected function runServices($params) {
     
        echo $this->fibonnaciRight->service($params);

    }


}