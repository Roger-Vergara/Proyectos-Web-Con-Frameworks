
window.onload = function(){

	alert("Bienvenido a tu perfil de CIV");

	document.getElementById("enviar_a_actualizacion_de_datos").onclick = function(){
		location.href="../data_update/data_update.php";
	}

	document.getElementById("volver_atras").onclick = function(){
		location.href="../homepage/civ_homepage.php";
	}
	
	
}