document.getElementById("sav").addEventListener("button", function(e){
	e.preventDefault();

	var erreur;
	var prenom = document.getElementById("prenom");
	
    if(!prenom.value){

    	erreur = "inserer un prenom";
    }

    if (erreur) {
        e.preventDefault();
    	document.getElementById("erreur").innerHTML = erreur;
    	return false;
    }
    else
    {
    alert('Formulaire Envoyé !');    	
    }

	alert('Formulaire Envoyé !');
});
