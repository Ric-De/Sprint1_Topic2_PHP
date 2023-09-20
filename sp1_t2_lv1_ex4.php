<?php

/*Exercise 4
Write a program that implements a function that counts up to a certain number. If a specific number is not included, the number must default to 10. In addition, this function must have a second parameter indicating how much to count from (From 1 to 1, from 2 in 2...). The count must be displayed step by step.*/

echo "<h1>Counter</h1><br>";
// Example usage:
$countTo = 10;
$step = 1;

function countUpTo($countTo, $step) {
    
    for ($i = 1; $i <= $countTo; $i += $step) {
        echo $i . "<br>";
    }
}

countUpTo($countTo, $step);

?>