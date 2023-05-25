<?php

namespace Service\services;

use Service\interfaces\ServiceInterface;

 class FibonnaciRight implements ServiceInterface {

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