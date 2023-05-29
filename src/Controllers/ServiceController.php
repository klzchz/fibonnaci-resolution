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

        $arr = [
            'n'=>$this->fibonnaciRight->service($params),
            'client'=>"you're in a beta test",
            'ip'=>$_SERVER['REMOTE_ADDR'],
            'status_code'=>201
        ];
     
        echo json_encode($arr);

    }


}