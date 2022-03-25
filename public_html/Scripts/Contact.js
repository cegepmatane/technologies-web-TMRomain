var form = document.getElementById("answers");
function handleForm(event) { 
    event.preventDefault(); 
    envoieContact()
} 
form.addEventListener('submit', handleForm);


function envoieContact(){
    let subject = document.getElementById("problemeSelect");
    let content = document.getElementById("sujettxt");
    window.open('mailto:romainover51@gmail.com?subject= Mon probleme est:'+subject.value+'&body='+content.value);
    return false;
}