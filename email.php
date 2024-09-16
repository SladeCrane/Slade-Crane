<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message = htmlspecialchars($_POST['message']);

      $to = "sladeecrane@gmail.com"; // Replace this with your email
      $subject = "New Contact Form Message";
      $body = "Name: $name\nEmail: $email\nMessage: $message";

      $headers = "From: $email";

      if (mail($to, $subject, $body, $headers)) {
          echo "Message sent successfully!";
      } else {
          echo "Sorry, something went wrong.";
      }
  }