<?php

/*- Exercise 1
Define a variable of each type: integer, double, string and boolean. Print them by screen.

Then create a constant that includes your name and display it in title-by-screen format.*/

$integer = 50;
$double = 10.5;
$string = "John Smith is a false person";
$boolean = true;

echo $integer. "<br/>";

echo $double. "<br/>";

echo $string. "<br/>";

echo ($boolean ? "true" : "false"). "<br/>";

define("myName", "Ricardo");

echo "<h1>" . myName . "</h1>" . "<br/>";

?>