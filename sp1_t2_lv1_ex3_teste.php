<?php

/*Exercise 3
a) Declare two variables X and Y of type int, two variables N and M of type double and assign each one a value. Here is a screen-by-screen display for X and Y:

The value of each variable.
the sum
The remaining.
the product
The module.
For N and M you will do the same.

For all variables (X, Y, N, M):

The double of each variable.
The sum of all variables.
The product of all variables.
b) Create a Calculator function that enters two numbers per parameter, and in a third parameter allows you to add, subtract, multiply or divide the two numbers.*/

$x = 20;
$y = 10;
$n = 32.5;
$m = 2.5;
$operation;

// X and Y

echo "The value of each variable. <br>". $x. "<br>". $y. "<br>";

$sum = $x + $y;

echo "The sum: <br>". $sum. "<br>";

$remaining = $x - $y;

echo "The remaining: <br>". $remaining. "<br>";

$product = $x * $y;

echo "The product: <br>". $product. "<br>";

$module = $x % $y;

echo "The module: <br>". $module. "<br>";

// N and M

echo "The value of each variable. <br>". $n. "<br>". $m. "<br>";

$sum = $n + $m;

echo "The sum: <br>". $sum. "<br>";

$remaining = $n - $m;

echo "The remaining: <br>". $remaining. "<br>";

$product = $n * $m;

echo "The product: <br>". $product. "<br>";

$module = $n % $m;

echo "The module: <br>". $module. "<br>";

// For all variables (X, Y, N, M):

echo "The double of each variable. <br>". $x * 2 . "<br>";
echo "The double of each variable. <br>". $y * 2 . "<br>";
echo "The double of each variable. <br>". $n * 2 . "<br>";
echo "The double of each variable. <br>". $m * 2 . "<br>";

$sumAll = ($x + $y + $n + $m);

echo "The sum of all variables: <br>". $sumAll. "<br>";

$productAll = $x * $y * $n * $m;

echo "The product of all variables: <br>". $productAll. "<br>";

//Function Calculator

echo "Function Calculator <br>";

$num1 = 10;
$num2 = 5;
$operation = 'add';


function Calculator($num1, $num2, $operation){
    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
           if($num1 != 0){
            $result = $num1 / $num2;
            }else{
                $result = "Cannot divide by zero";
            }
            break;
               
        default:
        $result = "Invalid operation";
    }
    return $result;
}

echo Calculator($num1, $num2, $operation). "<br>";


?>