<h2>UP the Containers</h2>

<pre>docker-compose up -d</pre>

<h2>Acces the app container in bash</h2>
<pre>docker-compose exec app bash </pre>

<h2>Get the dependencies</h2>
<pre>composer install </pre>

<h2>Usage Fibonnaci Resolution</h2>

<pre>http://localhost:8989/?number=10</pre>


## Tutorial 
<pre>
    https://www.loom.com/share/05afd1b359e744028190ad8216241387
</pre>


## Explanation

<pre>
 1)
 the time complexity of the recursive Fibonacci function is exponential,
  specifically O(2^n), where n is the input count. This means that as the input count grows, 
  the time required to calculate the Fibonacci number increases exponentially.

 To improve performance, it is necessary to optimize the Fibonacci calculation algorithm, 
 avoiding redundant calculations and reducing the overall number of recursive calls.

 from fibonacci number 94 it starts to give more and more complex results like

 fibonnaci = 94 or higher
 1.2200160415122E+19

 the problem of the function is what I explained above imagine recursively
  calcs each time the right is to simplify the 
 function to manage memory in low scale</pre>
