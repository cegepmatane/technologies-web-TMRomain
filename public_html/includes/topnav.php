<?php
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
        <li class="hambNav"><a class="topLink" href="index.html">Accueil</a></li>
        <li class="hambNav" id="accordion" >Articles</li>
        </ul>
        <ul id="panel">
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
  ';
  ?>