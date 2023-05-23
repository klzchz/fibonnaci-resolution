<?php

// 1)
// the time complexity of the recursive Fibonacci function is exponential,
//  specifically O(2^n), where n is the input count. This means that as the input count grows, 
//  the time required to calculate the Fibonacci number increases exponentially.

// To improve performance, it is necessary to optimize the Fibonacci calculation algorithm, 
// avoiding redundant calculations and reducing the overall number of recursive calls.

// from fibonacci number 94 it starts to give more and more complex results like

// fibonnaci = 94 or higher
// 1.2200160415122E+19

// the problem of the function is what I explained above imagine recursively calcs each time the right is to simplify the 
// function to manage memory in low scale

// function fibonacci($count){
// if($count == 0 || $count == 1){
// return 1;
// } else {
// return fibonacci($count - 1) + fibonacci($count - 2);
// }
// }

function fibonacci($count) {    
    
    $prev = 0;
    $atual = 1;
    
    for ($i = 1; $i <= $count; $i++) {
   
        $n = $prev + $atual;
        $atual = $prev;
        $prev = $n;
       
    }
    
    return $atual;
}

if(!isset($_GET['number'])) 
    $n = 100;
else
$n  = $_GET['number'];




echo fibonacci($n);

?>