<?php

if (isset($_POST['submit'])) {
  $to = "mauricegift045@gmail.com"; // Your email address
  $subject = "Contact Form Submission";
  $message = "Name: " . $_POST['name'] . "\n";
  $message .= "Email: " . $_POST['email'] . "\n";
  $message .= "Message: " . $_POST['message'] . "\n";

  // Send the email
  mail($to, $subject, $message);
}

?>