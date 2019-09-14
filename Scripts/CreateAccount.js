var email ;
function onLoad()
{
    if(email == null)
    {
        email = document.getElementById("emailCompte");
    }
}

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
function turnBlue(input){
    input.style.borderColor = "blue";
}
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
function unFocus(input){
    input.style.borderColor = "grey";
}
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