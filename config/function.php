<?php

require_once ('connect.php');


//FONCTION QUI RECUPERE TOUS LES ARTICLES//
function getArticles()

{
    $bdd = pdo();
        $requete = $bdd->prepare('SELECT ID, Title, Slug, CreatedAt FROM article WHERE ID');
        $requete->execute();
        $data = $requete->fetchAll();
        return $data;

    }


//FONCTION QUI RECUPERE UN ARTICLE//
function getArticle($id)
    {
        $bdd = pdo();
            $requete = $bdd->prepare('SELECT * FROM article WHERE id = ?');
            $requete->execute(array($id));
            if ($requete->rowCount() == 1)
                {
                    $data = $requete->fetch();
                    return $data;
                }
            else
                header('location: index.php');
    }

//fonction pour le slug//


