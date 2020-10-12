<?php include "menu.php";?>
<h1>Категория Новостей</h1>
<?php foreach ($newsCategory as $item): ?>
    <a href="<?=route('news.NewsOneCategory', $item['slug'])?>"><?=$item['title']?></a><br>
<?php endforeach; ?>
