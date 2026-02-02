<?php 
// require_once "connect.php";
require "includes/header.php"; 
?>
<main>
    <h1>Contact Form</h1>

    <!-- Creation of form -->
    <form action="process.php" method="post">
        <!-- First Name Field -->
        <label for="first_name"> First Name: </label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <!-- Last Name Field -->
        <label for="last_name"> Last Name: </label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <!-- Email Field -->
        <label for="email"> Email Address: </label>
        <input type="email" id="email" name="email" required>
        <br>
        <!-- Message Field -->
        <label for="comments"> Message: </label>
        <textarea id="comments" name="comments" required></textarea>
        <br>
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

</main>
<!-- Footer inclusion -->
<?php require "includes/footer.php"; ?>