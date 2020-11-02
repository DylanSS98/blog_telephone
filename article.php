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
    <h1 style="font-family: 'Arial Black'"><?= $article['Title'] ?></h1>
        <p style="font-family: Arial"><?= $article['Content'] ?></p>
        <hr/>
</body>
</html>
