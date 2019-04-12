<?php

  if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);

  if(!empty($name) && !empty($email) && !empty($message)) {
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $from = "$email";
          $to = "giedre.mila@gmail.com";
          $subject = "New message";
          $author = 'From: ' . $name . ', ' . $email;
          $zinute = htmlspecialchars($message);
          mail($to, $subject, $author, $zinute, $from);
          echo "<script>alert('Thank you, we got your message.');</script>";
      }
  }
  include('db.php');

  }

