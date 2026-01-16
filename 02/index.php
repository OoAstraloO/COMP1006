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
/* Add declare(strict_types=1) and type hints 
// Strict types tell PHP not to automatically convert values when calling functions. Type hints tell PHP what to expect */

/*function add(int $num1, int $num2): int {
    return $num1 + $num2;
}
echo add($num1, $num2);
*/

//5. Strict Types & Types Hints


//6. OOP with PHP 
class Person {
    public string $name;
    public int $age;
    public bool $isInstructor;

    public function __construct(string $name, int $age, bool $isInstructor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->isInstructor = $isInstructor;
    }

    public function getBadge(): string
    {
        $role = $this->isInstructor ? "Instructor" : "Student";
        return "Name :  {$this->name} | Age: {$this->age} | Role : $role";
    }
}

//create an instance of object 

$person = new Person("Jessica", 40, true);

//use the object 

echo $person->getBadge();