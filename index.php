<!DOCTYPE html>

<style>
.footer {
  position: absolute;
}
</style>

<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Знищення лісів</title>
</head>
<body>
    <header>
        <figure class="brand">Знищення лісів</figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="index.php"><li>Головна</li></a>
                <a href="gallery.php"><li>Галерея</li></a>
                <a href="quiz.php"><li>Тест</li></a>
                <a href="about.php"><li>Про сайт</li></a>
                <a href="reviews.html"><li>Відгуки</li></a>
            </ul>
        </nav>
    </header>
    <section>
		<div class="main">
      <h2>Бережіть ліси!</h2>
      <p>У 2018 році щорічна втрата лісів склала майже 21 Мга. Основними
      причинами втрати вважаються:</p>
      <ol>
        <li>Лісові пожежі;</li>
        <li>Витрати на продукцію лісового господарства;</li>
        <li>Збільшення площі сільського господарства;</li>
        <li>Незаконна вирубка лісів.</li>
      </ol>
    </div>
    <footer class="footer">
      <div id="clock"></div>
      <script src="time.js"></script>
      <?php
          echo date("d.m.Y");
      ?>
    </footer>
    <section>
</body>
</html>
