<?php
require 'includes/topnav.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="generale.css">
  <title>GameDepth</title>
</head>

<body>
  <div class="wrapper">
      <div id="stars"></div>
      <div id="stars2"></div>
      <div id="stars3"></div>
    </div>
  <br><br><br><br><br><br>
  <div class="article">
    <h1>Pourquoi The Witcher devait être développé en Pologne ?</h1>
    <div class="slideshow-container">

      <!-- Image et numero -->
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img onclick="bigger(this)" src="Decoration/WitcherBanner.jpg" style="width:100%" alt="imageArticle">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img onclick="bigger(this)" src="Decoration/WitcherBanner2.jpg" style="width:100%" alt="imageArticle">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img onclick="bigger(this)" src="Decoration/WitcherBanner3.jpg" style="width:100%" alt="imageArticle">
      </div>

      <!-- suivant /precedent bouton -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <p class="texteArticle">L’industrie polonaise, malgré quelques réussites, a continué à rencontrer des problèmes qui ont rendu difficiles
      les efforts entrepris pour la rendre concurrentielle. Les gros éditeurs n’étaient pas particulièrement intéressés
      à l’idée d’investir dans d’obscurs studios basés dans un pays qui ne possédait pas d’industrie vidéoludique
      quelques années auparavant. En plus de cela, les développeurs avaient un goût étrange concernant les plateformes
      de jeu, problème caractéristique des anciens pays de l’Union Soviétique. Dans les années ’80, durant l’âge d’or de
      Nintendo, les joueurs polonais n’avaient nullement accès aux consoles de jeu. Cela a fini par changer avec le
      temps, mais ces appareils étaient largement perçus comme contraignants, une sorte de caprice de joueur fortuné. Le
      et l’amusement. Pour cette raison, le pays est passé à côté de la vague de séries populaires comme Mario, Final
      Fantasy, Metal Gear Solid ou Halo. À la place, le public vénérait des franchises comme Gothic ou
      Stronghold.Puisque c’était l’inverse dans le reste de l’Europe, les jeux polonais avaient du mal à trouver un
      public à l’étranger. Cette tendance a perduré durant toute la seconde moitié de la décennie 2000. Par exemple, le
      premier jeu The Witcher n’est disponible que sur PC (même si un portage sur consoles avait été mis en chantier à
      un moment donné).</p>
  </div>
  <!-- Le bloqueur -->
  <div id="myModal" class="modal">

    <!-- Fermeture bloqueur -->
    <span class="close">&times;</span>

    <!-- Image du bloqueur-->
    <img src="#" class="modal-content" id="img01" alt="imageGrande">
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