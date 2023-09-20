<?php

/*Exercise 1
Write a function that determines the total amount to pay for a phone call based on the following premises:

Any call that lasts less than 3 minutes costs 10 cents.
Each additional minute after the first 3 is a meter step and costs 5 cents.*/


function call_cost()
{
    $cost = 10;
    $minutes = mt_rand(0, 15);

    if ($minutes <= 3) {
        return "# The cost of this call is ". $cost. " cents";
    } else {
        $cost = 10 + ($minutes - 3) * 5;
        echo $minutes. "<br>"; //Verify that the minutes are being added to the cost
        return "The cost of this call is ". $cost. " cents";
    }

}

echo call_cost();

?>