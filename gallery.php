<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 100%;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
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
    <article>
      <div class="gallery">
  <a target="_blank" href="image1.jpg">
    <img src="image1.jpg" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">Вулкан Рейнір, США</div>
      </div>

<div class="gallery">
  <a target="_blank" href="image2.jpg">
    <img src="image2.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Сіетл, США</div>
</div>

<div class="gallery">
  <a target="_blank" href="image3.jpg">
    <img src="image3.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Південне озеро Тахо, США</div>
</div>

<div class="gallery">
  <a target="_blank" href="image4.jpg">
    <img src="image4.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Сангре-Гранде, Трінідад і Тобаго</div>
</div>
<footer class="footer">
    <div id="clock"></div>
    <script src="time.js"></script>
    <?php
        echo date("d.m.Y");
    ?>
</footer>
</article>
</body>
</html>
