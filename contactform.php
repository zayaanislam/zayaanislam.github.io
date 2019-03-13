<?php

if (isset($_POST['submit'])) {
  $FROM = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo ='zayaan@umd.edu';
  $headers = 'From: '.$email
  $txt ='You have an email from'.$FROM.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend")
}
