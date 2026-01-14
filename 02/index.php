<?php
//1. Set Up & Start 


//2. Code Commenting 

// Inline Commenting

/*
    Multi-line Commenting
*/


//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo

$firstName = "Charlie"; // String
$lastName = "Sirois-Morin"; // String
$age = 22; // Integer
$isStudent = true; // Boolean

echo  "<p> Hello there, my name is " . $firstName . " " . $lastName . "</p>";

if ($isStudent) 
{
    echo "<p> I am a student in this course </p>";    
}
else
{
    echo "<p>Oops I am in the wrong class</p>";
}

//4. Loosely Typed Language Demo
$num1 = 1;
$num2 = "10";
function add(int $num1, int $num2)
{
    return $num1 + $num2;
}
echo "<p>" . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP 
