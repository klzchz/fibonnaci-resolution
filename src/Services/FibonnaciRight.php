<?php

namespace Kernel\Services;

use Kernel\Interfaces\ServiceInterface;

 class FibonnaciRight implements ServiceInterface {

    public function validation()
    {
        return !(isset($_GET['number'])) ? $n = 100  : $n = $_GET['number'];
    }

    public function service($param) {
        $prev = 0;
        $atual = 1;
        
        for ($i = 1; $i <= $param; $i++) {
       
            $n = $prev + $atual;
            $atual = $prev;
            $prev = $n;
           
        }
        
        return $atual;

    }

}