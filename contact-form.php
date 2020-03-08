<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = "alvarale97@gmail.com";
  $headers = "From: ".$email;
  mail($to, $message, $headers);
  header("Location: application.php?mailsend");
  echo("Your messsage has been sent. We'll be in touch soon! :)");
}
?>
