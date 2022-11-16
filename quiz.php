<style>
aside {
	font-size: 20px;
	font-family: sans-serif;
	color: #333;
}
.question {
	font-weight: 600;
}
.answers {
    margin-bottom: 20px;
}
#submit {
	font-family: sans-serif;
	font-size: 20px;
	background-color: #297;
	color: #fff;
	border: 0px;
	border-radius: 3px;
	padding: 20px;
	cursor: pointer;
	margin-bottom: 20px;
}
#submit:hover {
	background-color: #3a8;
}
.footer {
}
</style>

<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="reviews.css">
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
		<h2>Скільки ви знаєте про вирубку лісів і біорізноманіття?</h2>
    <div id="quiz"></div>
    <button id="submit">Отримати результати</button>
    <div id="results"></div>
    <div class="content home">
	<h2>Відгуки про тест</h2>
	<p>Перегляньте наведені нижче відгуки про наш тест.</p>
        <div class="reviews"></div>
        <script>
                const reviews_page_id = 2;
                fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                        document.querySelector(".reviews").innerHTML = data;
                        document.querySelector(".reviews .write_review_btn").onclick = event => {
                                event.preventDefault();
                                document.querySelector(".reviews .write_review").style.display = 'block';
                                document.querySelector(".reviews .write_review input[name='name']").focus();
                        };
                        document.querySelector(".reviews .write_review form").onsubmit = event => {
                                event.preventDefault();
                                fetch("reviews.php?page_id=" + reviews_page_id, {
                                        method: 'POST',
                                        body: new FormData(document.querySelector(".reviews .write_review form"))
                                }).then(response => response.text()).then(data => {
                                        document.querySelector(".reviews .write_review").innerHTML = data;
                                });
                        };
                });
        </script>
     </div>
    <footer class="footer">
      <div id="clock"></div>
      <script src="time.js"></script>
      <?php
          echo date("d.m.Y");
      ?>
    </footer>
  </aside>
  <script src="quiz.js"></script>
</body>
</html>
