<?php
// Оновлюємо необхідні дані бази даних MySQL
$DATABASE_HOST = 'назва_хоста';
$DATABASE_USER = 'користувач_базиданих';
$DATABASE_PASS = 'пароль_базиданих';
$DATABASE_NAME = 'назва_базиданих';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // Резервне повідомлення про помилку
    exit('Не вдалося підключитися до бази даних!');
}
// Робиимо красивий напис в залежності від часу відправлення відгука
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array('y' => 'рік (и/ів)', 'm' => 'місяць (і/ів)', 'w' => 'тиждень (і/ів)', 'd' => 'день (я/ів)', 'h' => 'годин (а/и)', 'i' => 'хвилин (а/и)', 's' => 'секунд (а/и)');
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' тому' : 'тільки що';
}
// Page ID має існувати, це використовується для визначення того, які відгуки для якої сторінки.
if (isset($_GET['page_id'])) {
    if (isset($_POST['name'], $_POST['rating'], $_POST['content'])) {
        // Вставити новий відгук (форма, надіслана користувачем)
        $stmt = $pdo->prepare('INSERT INTO reviews (page_id, name, content, rating, submit_date) VALUES (?,?,?,?,NOW())');
        $stmt->execute([$_GET['page_id'], $_POST['name'], $_POST['content'], $_POST['rating']]);
        exit('Ваш відгук надіслано!');
    }
    // Отримайте всі відгуки за Page ID, упорядкованими за датою надсилання
    $stmt = $pdo->prepare('SELECT * FROM reviews WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([$_GET['page_id']]);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Отримайте загальну оцінку та загальну кількість відгуків
    $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM reviews WHERE page_id = ?');
    $stmt->execute([$_GET['page_id']]);
    $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('Не надано page ID.');
}
?>
<div class="overall_rating">
    <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
    <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
    <span class="total"><?=$reviews_info['total_reviews']?> відгуків</span>
</div>
<a href="#" class="write_review_btn">Написати відгук</a>
<div class="write_review">
    <form>
        <input name="name" type="text" placeholder="Ваше ім'я" required>
        <input name="rating" type="number" min="1" max="5" placeholder="Оцінка (1-5)" required>
        <textarea name="content" placeholder="Напишіть свій відгук тут..." required></textarea>
        <button type="submit">Надіслати відгук</button>
    </form>
</div>
<?php foreach ($reviews as $review): ?>
<div class="review">
    <h3 class="name"><?=htmlspecialchars($review['name'], ENT_QUOTES)?></h3>
    <div>
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>
        <span class="date"><?=time_elapsed_string($review['submit_date'])?></span>
    </div>
    <p class="content"><?=htmlspecialchars($review['content'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>
