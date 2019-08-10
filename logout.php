<?php
  setcookie('user', 'Да', time() - 3600, '/');
  setcookie("id", $data['user_id'], time() - 3600, '/');
  setcookie("hash", $hash, time() - 3600, '/');
  setcookie("status", $status, time() - 3600, '/');

  header("Location: index.php");
 ?>
