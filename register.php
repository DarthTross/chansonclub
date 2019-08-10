<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Клуб любителей шансона</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<style>
			@font-face {
			font-family: 'Azoft Sans';
			src: url('fonts/Azoft Sans.ttf'); }
			@font-face{
			font-family: 'NRP';
			src: url('fonts/NRP.ttf');
			}
		</style>
	</head>
	<body id="AVG">
		<?php require 'blocks/header.php' ?>
    <?php
    require_once 'connection.php';

    $link=mysqli_connect($host, $user, $password, $database);

    if(isset($_POST['submit']))
    {
    $err = [];

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Логин уже занят";
    }

    if(count($err) == 0)
    {

        $login = $_POST['login'];
        $password = md5(md5(trim($_POST['password'])));

        mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."', user_status='".user."'");
        header("Location: auth.php"); exit();
    }
    else
    {
        print "<b>Не получилось :(</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
      }
    }
    ?>
    <div id="BASE">
      <table class="tableStyle" cellpadding="30%" cellspacing="30%">
          <tr>
              <td class="contactsForm">
                <h1>Регистрация</h1>
                <form action="register.php" method="post">
                  <p><label for="user_pass">Логин<br>
                  <input class="placeEnter" name="login"size="30" type="text" required></label></p>
                  <p><label for="user_pass">Пароль<br>
                  <input class="placeEnter" name="password"size="32"   type="password" required></label></p>
                  <p><input class="buttonSend" name= "submit" type="submit" value="Зарегистрироваться"></p>
                </form>
              </td>
              <td class="sendForm">
                <h2>Уже зарегистрированы?</h2>
                <h1><a href= "auth.php">Авторизоваться!</a></h1>
              </td>
          </tr>
      </table>

      </div>
    </div>
  <?php require "blocks/footer.php" ?>
</body>
</html>
