<?php

/*Exercise 1
Eratosthenes' sieve(peneira) is an algorithm designed to find prime numbers within a given interval. Based on the information in the attached link, implement the sieve of Eratosthenes inside a function, so that we can call the function for a specific number.*/

//================================================================

// 1 - Ask for a number;
// 2 - Generate an array from the number 2 to the given number;
// 3 - Create a function to check if the number is prime or not; or, according to the sieve of Eratosthenes eliminate the multiple of 2, 3, 5, 7 and 11, ... from the array. Need one loop for each one of this numbers. Eliminate values inside an array is a crazy thing to do because after each deletion the index of the array will change. 
// 4 - Call the function for each number in the array;
// 5 - Create another array to store the primes numbers;
// 6 - Print only the array with the primes numbers;

// Adopted plan for the algorithm after trials with the reproduction of the sieve of Eratosthenes.
// 1 - Ask for a number;
// 2 - Generate an array from the number 2 to the given number;
// 3 - Create an empty array to store the primes numbers;
/* 4 - a) Create a function to check if the number is prime or not;
       b) put all the primes inside empty primeArray;
       c) finally, print the primeArray on the screen.*/

$number = 20;
$array = range(2, $number);
$primeArray = [];

function isPrime($array){

foreach ($array as $i) {
    $is_prime = true;

    if ($i != 2 && $i % 2 == 0) {
        $is_prime = false;
    } else {
      $divisor_found = false; // Flag variable to control the loop
        for ($j = 3; $j <= $i && !$divisor_found; $j += 2) {
            if ($i % $j == 0 && $j !== $i) {
                $is_prime = false;
                $divisor_found = true; // Set the flag to exit the loop
            }
        }
    }

    if ($is_prime) {
       $primeArray [] = $i;
    } 
}
echo implode('<br>', $primeArray); // Convert array to a comma-separated string and print( ' , ' changed to ' <br> ' step line creates a column effect)

}

isPrime($array);

?>