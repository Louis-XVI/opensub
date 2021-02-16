$(document).ready(function() {

    var iban = document.getElementById('iban');
    iban.addEventListener("blur", function() {
        validateIBAN( iban.value ) ;
    });

    var bic = document.getElementById('bic');
    bic.addEventListener("blur", function() {
        validateBIC( bic.value ) ;
    });

});

function validateIBAN(iban) 
{
    var newIban = iban.replace(/ /gi , "");
    newIban = newIban.replace(/_/gi , "");
    newIban = newIban.toUpperCase();

    var modulo = function (divident, divisor) {
            var cDivident = '';
            var cRest = '';
            for (var i in divident ) {
                var cChar = divident[i];
                var cOperator = cRest + '' + cDivident + '' + cChar;

                if ( cOperator < parseInt(divisor) ) {
                        cDivident += '' + cChar;
                } else {
                        cRest = cOperator % divisor;
                        if ( cRest == 0 ) {
                            cRest = '';
                        }
                        cDivident = '';
                }
            }
            cRest += '' + cDivident;
            if (cRest == '') {
                cRest = 0;
            }
            return cRest;
    };
    if (newIban.search(/^[A-Z]{2}/gi) < 0) {
        return false;
    }
    newIban = newIban.substring(4) + newIban.substring(0, 4);
    newIban = newIban.trim();
    newIban = newIban.replace(/[A-Z]/g, function (match) {
        return match.charCodeAt(0) - 55;
    });
    console.log( "test" + parseInt(modulo(newIban, 97), 10) );
        
    var colorIban = document.getElementById('iban');
    if( parseInt(modulo(newIban, 97), 10) === 1 ){
        colorIban.style.border = "1px solid green";
    }
    else{
        colorIban.style.border = "1px solid red";
    }
}

function validateBIC(bic) {
    
    var newBIC = bic.replace(/ /gi , "");
    newBIC = newBIC.toUpperCase();

    if ( ( newBIC.length != 11 ) && ( newBIC.length != 8 ) ) {
       
        newBIC = false ;
    
    }

    var formatBic = newBIC.substr(4,2) ;
    
    var code_pays=(formatBic==null ? "" : formatBic.toString().toUpperCase());  

    var xhr = null;
   
    if (window.XMLHttpRequest || window.ActiveXObject) {
      
        if (window.ActiveXObject) {
         
            try {
            
                xhr = new ActiveXObject('Msxml2.XMLHTTP');
      
            } catch(e) {
            
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
         
            }
      
        }else {
            xhr = new XMLHttpRequest(); 
        }
    } 
    else {
        alert('Votre navigateur ne supporte pas l objet XMLHTTPRequest.');
        return;
    }

    var url = 'https://restcountries.eu/rest/v2/alpha/'+code_pays  ;

    xhr.open('GET',url,false);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');    
    xhr.send();
    var resultat = jQuery.parseJSON(xhr.responseText);
    var colorBIC = document.getElementById('bic');

    if( typeof resultat.status !== 'undefined'  && resultat.status == "404"  ){
        colorBIC.style.border = "1px solid red";
    }
    else{
        colorBIC.style.border = "1px solid green";
    }

}
