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

    function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
    }

    $link=mysqli_connect($host, $user, $password, $database);

    if(isset($_POST['submit']))
    {
    $query = mysqli_query($link,"SELECT user_id, user_password, user_status FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        $hash = md5(generateCode(10));



        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");

        setcookie('user', 'Да', time() + 3600, '/');
        setcookie("id", $data['user_id'], time() + 3600, '/');
        setcookie("hash", $hash, time() + 3600, '/');
				setcookie("status", $data['user_status'], time() + 3600, '/');

        header("Location: checkAuth.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
    }
    ?>
    <div id="BASE">
        <table class="tableStyle" cellpadding="30%" cellspacing="30%">
            <tr>
                <td class="contactsForm">
                  <h1>Вход</h1>
                  <form action="" method="post" name="loginform">
                    <p><label for="user_login">Логин<br>
                    <input class="placeEnter" name="login" size="30" type="text" required></label></p>
                    <p><label for="user_pass">Пароль<br>
                    <input class="placeEnter" name="password" size="30" type="password" required></label></p>
          	        <input class="buttonSend" name="submit" type= "submit" value="Авторизоваться"></p>
                  </form>
                </td>
                <td class="sendForm">
                  <h2>Ещё не зарегистрированы?</h2>
                  <h1><a href="register.php">Зарегистрироваться!</a></h1>
                </td>
            </tr>
        </table>
    </div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
