<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <title>premier_projet</title>
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
            </svg></a>
          <a class="nav-link active" href="#">Accueil <span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href="apple.php">Apple</a>
                <a class="dropdown-item" href="samsung.php">Samsung</a>
                <a class="dropdown-item" href="wiko.php">Wiko</a>
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




































</div>

<!------------------------------------------------------- Footer ----------------------------------------------->
<footer>
    <div class="">
      <section style="height:80px;"></section>
      <div class="row" style="text-align:center;">
      </div>


      
      <footer class="footer-bs d-flex flex-nowrap bd-highlight">
        <div class="row">
          
          <div class="col-md-2 order-0 p-2 bd-highlight ">
            <a href="logo"><img src="imgpro/logo.png" alt="logo"></a>
          </div>
        
          <div class=" col-md-2 order-1 p-2 bd-highlight footer-brand animated fadeInLeft ">
            <h3 class="titreLog">Logo</h3>
            <p> La consultation de ce site est optimale avec Microsoft Internet Explorer 11 ou versions
              ultérieures, et/ou les versions les plus récentes des navigateurs Google Chrome ou Mozilla Firefox.</p>
            <p>© 2014 BS3 UI Kit,Tous droits réservés. </p>
          </div>

          <div class="col-md-2 order-2 pt-5 bd-highlight footer-nav animated fadeInUp">
            <ul class="list">
              <li><a href="#">A propos de nous</a></li>
              <li><a href="#">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill mb-2 "
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z" />
                  </svg></a> Contacts</a></li>
              <li><a href="#">Termes & Condition</a></li>
              <li><a href="#">Mentions légales</a></li>
            </ul>

          </div>
          <div class="col-md-2 order-3 pt-4 bd-highlight footer-social animated fadeInDown">


            <h4><u>Nous rejoindre:</u></h4>
            <ul>
              <li><img src="imgpro/facebook.png" class="icone" alt="facebook">
                <a href="https://fr-fr.facebook.com">Facebook</a></li>
              <li><img src="imgpro/twiter.png" class="icone" alt="twiter">
                <a href="https://twitter.com/?lang=fr">Twitter</a></li>
              <li><img src="imgpro/insta.png" class="icone" alt="instagram">
                <a href="https://www.instagram.com/?hl=fr">Instagram</a></li>
            </ul>
          </div>
        </div>
        <!-----------------recherche------------->
        <div class="d-flex flex-row-reverse bd-highlight">
          <div class=" p-3 bd-highlight footer-ns animated fadeInRight">

            <h4>Newsletter</h4>

            <p>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span>
                  </button>
                </span>
              </div><!-- /input-group -->
            </p>
          </div>
        </div>
      </footer>
    </div>
  </footer>





















  </body>
  </html>