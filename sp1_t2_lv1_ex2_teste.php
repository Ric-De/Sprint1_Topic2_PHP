<?php

/*Exercise 2
Print to the screen "Hello, World!" using a variable. At the end:
Converts all characters in the string to uppercase and prints to the screen.
Prints the size (length) of the variable to the screen.
Print the string in reverse character order.
Create a new variable with the content "This is the PHP course" and print on the screen the concatenation of both strings.*/

$string = "Hello, World!";
$stringUp = strtoupper($string);
$string2 = "This is the PHP course";

echo $string . "<br>";

echo $stringUp. "<br>";

echo strlen($string). "<br>";

echo strrev($string). "<br>";

echo $string. " ". $string2. "<br>";

?>