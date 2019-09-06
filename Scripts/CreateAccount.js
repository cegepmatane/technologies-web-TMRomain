
function validerCompte(formulaire){
    var message = formulaire.getElementById("message");
    var email = formulaire.getElementById("emailCompte");
    if(email.value.length == 0){
        message.innerHTML= "Email ne peut pas etre vide";
        email.style.color ="red";
    }

}