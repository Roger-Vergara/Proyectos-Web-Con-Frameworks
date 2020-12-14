
window.onload = function(){

var bandera_verificador = false; //Variable global
var correcto = true; //Variable global

//Generando un evento al formulario
document.getElementById("formulario").onsubmit = function(){
	verificar_clave();
	return correcto;
}

/*Esta funcion, verifica si la clave tiene todos los elementos
necesarios para ser una clase en esta página. Ejemplo
	- Que tenga caracteres al menos un caracter especial
	- Que tenga al menos un numero */

function verificar_clave(){

	var clave = document.getElementById("campo_clave").value;
	var verificador_numeros;

	if(clave.includes("@") || clave.includes("_") || clave.includes("$") || clave.includes("-") ||
	   clave.includes("%") || clave.includes("&") || clave.includes("/") || clave.includes("=") ){

		verificador_numeros = tiene_numeros(clave);

		switch(verificador_numeros){
			case 1:
				generar_ventana_informativa("Bienvenido", bandera_verificador);
				correcto = true;
			break;
			case 0:
				generar_ventana_informativa("Debe ingresar al menos un numero", bandera_verificador);
				bandera_verificador = true;
				correcto = false;
			break;
		}

	} else {

		generar_ventana_informativa("La clave debe tener al menos uno de los siguientes caracteres: " + "<br>" +
			"@, %, _, $, /, &, -, =,", bandera_verificador);
		bandera_verificador = true;
		correcto = false;

	}

}


/*Esta función recibe un string y devuelve 1 si se encuentran caracteres 
numéricos y 0 si no se encuentran*/
function tiene_numeros(texto){
   var numeros="0123456789";
   for(i=0; i<texto.length; i++){
      if (numeros.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
}


/*Genera una ventana informativa si la clave no cumple con los
requerimientos*/
function generar_ventana_informativa(Texto, Existe_caja) {

	if(Existe_caja == true) {

		document.getElementById("contenedor_formulario_script").innerHTML = Texto;
		document.getElementById("contenedor_formulario_script").style.position = "relative";
		document.getElementById("contenedor_formulario_script").style.visibility = "visible";

	} else {

		var generar_texto = document.createTextNode(Texto);

		document.getElementById("contenedor_formulario_script").style.position = "relative";
    	document.getElementById("contenedor_formulario_script").style.visibility = "visible";
		document.getElementById("contenedor_formulario_script").style.color = "#fff";
		document.getElementById("contenedor_formulario_script").style.textAlign = "center";
		document.getElementById("contenedor_formulario_script").style.margin = "auto";
		document.getElementById("contenedor_formulario_script").style.padding = "5px";
		document.getElementById("contenedor_formulario_script").style.width = "400px";
		document.getElementById("contenedor_formulario_script").style.background = "black";
		document.getElementById("contenedor_formulario_script").style.opacity = "0.6";
		document.getElementById("contenedor_formulario_script").zIndex = "1000";

		document.getElementById("contenedor_formulario_script").appendChild(generar_texto);
	}
	
	setTimeout(function(){ //Oculta la ventana informativa en 5 segundos
		document.getElementById("contenedor_formulario_script").style.position = "absolute";
		document.getElementById("contenedor_formulario_script").style.visibility = "hidden";
	}, 5000);

}

}

