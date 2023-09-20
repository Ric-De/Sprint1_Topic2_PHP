<?php

/*- Exercise 6
Charlie bit my finger! Charlie will bite your finger exactly 50% of the time.

Write the isBitten() function that returns TRUE with 50% probability and FALSE otherwise.
  important

Tip: You might find the rand() function useful.*/

function isBitten()
{
    $randomNum = mt_rand(0, 1);
    echo $randomNum. "<br>"; // Print the random number for debugging
    return $randomNum; // Return the random number
}

echo isBitten()? 'Charlie bit my finger!' : 'Charlie bit your finger!';

?>