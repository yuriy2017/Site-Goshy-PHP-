<?php
  // print_r($_POST);
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
    $error = 'Input your email';
  else if(trim($message) == '')
     $error = 'Message can not be empty';
  else if(strlen($message) < 10)
    $error = 'Input not less 10 symbols';

   if($error != '') {
     echo $error;
     exit;
   }

  $subject = "=?utf-8?B?".base64_encode("Test message")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type:
   text/html;charset=utf-8\r\n";

   mail('stupak.yuriy@mail.ru', $subject, $message, $headers);



// $headers = 'From: stupak.yuriy@mail.ru' . "\r\n" .
//     'Reply-To: stupak.yuriy@mail.ru' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail($email, $subject, $message, $headers);

   header('Location: /about.php');
 ?>
