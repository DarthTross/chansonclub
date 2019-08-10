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

    if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
    {
    $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']))
    {
        setcookie("user", "", time() - 3600, '/');
        setcookie("id", "", time() - 3600, "/");
        setcookie("hash", "", time() - 3600, "/");
				setcookie("status", "", time() - 3600, '/');
        print "Что-то пошло не так :(";
    }
    else
    {
        print "Добро пожаловать, ".$userdata['user_login'].". Рады видеть вас снова!";
    }
    }
    else
    {
    print "Включите cookies";
    }
    ?>
    <?php require "blocks/footer.php" ?>
</body>
</html>
