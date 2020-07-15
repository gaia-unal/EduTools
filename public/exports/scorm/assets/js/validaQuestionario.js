doStart();
var correctas = 0;
var pregun=0;
var nota;

function validaP(nombre){
	var elementos = document.getElementById(nombre).elements;
	var longitud = document.getElementById(nombre).length;
	for (var i = 0; i < longitud; i++) {
		if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
			return elementos[i].value;
		}
	}
	return -1;
}

jQuery(document).ready(function($) {
      
      $("#verificar").click(function() {
        var band=true;
        $("#elcuestionario form").each(function (index){
          indice = index+1;
          var radioP = $("#pre"+indice).attr("opcion");
          if(radioP=="multiplex"){
            if(band){
              band=false;

            $('input[min="1"]').each(function (itera){
              iter = itera+1;
              var op = $("#op"+iter).attr("opcion");
              var val=$("#op"+iter).val();

              if(op==val && op!=undefined){
                correctas +=1;
              }else{
                $("#pre"+iter).css("background-color","#FF9E80");
              }
              if(op!=undefined){pregun+=1;}
            });
          }
            pregun-=1;
          }else{
            var radioU = validaP("pre"+indice);
            if(radioU==radioP){
              $("#pre"+indice).css("background-color","#CCFF90");
              correctas +=1;
            }else{
              $("#pre"+indice).css("background-color","#FF9E80");
            }
          }
          pregun+=1;
            
        });
        displayScore();
        alert("Su nota es: " + nota.toPrecision(2));
        correctas=0;
        pregun=0;
      }); 
});

//ScormFunctions
function RecordTest(nota) {
    ScormProcessSetValue("cmi.core.score.raw", nota);
    ScormProcessSetValue("cmi.core.score.min", "0");
    ScormProcessSetValue("cmi.core.score.max", "5");

    //if we get a test result, set the lesson status to passed/failed instead of completed
    //consider 3 to be passing
    if (nota >= 3) {
        ScormProcessSetValue("cmi.core.lesson_status", "completed");
    } else {
        ScormProcessSetValue("cmi.core.lesson_status", "completed");
    }

    // if (nota >= 3) {
    //     ScormProcessSetValue("cmi.core.lesson_status", "passed");
    // } else {
    //     ScormProcessSetValue("cmi.core.lesson_status", "failed");
    // }
}

function doStart() {
    ScormProcessInitialize();

    //it's a best practice to set the lesson status to incomplete when
    //first launching the course (if the course is not already completed)
    var completionStatus = ScormProcessGetValue("cmi.core.lesson_status");
    if (completionStatus == "not attempted") {
        ScormProcessSetValue("cmi.core.lesson_status", "incomplete");
    }
}

function displayScore() {
    nota = correctas * (5 / pregun); 
    RecordTest(nota);
    ScormProcessSetValue("cmi.core.lesson_status", "completed");
    ScormProcessSetValue("cmi.core.exit", "");
    ScormProcessFinish();
}
