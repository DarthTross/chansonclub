<?php
  require_once 'connection.php';

  $link=mysqli_connect($host, $user, $password, $database);

  $newText = $_POST['message'];

  $error = '';
  if (trim($newText) == '')
    $error = 'Введите сообщение';

  if ($error != ''){
    echo $error;
    exit;
  }

  mysqli_query($link,"INSERT INTO news SET new_text='".$newText."'");
  header("Location: moderateNews.php"); exit();
?>
