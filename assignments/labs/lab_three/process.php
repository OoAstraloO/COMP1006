<?php
// require_once "connect.php";
require "includes/header.php";
// Majority of this code is based on the process.php file provided in week 4 materials, though it has been modified to fit the context of this lab.
/**
 * process.php
 * -----------
 * PURPOSE:
 * - Receive form data from an HTML form
 * - Sanitize and validate user input
 * - Build and send an email to the client
 * - Display a confirmation message
 *
 * This version includes:
 * - filter_input() for sanitizing
 * - filter_var() for validation
 */

// ---------------------------------------------------------
// 1) Ensure the form was submitted using POST
// ---------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<p>This page expects a POST form submission.</p>";
    exit;
}

// ---------------------------------------------------------
// 2) Sanitize data using filter_input()
// ---------------------------------------------------------
// Instructor note:
// - filter_input() reads from INPUT_POST instead of $_POST
// - FILTER_SANITIZE_SPECIAL_CHARS prevents HTML injection
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName  = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);
$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$comments  = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_SPECIAL_CHARS);

// ---------------------------------------------------------
// 3) Access array-based item data
// ---------------------------------------------------------
// - filter_input() does not work well with nested arrays
// - Array inputs must be accessed directly
$items = $_POST['items'] ?? [];

// ---------------------------------------------------------
// 4) Validate required fields
// ---------------------------------------------------------
$errors = [];

// Required text fields
if ($firstName === null || $firstName === '') {
    $errors[] = "First name is required.";
}

if ($lastName === null || $lastName === '') {
    $errors[] = "Last name is required.";
}

// Email validation
if ($email === null || $email === '') {
    $errors[] = "Email address is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email address must be a valid email.";
}

// ---------------------------------------------------------
// 6) If errors exist, display them and stop
// ---------------------------------------------------------

?>


  <main>
  <?php if (!empty($errors)) {
    ?>
        <h1>There was a problem with your order</h1>

        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
          <?php endforeach; ?>
        </ul>

        <p>
          <a href="index.php">Return to the form</a>
        </p>
      </main>
    </body>
    </html>
    <?php
    exit;
}
?>
    <h1>Thank You for reaching out! We shall get back to you as soon as we can.</h1>

    <p>
      Thanks <strong><?= $firstName ?></strong>!
      Your order has been received and sent to the bakery.
    </p>

    <h2>Your Contact Details</h2>

    <p><strong>Name:</strong> <?= $firstName ?> <?= $lastName ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>

    <h3>Message</h3>
    <p><?= $comments === "" ? "(none)" : $comments ?></p>

    <p>
      A confirmation has been sent to the bakery.
    </p>

      <a href="index.php">Send another message</a>
      </main>

<?php 
require "includes/footer.php";
// Triggers email sending
require_once "send_email.php";
?> 