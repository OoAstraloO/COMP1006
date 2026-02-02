<?php 
// Code is the same as that provided in the week_two class example, with only having the database name being changed to point to the right location
declare(strict_types=1); 

// Host name
$host = "localhost";
// Database name
$db = "lab_three";
// Username 
$user = "root"; 
// Password
$password = "";

// Points to the database
$dsn = "mysql:host=$host;dbname=$db";

//try to connect, if connected echo a yay!
try {
   $pdo = new PDO ($dsn, $user, $password); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "<p> YAY CONNECTED! </p>"; 
}
//what happens if there is an error connecting 
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); 
}