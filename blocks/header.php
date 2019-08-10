<div id="WRAPPER">
  <main>
    <section id="intro">
      <div class="authStyle">
        <?php if($_COOKIE['user'] == 'Да'): ?>
          <a class="borderLink" href="logout.php">Выйти</a>
        <?php elseif($_COOKIE['user'] !== 'Да'): ?>
          <a class="borderLink" href="auth.php">Войти</a>
        <?php endif; ?>
      </div>
    </section>
    <div class="bar">
      <table id="quickmenu">
        <tr>
          <td id="table"><a href="index.php">Галлерея</a></td>
          <td id="table"><a href="about.php">О шансоне</a></td>
          <td id="table"><a href="news.php">Новости</a></td>
          <td id="table"><a href="sounds.php">Композиции</a></td>
          <td id="table"><a href="contacts.php">Контакты</a></td>
        </tr>
      </table>
    </div>
