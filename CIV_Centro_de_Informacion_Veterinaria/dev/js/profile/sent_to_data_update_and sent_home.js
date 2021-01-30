
window.onload = function(){

	document.getElementById("enviar_a_actualizacion_de_datos").onclick = function(){
		location.href="../data_update/data_update.php";
	}

	document.getElementById("volver_atras").onclick = function(){
		location.href="../homepage/civ_homepage.php";
	}

	document.getElementById("formulario").onsubmit = function(){
		var opcion = confirm("¿Estas seguro que deseas borrar tu cuenta?" + "\n" +
		"Esta opción no se puede deshacer");

		if(opcion == true){
			return true;
		} else {
			return false;
		}

	}
	
	
}