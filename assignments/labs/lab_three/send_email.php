<?php 
// Majority of this code is based on the process.php file provided in week 4 materials, though it has been modified to fit the context of this lab.
// ---------------------------------------------------------
// Email configuration
// ---------------------------------------------------------
$to = "bitumi@gmail.com";
$subject = "Contact Information Form";

// ---------------------------------------------------------
//  Build the email message
// ---------------------------------------------------------
// Email content is just a STRING.
$message  = "NEW MESSAGE\n";
$message .= "=========================\n";
$message .= "Customer: {$firstName} {$lastName}\n";
$message .= "Email: {$email}\n";

$message .= "\nMessage:\n";
$message .= ($comments === "") ? "(none)\n" : "{$comments}\n";

// ---------------------------------------------------------
//  Send the email
// ---------------------------------------------------------
// NOTE:
// mail() may not work on local machines without configuration.
// That’s okay — the confirmation page will still display.
$headers = "From: no-reply@bakeittillyoumakeit.example\r\n";
mail($to, $subject, $message, $headers);
?>