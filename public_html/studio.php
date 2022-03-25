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
      <section class="wrapper">
          <div id="stars"></div>
          <div id="stars2"></div>
          <div id="stars3"></div>
  <br><br><br><br><br><br>
  <h1>Devellopeur</h1>
  <br> <br> <br>
  <div class="vignette">
    <img id="larian" alt="Logo Larian Studio" class="vignetteImage" src="Decoration/LarianStudioLogo.png">
    <img id="ubisoft" alt="Logo ubisoft Studio" class="vignetteImage" src="Decoration/UbisoftStudioLogo.png">
    <img id="rockstar" alt="Logo rockstar Studio" class="vignetteImage" src="Decoration/RockstarStudioLogo.png">
    <img id="riot" alt="Logo riot Studio" class="vignetteImage" src="Decoration/RiotStudioLogo.png">
    <img id="cdproject" alt="Logo cdproject Studio" class="vignetteImage" src="Decoration/CDProjectStudioLogo.png">
  </div>
  <div id="zone-affichage">
    </div>
  <div class="detail-studio" id="detail-larian">
    <img class="studio-illustration" src="Decoration/LarianStudioLogo.png" />
    <div class="studio-description">
      <h5>Larian Studio</h5>
      <p>Larian Studios est une société de développement de jeux vidéo belge, située à Gand. Fondée en 1996 par Swen Vincke, elle est spécialisée dans les jeux de rôle et les jeux éducatifs. La société est notamment connue pour sa série de jeux vidéo de rôle Divinity. Elle compte désormais 4 studios de développement pour environ 200 employés.</p>
      <a href="https://larian.com/">Le site du studio </a>
    </div>
  </div>
  <div class="detail-studio" id="detail-ubisoft">
    <img class="studio-illustration" src="Decoration/UbisoftStudioLogo.png" />
    <div class="studio-description">
      <h5>Ubisoft</h5>
      <p>Larian Studios est une société de développement de jeux vidéo belge, située à Gand. Fondée en 1996 par Swen Vincke, elle est spécialisée dans les jeux de rôle et les jeux éducatifs. La société est notamment connue pour sa série de jeux vidéo de rôle Divinity. Elle compte désormais 4 studios de développement pour environ 200 employés.</p>
      <a href="https://larian.com/">Le site du studio </a>
    </div>
  </div>
  <div class="detail-studio" id="detail-rockstar">
    <img class="studio-illustration" src="Decoration/RockstarStudioLogo.png" />
    <div class="studio-description">
      <h5>Larian Studio</h5>
      <p>Larian Studios est une société de développement de jeux vidéo belge, située à Gand. Fondée en 1996 par Swen Vincke, elle est spécialisée dans les jeux de rôle et les jeux éducatifs. La société est notamment connue pour sa série de jeux vidéo de rôle Divinity. Elle compte désormais 4 studios de développement pour environ 200 employés.</p>
      <a href="https://larian.com/">Le site du studio </a>
    </div>
  </div>
  <div class="detail-studio" id="detail-riot">
    <img class="studio-illustration" src="Decoration/RiotStudioLogo.png" />
    <div class="studio-description">
      <h5>Larian Studio</h5>
      <p>Larian Studios est une société de développement de jeux vidéo belge, située à Gand. Fondée en 1996 par Swen Vincke, elle est spécialisée dans les jeux de rôle et les jeux éducatifs. La société est notamment connue pour sa série de jeux vidéo de rôle Divinity. Elle compte désormais 4 studios de développement pour environ 200 employés.</p>
      <a href="https://larian.com/">Le site du studio </a>
    </div>
  </div>
  <div class="detail-studio" id="detail-cdproject">
    <img class="studio-illustration" src="Decoration/CDProjectStudioLogo.png" />
    <div class="studio-description">
      <h5>Larian Studio</h5>
      <p>Larian Studios est une société de développement de jeux vidéo belge, située à Gand. Fondée en 1996 par Swen Vincke, elle est spécialisée dans les jeux de rôle et les jeux éducatifs. La société est notamment connue pour sa série de jeux vidéo de rôle Divinity. Elle compte désormais 4 studios de développement pour environ 200 employés.</p>
      <a href="https://larian.com/">Le site du studio </a>
    </div>
  </div>
  <div class="stickyl">
    <div class="FootBar">
      <div class="floatright">
        <a class="RSButton" href="https://www.facebook.com/">
          <p id="Facebook">Facebook</p>
        </a>
        <a class="RSButton" href="https://twitter.com/">
          <p id="Twitter">Twitter</p>
        </a>
        <a class="RSButton" href="https://github.com/">
          <p id="GitHub">GitHub</p>
        </a>
        <a class="RSButton" href="https://www.youtube.com/">
          <p id="Youtube">Youtube</p>
        </a>
        <a class="RSButton" href="https://www.reddit.com/">
          <p id="Reddit">Reddit</p>
        </a>
      </div>
    </div>
  </div>
  <script src="Scripts/Nav.js"></script>
  <script src="Scripts/Footer.js"></script>
  <script src="Scripts/ShowStudio.js"></script>
      </section>
</body>

</html>