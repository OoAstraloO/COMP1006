<?php
// Defining the class
class Car
{
public string $make;
public string $model;
public int $year;

// Constructor that runs when new Car object is created
public function __construct(string $make, string $model, int $year)
{
    $this->make = $make;
    $this->model = $model;
    $this->year = $year;
}

// Method which returns formated string describing the car
public function getBadge(): string
{
    return "Make :  {$this->make} | Model: {$this->model} | Year : $this->year";
}
}

// Creating an instance of car object 
$car = new Car("Toyota", "Integra", 2001);

// Use the object 
echo $car->getBadge();