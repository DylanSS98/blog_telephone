<?php


require_once ('config/function.php');
extract($_GET);
$id = strip_tags($id);
$article = getArticle($id);
?>
<html>
    <head>
    <meta charset="utf-8"/>
    <title><?= $article['Title'] ?></title>
</head>
<body>
    <h1 style="font-family: 'Arial Black'; text-align: center"><?= $article['Title'] ?></h1>
        <p style="font-family: Arial; text-align: center; margin-right: 20%; margin-left: 20%"><?= $article['Content'] ?></p>
        <hr/>
</body>
</html>