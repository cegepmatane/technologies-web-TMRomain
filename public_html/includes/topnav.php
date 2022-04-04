<?php
require_once "Serveur/MembreDAO.php";
echo '
<nav class="sticky">
    <div class="TopBar">
      <img class="logo" src="Decoration/LogoTemporaire1.png" alt="LogoTemporaire">
      <div id="menuModal" class="modalMenu">
      <!-- Hamburger Menu -->
        <div class="container" id="hambMenu">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="index.php">Accueil</a></li>
        <li class="hambNav" id="accordion" >Articles</li>
        </ul>
        <ul id="panel">
            <li class="hambNav"><a class="topLink" href="studio.php">Studio</a></li>
            <li class="hambNav" ><a class="topLink" href="jeux.php">Jeux Vidéo</a></li>
            <li class="hambNav"> <a class="topLink" href="histoire.php">Histoire</a></li>
        </ul>
        <ul class="menu">
        <li class="hambNav"><a class="topLink" href="blog.php">Blog</a></li>
        <li class="hambNav"><a class="topLink" href="forum.php">Forum</a></li>
        <li class="hambNav"><a class="topLink" href="contact.php">Contact</a></li>
        <li class="hambNav"><a class="topLink" href="a_propos.php">À propos</a></li>
      </ul>
    </div>
      <ul>
        <li class="topNav"><a class="topLink" href="index.php"> Accueil</a></li>
        <li class="topNav"><a href="article.php" class="topLink">Articles</a>
          <ul class="dropdown">
            <li class="topNav"><a class="topLink" href="studio.php">Studio</a></li>
            <li class="topNav" ><a class="topLink" href="jeux.php">Jeux Vidéo</a></li>
            <li class="topNav"> <a class="topLink" href="histoire.php">Histoire</a></li>
          </ul>
        </li>
        <li class="topNav"><a class="topLink" href="blog.php">Blog</a></li>
        <li class="topNav"><a class="topLink" href="forum.php">Forum</a></li>
        <li class="topNav"><a class="topLink" href="contact.php">Contact</a></li>
        <li class="topNav"><a class="topLink" href="a_propos.php">À propos</a></li>
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
                <p><a href="ccompte.php">Crée un compte</a></p>
                <p><a href="forgetmdp.php">Mot de passe oublié</a></p>
              </fieldset>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  ';
  ?>