<?php include('include/Header.php');?>
<div class="FormContact">
    <fieldset>
        <legend>Crée un Compte :</legend>
        <Form id="answers">
            <p>
            <p><label for="prenom">Votre Prénom :</label>
                <Input type="text" name="prenom" id="prenom"placeholder="Alexis" autofocus></p>
                <p><label for="date">Date de naissance :</label>
                <input type="date" id="date" name="date"></p>
                <p><img src="../images/LogoConnexion.png" alt="Membre"style="width:13px;height:13px;">
                <label for="pseudo">Votre Pseudo :</label>
                <Input type="text" name="pseudo" id="pseudo" ></p>
            <p><img src="../images/emailIcon.png" alt="Membre"style="width:13px;height:13px;">
                <label for="emailCompte">Votre email : </label>
                <Input type="text" name="emailCompte" id="emailCompte" placeholder="exemple@exemple.exemple"></p>
            <p><img src="../images/lock.png" alt="Membre"style="width:13px;height:13px;">
                <label for="passwordcc">Votre mots de passe :</label>
                <input type="password" id="passwordcc" name="passwordcc" minlength="8" required></p>
                <br>
                <p><input type="submit" value="Envoyer"></p>
        </Form>
    </fieldset>
</div>
<?php include('include/Footer.php');?>