function validaP(formulario, nombre){
	elementos = document.getElementById(formulario).elements;
	longitud = document.getElementById(formulario).length;
	for (var i = 0; i < longitud; i++) {
		if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
			return elementos[i].value;
			}
		}
		return null;
}

jQuery(document).ready(
function($) {
$("#verificar").click(function() {
 				var correctas = 0;
                $("#elcuestionario form").each(function (index)
                {
                    indice = index+1;
                    var radioU = validaP("pre"+indice, "pre"+indice);
                    var radioP = $("#pre"+indice).attr("opcion");
                    if(radioU==radioP)
                    {
                        $("#pre"+indice).css("background-color","#CCFF90");
                        correctas +=1;
                        }
                    else
                    {
                        $("#pre"+indice).css("background-color","#FF9E80");
                        
                    }
                    
                });
			alert("Preguntas correctas: "+ correctas);
			
        	}); //verificar2
});
