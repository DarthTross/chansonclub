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
    <div id="WRAPPER">
      <main>
        <section id="intro"></section>
        <div class="bar">
          <table id="quickmenu">
            <tr>
              <td id="table"><a href="news.php">Вернутся к стандартному режиму</a></td>
            </tr>
          </table>
        </div>
                <div id="BASE">
                    <div class="aboutBody">
                        <?php
                        require_once 'connection.php';

                        $link=mysqli_connect($host, $user, $password, $database);
                        ?>
                        <table cellspacing="10px" cellpadding="10%">
                          <tr>
                            <td>№</td>
                            <td>Дата</td>
                            <td>Событие</td>
                          </tr>
                          <?php
                          $newsExact = mysqli_query($link, "SELECT new_id, new_date, new_text FROM news");
                          while ($result = mysqli_fetch_array($newsExact)) {
                            echo "<tr><td>{$result['new_id']}</td><td>{$result['new_date']}</td><td>{$result['new_text']}</td></tr>";
                          }
                          ?>
                        </table>
                        <div class="newsModerateText">
                          <h2>Добавить новость</h2>
                          <form action="updateNews.php" method="post">
                            <textarea name="message" class="newsMessage" placeholder="Опишите новость"></textarea><br>
                            <button class="buttonSendNews" type="submit" name="send">Опубликовать новость</button>
                          </form>
                        </div>
                        <div>
                          <h2>Удалить новость</h2>
                          <form action="deleteNews.php" method="post">
                            <table width=100%>
                              <tr>
                                <td><textarea name="message" class="newsID" placeholder="Введите №"></textarea></td>
                                <td><button class="buttonSendNewsID" type="submit" name="send">Удалить новость</button></td>
                              </tr>
                            </table>
                          </form>
                        </div>
                    </div>
                </div>
			</main>
      <?php require "blocks/footer.php" ?>
		</div>
	</body>
</html>
