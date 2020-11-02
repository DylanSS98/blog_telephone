<?php


if (isset($_GET['ID']))
    header('location: index.php');
else {
        extract($_GET);
        $id = strip_tags('ID');
        require_once ('config/function.php');
        $article = getArticles($id);
}
?>
<html>
    <head>
    <meta charset="utf-8"/>
    <title><?= $article['Title'] ?></title>
</head>
<body>
    <h1><?= $article['Title'] ?></h1>
        <p><?= $article['Content'] ?></p>
        <hr/>
</body>
</html>