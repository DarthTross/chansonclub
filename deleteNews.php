<?php
  require_once 'connection.php';

  $link=mysqli_connect($host, $user, $password, $database);

  $newID = $_POST['message'];

  $error = '';
  if (trim($newID) == '')
    $error = 'Введите №';

  if ($error != ''){
    echo $error;
    exit;
  }

  mysqli_query($link,"DELETE FROM news WHERE new_id='".$newID."'");
  header("Location: moderateNews.php"); exit();
?>
