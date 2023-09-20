<?php

/*Exercise 5
Write a function to verify a student's grade according to the grade.

Conditions:

If the grade is 60% or more, the reward should be First Division.
If the grade is between 45% and 59%, the reward should be Second Division.
If the grade is between 33% and 44%, the reward should be Third Division.
If the grade is less than 33%, the student will fail.*/

function grade($grade)
{
    if ($grade >= 60) {
        return "First Division";
    } elseif ($grade >= 45 && $grade <= 59) {
        return "Second Division";
    } elseif ($grade >= 33 && $grade <= 44) {
        return "Third Division";
    } else {
        return "Fail";
    }
}

$grade = 40;

echo grade($grade);

?>