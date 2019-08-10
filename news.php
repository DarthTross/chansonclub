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
		<?php require "blocks/header.php" ?>
                <div id="BASE">
                    <div class="aboutBody">
                        <?php
                        require_once 'connection.php';

                        $link=mysqli_connect($host, $user, $password, $database);
                        ?>
                        <table cellspacing="10px" cellpadding="10%">
                          <tr>
                            <td>Дата</td>
                            <td>Событие</td>
                          </tr>
                          <?php
                          $newsExact = mysqli_query($link, "SELECT new_date, new_text FROM news");
                          while ($result = mysqli_fetch_array($newsExact)) {
                            echo "<tr><td>{$result['new_date']}</td><td>{$result['new_text']}</td></tr>";
                          }
                          ?>
                        </table>
                        <?php
                          if ($_COOKIE['user'] == 'Да' && $_COOKIE['status'] == 'admin'):
                        ?>
                          <h2 class="newsChange"><a href="moderateNews.php">Редактировать новости</a></h2>
                        <?php elseif ($_COOKIE['user'] !== 'Да' or $userdata !== 'admin'): ?>
                          <h2 class="newsChange">Есть новость? <a href="contacts.php">Напишите нам об этом!</a></h2>
                        <?php endif; ?>

                    </div>
                </div>
			</main>
      <?php require "blocks/footer.php" ?>
		</div>
	</body>
</html>
