<?php
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if (trim($email) == '')
    $error = 'Введите e-mail';
  else if (trim($message) == '')
    $error = 'Введите сообщение';
  else if (strlen($message) < 10)
    $error = 'Введите более 10 символов';

  if ($error != ''){
    echo $error;
    exit;
  }

  $subject = "=?utf-8?B?".base64_encode("Сообщение от пользователя")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('metro1488@list.ru', $subject, $message, $headers);

  header('Location: /contacts.php');

?>
