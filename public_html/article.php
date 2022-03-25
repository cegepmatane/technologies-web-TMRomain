<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="generale.css">
  <title>GameDepth</title>
</head>

<body>
<nav class="sticky">
    <div class="TopBar">
      <img class="logo" src="Decoration/LogoTemporaire1.png" alt="LogoTemporaire">
      <!-- Cache l'ecran quand actif  -->
      <div id="menuModal" class="modalMenu">
      <!-- Hamburger Menu -->
        <div class="container" id="hambMenu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="index.html">Accueil</a></li>
        <li class="hambNav" id="accordion" >Articles</li>
        </ul>
        <ul class="panel">
            <li class="hambNav"><a class="topLink" href="studio.html">Studio</a></li>
            <li class="hambNav" ><a class="topLink" href="jeux.html">Jeux Vidéo</a></li>
            <li class="hambNav"> <a class="topLink" href="histoire.html">Histoire</a></li>
        </ul>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="blog.html">Blog</a></li>
        <li class="hambNav"><a class="topLink" href="forum.html">Forum</a></li>
        <li class="hambNav"><a class="topLink" href="contact.html">Contact</a></li>
        <li class="hambNav"><a class="topLink" href="a_propos.html">À propos</a></li>
      </ul>
    </div>
      <ul>
        <li class="topNav"><a class="topLink" href="index.html"> Accueil</a></li>
        <li class="topNav"><a href="article.html" class="topLink">Articles</a>
          <ul class="dropdown">
            <li class="topNav"><a class="topLink" href="studio.html">Studio</a></li>
            <li class="topNav" ><a class="topLink" href="jeux.html">Jeux Vidéo</a></li>
            <li class="topNav"> <a class="topLink" href="histoire.html">Histoire</a></li>
          </ul>
        </li>
        <li class="topNav"><a class="topLink" href="blog.html">Blog</a></li>
        <li class="topNav"><a class="topLink" href="forum.html">Forum</a></li>
        <li class="topNav"><a class="topLink" href="contact.html">Contact</a></li>
        <li class="topNav"><a class="topLink" href="a_propos.html">À propos</a></li>
        <li class="topNavRight"><a class="topLink">Connection</a>
          <ul class="startRight">
            <li>
              <fieldset class="Connection">
                <form>
                  <p><label for="email">Votre email : </label></p>
                  <input type="text" name="email" id="email" placeholder="exemple@exemple.exemple">
                  <p><label for="pass">Mot de passe: </label></p>
                  <input type="password" id="pass" name="pass" minlength="8" required>
                  <div class="aligncenter">
                    <input type="submit" value="Envoyer">
                  </div>
                </form>
                <p><a href="ccompte.html">Crée un compte</a></p>
                <p><a href="forgetmdp.html">Mot de passe oublié</a></p>
              </fieldset>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
    </div>
  <br><br><br><br><br><br>
  <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <h2>Programmeur de jeux vidéo</h2>
          <img class="imgArticle" src="Decoration/ProgBanner.jpg" alt="Prog">
          <p>Imaginez pouvoir créer le moteur de jeux vidéo qui prennent vie grâce à vos instructions.  Carrière passionnante, la programmation de jeux vidéo est de plus en plus en demande</p>
          <a class="button" href="dev.html">Voir plus d'article</a>
        </div>
        <div class="card">
            <h2>Jeux vidéo</h2>
            <img class="imgArticle" src="Decoration/WitcherBanner.jpg" alt="Prog">
            <p>Un jeu vidéo est un jeu électronique doté d'une interface utilisateur permettant une interaction humaine ludique en générant un retour visuel sur un dispositif vidéo. Le joueur de jeu vidéo dispose de périphériques pour agir sur le jeu et percevoir les conséquences de ses actes sur un environnement virtuel. Le mot « vidéo » dans le jeu vidéo fait traditionnellement référence à un dispositif d'affichage de trame, mais, à la suite de la vulgarisation du terme, il implique désormais tout type de dispositif d'affichage.</p>
            <a class="button" href="jeux.html">Voir plus d'article</a>
        </div>
      </div>
      <div class="rightcolumn">
        <div class="card">
            <h2>Programmeur de jeux vidéo</h2>
            <img class="imgArticle" src="Decoration/histoireBanner.jpg" alt="Prog">
            <p>L'histoire du jeu vidéo débute dans les années 1940, où l'idée du jeu vidéo naît au sein des universités lors de recherches sur l'informatique. Les jeux vidéo ne se font connaitre du grand public qu'à partir des années 1970 avec la commercialisation des premières bornes d'arcade ainsi que les consoles de jeu vidéo, pouvant faire tourner une dizaine de jeux simplistes. Le jeu vidéo devient alors une industrie, évoluant avec la technologie et marqué par un krach en 1983, à la suite de l'inondation des modèles sur le marché après le boom des années 1970.</p>
            <a class="button" href="histoire.html">Voir plus d'article</a>
        </div>
      </div>
    </div>
  <br><br><br><br><br>
  <div class="stickyl">
    <div class="FootBar">
      <div class="floatright">
        <a class="RSButton" href="https://www.facebook.com/"><p id="Facebook">Facebook</p></a>
        <a class="RSButton" href="https://twitter.com/"><p id="Twitter">Twitter</p></a>
        <a class="RSButton" href="https://github.com/"><p id="GitHub">GitHub</p></a>
        <a class="RSButton" href="https://www.youtube.com/"><p id="Youtube">Youtube</p></a>
        <a class="RSButton" href="https://www.reddit.com/"><p id="Reddit">Reddit</p></a>
      </div>
    </div>
  </div>
  <script src="Scripts/Nav.js"></script>
  <script src="Scripts/Footer.js"></script>
  <script src="Scripts/ArticleSlide.js"></script>
  <script src="Scripts/Article.js"></script>
</body>

</html>