<?php

  ini_set('SMTP','mail.shahindustry.com');
  ini_set('smtp_port',25);
  ini_set('sendmail_from', NULL);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $send = "Name : ".$name."\nEmail : ".$email."\nMessage : ".$message;

  $send = wordwrap($send, 70);

  $mailto = "form@shahindustry.com";

  $headers = "MIME-VERSION: 1.0" . "\r\n";
  $headers .= "Content-type:text;charset=UTF-8" . "\r\n";
  $headers .= "From : <$email> \r\n";

  if(mail($mailto, $subject, $send, $headers))
  {
    echo "OK";
  }
  else {
    echo mail($mailto, $subject, $send, $headers);
  }
