<?php include "menu.php";?>

<!--<h2>--><?//=$news['title']?><!--</h2>-->
<!--<p>--><?//=$news['text']?><!--</p>-->
    <h1>Новости</h1>
<?php if (!empty($news)): ?>
<?php foreach ($news as $item): ?>
    <a href="<?=route('news.NewsOne', $item['id'])?>"><?=$item['title']?></a><br>
<?php endforeach; ?>
<?php else: ?>
    <h2>Нет новостей</h2>
<?php endif; ?>
