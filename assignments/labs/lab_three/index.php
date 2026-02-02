<?php 
require "includes/header.php"; 
require "includes/footer.php"; 
// require_once "connect.php";
?>
<main>
    <h1>Contact Form</h1>

    <form action="process.php" method="post">
        <label for="first_name"> First Name: </label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name"> Last Name: </label>
        <input type="text" id="last_name" name="last_name" required>
        <br>

        <label for="email"> Email Address: </label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="message"> Message: </label>
        <textarea id="message" name="message" required></textarea>
        <br>

        <input type="submit" value="Submit">



</main>
