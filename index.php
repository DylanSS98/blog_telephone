<?php
require_once ('config/function.php');

$articles = getArticles();



?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Téléphone</title>
</head>
<body>
<nav class="navbar navbar-dark ">
    <!---------------------------------------------------- Navbar contenue -------------------------------------->
    <img src="imgpro/logo.png" class="logo" alt="logo">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">
                    <!--petite maison-->
                    <svg width="2em" height="21px" viewBox="0 0 16 16" class="bi bi-house mb-1" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                </a>
                <a class="nav-link active" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="aPropos.html">A propos de nous</a>
                <a class="nav-link" href="nouveaute.html">Nouveautés</a>
            </div>
            <!--Sélection telephones-->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Téléphones
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="apple.html">Apple</a>
                            <a class="dropdown-item" href="samsung.html">Samsung</a>
                            <a class="dropdown-item" href="wiko.html">Wiko</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Barre de recherche-->
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
</nav>
<!-----------------------------------------------------------Conteneur------------------------------------------------>
<div class="container">
    <h1>Mobiles</h1>
    <!-----------------carousel------------------->
    <div class="centrerCarousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imgpro/samsung.jpg" class="d-block w-100" alt="samsung">
                </div>
                <div class="carousel-item">
                    <img src="imgpro/iphone.jpg" class="d-block w-100" alt="apple">
                </div>
                <div class="carousel-item">
                    <img src="imgpro/wiko.jpg" class="d-block w-100" alt="wiko">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!--------------------Texte------------------->
<div class="text">
    <h2 class="h2">De nos jours:</h2>
    <p>
        Aujourd’hui, le téléphone portable, autrement dit smartphone, fait parti de notre quotidien et imaginer la vie
        sans cet appareil est inconcevable.</br>
        </br>
        Les téléphones ont connu de nombreuses améliorations et ce n’est pas encore fini. Taille plus fine, poids de plus
        en plus léger, l’appareil est devenu pratique, confortable.</br>
        </br>
        Désormais le smartphone dépasse nos propres attentes, incluant des reconnaissances vocales, digitales, des
        fonctions permettant de suivre notre état de santé avec les battements de notre coeur, le nombre de calories que
        nous perdons chaque jour, etc.</br>
        </br>
        Il est possible d’avoir des applications pour chaque besoin: comptes bancaires, restaurants à proximité,
        supermarchés, shopping, réseaux sociaux.</br>
        </br>
        Le smartphone est devenu un luxe, en raison de son prix, mais un moyen de rester connecté en permanence, à travers
        le monde entier.</br>
    </p>
</div>
<!--Crée un truc du genre "a la une" conteant plusieurs article-->
<div class="container2 col-md-4 ml-auto">
    <div class="jumbotron jumbotron-fluid">
        <div class="containerArt">
            <div class="article">
                <h3 class="h3 display-4">A la une:</h3>
                <p class="lead">Retrouver toute l'actualité des téléphones mobiles.</p>
            </div>
        </div>
    </div>
    <!--<div class="d-flex justify-content-start">-->
    <!-------------Les articles------------------->
    <!--------Tous metre dans le meme panier pour les col------->

    <div class="artFus row ">
        <?php foreach ($articles as $article): ?>
            <div class="Art-fus col-md-4">

                <div class="card">
                    <img src="imgpro/articles.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?= $article['Title'] ?></h2>
                        <a href="article.php?id=<?= $article['ID'] ?>">Lire la suite</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!--https://www.lesnumeriques.com/telephone-portable/iphone-12-pourquoi-l-absence-de-la-5g-millimetrique-ne-devrait-pas-dissuader-les-acheteurs-francais-n155753.html-->
    <!-----------fin article------------------------->
</div>
<!--ESSAIE FOOTER:  https://www.freelancer.in/contest/Need-html-css-expert-to-design-a-footer-for-my-website-1652542-byentry-32244725?w=f&ngsw-bypass=# -->
<footer>
    <div class="">
        <section style="height:80px;"></section>
        <div class="row" style="text-align:center;">
        </div>
        <!------------------------------------------------------- Footer ----------------------------------------------->
        <footer class="footer-bs d-flex flex-nowrap bd-highlight">
            <div class="row">
                <div class="col-md-2 order-0 p-2 bd-highlight ">
                    <a href="logo"><img src="imgpro/logo.png" alt="logo"></a>
                </div>
                <div class=" col-md-2 order-1 p-2 bd-highlight footer-brand animated fadeInLeft ">
                    <h3 class="titreLog">Logo</h3>
                    <p> La consultation de ce site est optimale avec Microsoft Internet Explorer 11 ou versions
                        ultérieures, et/ou les versions les plus récentes des navigateurs Google Chrome ou Mozilla Firefox.
                    </p>
                    <p>© 2014 BS3 UI Kit,Tous droits réservés. </p>
                </div>
                <div class="col-md-2 order-2 pt-5 bd-highlight footer-nav animated fadeInUp">
                    <ul class="list">
                        <li><a href="aPropos.html">A propos de nous</a></li>
                        <li>
                            <a href="aPropos.html">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill mb-2 "
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                            d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                                </svg>
                            </a>
                            Contacts</a>
                        </li>
                        <li><a href="MentionLegales">Termes & Condition</a></li>
                        <li><a href="MentionLegales">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="col-md-2 order-3 pt-4 bd-highlight footer-social animated fadeInDown">
                    <h4><u>Nous rejoindre:</u></h4>
                    <ul>
                        <li><img src="imgpro/facebook.png" class="icone" alt="facebook">
                            <a href="https://fr-fr.facebook.com">Facebook</a>
                        </li>
                        <li><img src="imgpro/twiter.png" class="icone" alt="twiter">
                            <a href="https://twitter.com/?lang=fr">Twitter</a>
                        </li>
                        <li><img src="imgpro/insta.png" class="icone" alt="instagram">
                            <a href="https://www.instagram.com/?hl=fr">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-----------------recherche------------->
            <div class="d-flex flex-row-reverse bd-highlight">
                <div class=" p-3 bd-highlight footer-ns animated fadeInRight">
                    <h4>Newsletter</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                    </p>
                </div>
            </div>
        </footer>
    </div>
</footer>
</body>
</html>
</body>
</html>