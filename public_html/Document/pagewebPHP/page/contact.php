<?php include('include/Header.php');?>
<div class="FormContact">
    <fieldset>
        <legend>Nous contacter :</legend>
        <Form id="answers">
            <p><label for="sujet">Titre de votre sujet :</label>
                <Input type="text" name="sujet" id="sujet"autofocus></p>
            <p><label for="email">Votre email : </label>
                <Input type="text" name="email" id="email" placeholder="exemple@exemple.exemple"></p>
            <p><label for="sujettxt">Votre Sujet :</label>
                ​<textarea id="sujettxt" rows="4" cols="50"></textarea></p>
            <input type="submit" value="Envoyer">
        </Form>
    </fieldset>
</div>
<?php include('include/Footer.php');?>