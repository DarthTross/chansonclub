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
      <div id="BASE">
        <table class="tableStyle" cellpadding="30%" cellspacing="30%">
            <tr>
                <td class="contactsForm">
									<h2>Наши контакты:</h2>
                  <p>Телефон: +7 (999) 096-90-74
                  <p>e-mail: metro1488@list.ru
									<p>ВК: vk.com/pawsociety
                  <p>Адрес: Москва, Кутузовский пр-т, 1
                </td>
                <td class="sendForm">
                  <h2>Написать нам:</h2>
                    <form action="check.php" method="post">
                      <p><input type="email" name="email" placeholder="Ваш e-mail" class="placeEnter"><br>
                      <textarea name="message" class="placeEnter" placeholder="Ваше сообщение"></textarea><br>
                      <button class="buttonSend" type="submit" name="send">Отправить</button>
                    </form>
                </td>
            </tr>
        </table>
				<div class="mapInsert"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.467297828476!2d37.56907481587438!3d55.75038418055263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bc9bd2b8b13%3A0x7ddc228bc1d84509!2z0JrRg9GC0YPQt9C-0LLRgdC60LjQuSDQv9GA0L7RgdC_LiwgMSwg0JzQvtGB0LrQstCwLCAxMjEwNTk!5e0!3m2!1sru!2sru!4v1561988882683!5m2!1sru!2sru" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
      </div>
      <?php require "blocks/footer.php" ?>
	</body>
</html>
