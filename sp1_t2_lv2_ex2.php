<?php

/*- Exercise 2
Imagine that we are in a store that sells:

Chocolate: 1 euro
Chewing gum: 0.50 euros
Candies: 1.50 euros
Implement a program that allows calculations to be added to a purchase total of this type. For example, what if we buy:
2 chocolates, 1 chewing gum and 1 candy, let's have a program that allows us to add the subtotals to a total, so that:
function(2 chocolates) + function(1 chewing gum) + function(1 caramel) = 2 + 0.5 + 1.5
Therefore, the total is 4.*/

//Number of items 

$chocolate = 1;
$chewing_gum = 30;
$candies = 5;
$total = 0;

function total($chocolate, $chewing_gum, $candies) {
    $total = ($chocolate * 1) + ($chewing_gum * 0.5) + ($candies * 1.5);
    return "The total cost of phurchase was ". $total. " euros.";

}

echo total($chocolate, $chewing_gum, $candies);

?>