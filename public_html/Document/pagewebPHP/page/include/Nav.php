        <img src="../images/LogoTemporaire1.png" alt="LogoTemporaire">
        <a class="left" href="index.php">Accueil</a>
        <div class="dropdown">
            <button class="dropbtn">Articles</button>
            <div class="dropdown-content">
                <a href="dev.php">Développeur</a>
                <a href="jeux.php">Jeux Vidéo</a>
                <a href="histoire.php">Histoire</a>
            </div>
        </div>
        <a class="leftB" href="blog.php">Blog</a>
        <div class="dropdown2">
            <button class="dropbtn2"><img src="../images/LogoConnexion.png" alt="Membre"
                    style="width:30px;height:30px;"></button>
            <div class="dropdown2-content">
                <fieldset>
                    <Form id="dropdownform">
                        <p><label for="email">Votre email : </label></p>
                        <Input type="text" name="email" id="email" placeholder="exemple@exemple.exemple">
                        <p><label for="pswd">Mot de passe: </label></p>
                        <input type="password" id="pass" name="password" minlength="8" required>
                        <div class="aligncenter">
                        <input type="submit" value="Envoyer">
                        </div>
                    </form>
                    <a href="ccompte.php">Crée un compte</a>
                    <a href="forgetmdp.php">Mot de passe oublié</a>
            </fieldset>
            </div>
        </div>
        <a class="right" href="a_propos.php">À propos</a>
        <a class="right" href="contact.php">Contact</a>
        <a class="right" href="forum.php">Forum</a>