<?php
require_once ('config/function.php');

$article = getArticles();

?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog</title>
    </head>
<h1>Articles :</h1>

<?php foreach ($articles as $article): ?>
    <h2><?= $article->title ?></h2>
<a href="article.php?id=<?= $article->id ?>">Lire la suite</a>
<?php endforeach; ?>
</html>