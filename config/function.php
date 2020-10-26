<?php

function getArticles()
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT ID, Title, FROM actricle ORDER BY ID DESC');
    $req->execute();
    $date = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

