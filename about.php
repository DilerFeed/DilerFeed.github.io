<style>
body {
background: linear-gradient(#ccc, #fff);
font: 14px sans-serif;
padding: 20px;
}
.letter {
background: #fff;
box-shadow: 0 0 10px rgba(0,0,0,0.3);
margin: 26px auto 0;
max-width: 550px;
min-height: 300px;
padding: 24px;
position: relative;
width: 80%;
}
.letter:before, .letter:after {
content: "";
height: 98%;
position: absolute;
width: 100%;
z-index: -1;
}
.letter:before {
background: #fafafa;
box-shadow: 0 0 8px rgba(0,0,0,0.2);
left: -5px;
top: 4px;
transform: rotate(-2.5deg);
}
.letter:after {
background: #f6f6f6;
box-shadow: 0 0 3px rgba(0,0,0,0.2);
right: -3px;
top: 1px;
transform: rotate(1.4deg);
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
  <aside>
    <div class="letter">
  <p>ПРО САЙТ</p>
  <p>Знелі́снення, збезлісі́ння — процес перетворення порослих лісом земель на угіддя без дерев, такі як пасовища, пустирі, сільськогосподарські угіддя, міста тощо.</p>
  <p>За означенням ЮНЕП, збезлісіння — повне знищення лісової рослинності та переведення земель в інший тип господарського призначення.</p>
  <p>Активне збезлісіння в Україні розпочалось у 30-х роках XVIII століття, в зв'язку з потребами у ресурсах військової сфери, будівництва та виробництва у Російській імперії. Протягом XIX та початку XX століть площа лісів України зменшилась на 30,5 %. Починаючи з 1960 р., площа лісів в Україні поступово збільшується за рахунок створення лісових насаджень в малолісистих областях півдня країни.</p>
  <p>Раніше площа лісопокриття у світі становила 80 млн км², нині вона скоротилася до 30 млн км², тобто знищено вже дві третини. За останні 200 років площа лісів зменшилася щонайменше удвічі.</p>
  <p>Ця проблема одна з найважливіших у світі зараз. Не забувайте про ліси.</p>
  <p>&#169; Іщенко Гліб, 6КН-22б.</p>
    </div>
  <footer class="footer">
      <div id="clock"></div>
      <script src="time.js"></script>
      <?php
          echo date("d.m.Y");
      ?>
  </footer>
  </aside>
</body>
</html>
