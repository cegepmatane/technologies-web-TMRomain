var email ;
//Recuperer les variable de l'HTML
function onLoad()
{
    if(email == null)
    {
        email = document.getElementById("emailCompte");
    }
}

//Fonction qui test les condition pour valider le compte
function validerCompte(formulaire){
    var message = document.getElementById("message");
    if(email == null)
    {
        email = document.getElementById("emailCompte");
    }
    if(email.value == ""){
       
        return false;
    }else{
        validerCourriel(email);
    }
    return false;
}


//Vide la valeur de l'email si le champ est egale a "exemple@exemple.exemple"
function onFocusEmail(input) {
    if(email == null)
    {
        email = document.getElementById("emailCompte");
    }
    if(email.value == "exemple@exemple.exemple")
    {
    email.value = "";
    }
}

//Change la valeur de l'email si vide en "exemple@exemple.exemple"
function outFocusEmail(formulaire)
{
    if(email == null)
    {
        email = document.getElementById("emailCompte");
    }
    if(email.value == "")
    {
        email.value = "exemple@exemple.exemple";
    }
    
}
//Change les border des input en Bleu
function turnBlue(input){
    input.style.borderColor = "blue";
}
//Enléve le border blue effectuer dans la fonction turnBlue()
function unFocus(input){
    input.style.borderColor = "grey";
}
//Verifie plusieur condition et return true si elle sont toute Valide
function validerCourriel(email)
{
    if(email.value == "" || email.value == "exemple@exemple.exemple")
    {
        message.innerHTML = "*L'email ne peut pas être Vide";
        message.style.color ="red";
        email.style.borderColor ="red";
    }else
    {
        var emailEntre = email.value;
        var formatEmail = "^([a-z0-9_\.-]+\@[\da-z\.-]+\.[a-z\.]{2,6})$";
        var validateurEmail = new RegExp(formatEmail);
        var emailFiltre = validateurEmail.exec(emailEntre);    
        if(emailFiltre == null){
            message.innerHTML = "*Mauvais format d'email";
            message.style.color ="red";
            return false;
        }else{
            window.location.href = "connexion.html";
            return true;
        }
    }
 
}