<?php
require __DIR__."/vendor/autoload.php";



/* here  the idea is if the solution  is  use  any solution we can , using first principle of solid */
$service = new Kernel\Controllers\ServiceController(new Kernel\Services\FibonnaciRight);





