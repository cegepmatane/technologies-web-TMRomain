//créer un nouvel élément HTML en JavaScript
let balise = document.createElement("h3");  
let item = document.getElementsByClassName("g-card");
balise.style.color = "black";
//La méthode appendChild() va insérer un objet en tant que dernier enfant d’un autre objet.
document.getElementById("textUpdate").appendChild(balise).innerHTML = "Nombre d'item dans la liste: " + item.length;

let button;
function LirePlusText(button){
    let child = button.firstElementChild;
    let text = button.parentElement.firstElementChild;
    let parentFirstChild = button.parentElement.firstElementChild;
    let plus = button.parentElement.firstElementChild.getElementsByClassName("plus");
    let point = button.parentElement.firstElementChild.getElementsByClassName("point");
    console.log(plus);
    if(child.innerHTML == "Lire plus")
    {
        plus[0].style.display = "inline";
        point[0].style.display = "none";
        text.style.overflowY = "scroll";
        child.innerHTML = "Lire moin";
    }else{
        plus[0].style.display = "none";
        point[0].style.display = "inline";
        text.style.overflowY = "hidden";
        child.innerHTML = "Lire plus";
    }
}