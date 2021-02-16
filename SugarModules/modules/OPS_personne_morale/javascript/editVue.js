
$(document).ready(function() {
   	var siret = document.getElementById("siret") ;
   	var rna = document.getElementById("numero_rna") ;
   	var rne = document.getElementById("numero_rne") ;
   	var tel = document.getElementById("phone_office") ;
   	siret.onblur = function() {
    	verif_siret() ;
	}; 
   	rna.onblur = function() {
    	verif_rna() ;
	}; 
	rne.onblur = function() {
    	verif_rne() ;
	}; 
	tel.onblur = function() {
    	verif_tel() ;
	}; 

});


function verif_siret() {

	var estValide;
	var siret = document.getElementById("siret").value ;
    siret = siret.replace(/ /gi , "");

	if ( (siret.length != 14) || (isNaN(siret)) ){

	  estValide = false;
	
	}
	else {

	  var somme = 0;
	  var tmp;
	  for (var cpt = 0; cpt<siret.length; cpt++) {
	    if ((cpt % 2) == 0) { // Les positions impaires : 1er, 3è, 5è, etc... 
	      tmp = siret.charAt(cpt) * 2; // On le multiplie par 2
	      if (tmp > 9) 
	        tmp -= 9;	// Si le résultat est supérieur à 9, on lui soustrait 9
	    }
	   else
	     tmp = siret.charAt(cpt);
	     somme += parseInt(tmp);
	  }
	  if ((somme % 10) == 0)
	    estValide = true; // Si la somme est un multiple de 10 alors le SIRET est valide 
	  else
	    estValide = false;
	
	}
	

	if( estValide == false ){

		document.getElementById("siret").style.backgroundColor = "red";

	}
	else{

		document.getElementById("siret").style.backgroundColor = "#c3e7fd";


	}	

}

function verif_rna() {

	var estValide;
	var rna = document.getElementById("numero_rna").value ;

	if ( rna.length != 10 || rna.substr(0, 1) != "W" || isNaN( rna.substr(1, 10) ) == true ){
		console.log( "false 1");	
		estValide = false;
	
	}


	if( estValide == false ){

		document.getElementById("numero_rna").style.backgroundColor = "red";

	}
	else{

		document.getElementById("numero_rna").style.backgroundColor = "#c3e7fd";


	}	

}

function verif_rne() {

	var estValide;
	var rne = document.getElementById("numero_rne").value ;

	if ( rne.length !=  8 || isNaN( rne.substr(6, 7) ) == false  || isNaN( rne.substr(0, 6) ) == true ){
		
		estValide = false;
	
	}


	if( estValide == false ){

		document.getElementById("numero_rne").style.backgroundColor = "red";

	}
	else{

		document.getElementById("numero_rne").style.backgroundColor = "#c3e7fd";


	}	

}

function verif_tel( tel ){

	var estValide;
	var tel = document.getElementById("phone_office").value ;
    tel = tel.replace(/ /gi , "");

    var valide=/^0[1-6]\d{8}$/;

    if(	!valide.test(tel)){
		
		estValide = false;
  
    }
   

	if( estValide == false ){

		document.getElementById("phone_office").style.backgroundColor = "red";

	}
	else{

		document.getElementById("phone_office").style.backgroundColor = "#c3e7fd";

	}	

}