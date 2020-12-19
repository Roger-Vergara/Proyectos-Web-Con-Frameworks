

window.onload = function(){

	var correcto = false; //Variable global
	var bandera_verificador = false; //Variable global

	//Generando un evento al formulario
	document.getElementById("enviar_datos").onsubmit = function(){	

		correcto = verificar_datos();

		return correcto;

	}

	function verificar_datos(){

		//Datos usuario
		var nombre = document.getElementById("nombre").value;
		var apellido= document.getElementById("apellido").value;
		var nombre_usuario = document.getElementById("nombre_usuario").value;
		var correo = document.getElementById("correo").value;
		var telefono = document.getElementById("telefono").value;
		var fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
		var clave = document.getElementById("clave").value;
		var verificar_clave = document.getElementById("verificar_clave").value;
		var ci = document.getElementById("ci").value;
		var imagen = document.getElementById("imagen").value;

		var verificar_caracteres_telefono = caracteres_validos(telefono, "ABCDERFGHIJKMNÑLOPQRSTUVWXYZabcdefghijkmnlopqrstuvwxyz#*!?¿.,<>|°@%_$/&-=");
		
		var caracteres_clave_1 = caracteres_validos(clave, "0123456789");
		var caracteres_clave_2 = caracteres_validos(clave, "abcdefghijkmnñlopqrstuvwxyz");
		var caracteres_clave_3 = caracteres_validos(clave, "ABCDERFGHIJKMNÑLOPQRSTUVWXYZ");
		var caracteres_clave_4 = caracteres_validos(clave, "@%_$/&-=");

		if(clave == verificar_clave){

			if(telefono.length < 14 && telefono.length > 12){
					
					if(verificar_caracteres_telefono != 1){ //Si no hay caracteres especiales
			
						if(caracteres_clave_1 != 0 && caracteres_clave_2 != 0 && caracteres_clave_3 != 0 && caracteres_clave_4 != 0){ //Si hay caracteres especiales

							if(clave.length >= 8 && clave.length <= 16) {

								if(ci > 0){

									if(correo.includes("@gmail.com") || correo.includes("@hotmail.com")) { 

 										if(imagen.includes(".jpg") || imagen.includes(".png") || imagen.includes(".jpeg") || imagen.includes(".JPG") || imagen.includes(".PNG") || imagen.includes(".JPEG")) { 
											
											if(telefono.includes("+58")) { 

												generar_ventana_informativa("Registrando...", bandera_verificador);
												bandera_verificador = true;
												return true;

											} else {
												generar_ventana_informativa("El teléfono debe tener la notación +58, Ejemplo: +584243446731 a diferencia de 04243446731", bandera_verificador);
												cambiar_color_telefono(); 
												bandera_verificador = true;
												return false;
											}

										} else {
											generar_ventana_informativa("El tipo de archivo no es una imagen, Formatos permitidos: PNG, JPG, JPEG", bandera_verificador);
											cambiar_color_imagen(); 
											bandera_verificador = true;
											return false;
										}

									} else {
										generar_ventana_informativa("El corréo debe ser @gmail.com o @hotmail.com", bandera_verificador);
										cambiar_color_correo(); 
										bandera_verificador = true;
										return false;
									}	

								} else {

									generar_ventana_informativa("Cédula invalida", bandera_verificador);
									cambiar_color_ci();
									bandera_verificador = true;
									return false;

								}

							}else{

								generar_ventana_informativa("La clave debe tener como minimo 8 caracteres y maximo 16", bandera_verificador);
								bandera_verificador = true;
								return false;

							}

						} else {

							generar_ventana_informativa("La contraseña, debe tener al menos un numero, una letra en minuscula, una letra mayuscula y al menos uno de los siguientes caracteres: @, %, _, $, /, &, -, =,", bandera_verificador);
							cambiar_color_campos_clave();
							bandera_verificador = true;
							return false;

						}

					} else {
						generar_ventana_informativa("El telefono tiene caracteres invalidos", bandera_verificador);
						cambiar_color_telefono();
						bandera_verificador = true;
						return false;
					}
				

			} else {
				generar_ventana_informativa("Teléfono Invalido, verifique que el teléfono tiene la notación +58, Ejemplo +584243446731", bandera_verificador);
				cambiar_color_telefono();
				bandera_verificador = true;
				return false;
			}
			

		} else {

			generar_ventana_informativa("Las contraseñas no coinciden", bandera_verificador);
			cambiar_color_campos_clave();
			bandera_verificador = true;
			return false;
						
		}

 }//verificar datos

 function caracteres_validos(dato_investigar, caracteres_validos) {
	var numeros = caracteres_validos;
	var campo = dato_investigar;
   	for(i=0; i<campo.length; i++){
      	if (numeros.indexOf(campo.charAt(i),0)!=-1){
       		return 1;
   		}
   	}
   	return 0;
}

	/*Genera una ventana informativa si los datos no cumplen con los
	requerimientos*/
function generar_ventana_informativa(Texto, Existe_caja) {

	if(Existe_caja == true) {

		document.getElementById("errores").innerHTML = Texto;
		document.getElementById("errores").style.position = "relative";
		document.getElementById("errores").style.visibility = "visible";

	} else {

		var generar_texto = document.createTextNode(Texto);

		document.getElementById("errores").style.position = "relative";
    	document.getElementById("errores").style.visibility = "visible";
		document.getElementById("errores").style.color = "#fff";
		document.getElementById("errores").style.textAlign = "center";
		document.getElementById("errores").style.margin = "auto";
		document.getElementById("errores").style.padding = "5px";
		document.getElementById("errores").style.width = "400px";
		document.getElementById("errores").style.background = "black";
		document.getElementById("errores").style.opacity = "0.6";
			document.getElementById("errores").zIndex = "1000";

		document.getElementById("errores").appendChild(generar_texto);
	}
	
	setTimeout(function(){ //Oculta la ventana informativa en 5 segundos
		document.getElementById("errores").style.position = "absolute";
		document.getElementById("errores").style.visibility = "hidden";
	}, 5000);

}

function cambiar_color_campos_clave(){
	document.getElementById("clave").style.border = "3px solid red";
	document.getElementById("verificar_clave").style.border = "3px solid red";
	setTimeout(function(){
		document.getElementById("clave").style.border = "0 solid black";
		document.getElementById("verificar_clave").style.border = "0 solid black";
	}, 5000);
}

function cambiar_color_telefono(){
	document.getElementById("telefono").style.border = "3px solid red";
	setTimeout(function(){
		document.getElementById("telefono").style.border = "0 solid black";
}, 5000);

}

function cambiar_color_ci(){
	document.getElementById("ci").style.border = "3px solid red";
	setTimeout(function(){
		document.getElementById("ci").style.border = "0 solid black";
}, 5000);

}

function cambiar_color_correo(){
	document.getElementById("correo").style.border = "3px solid red";
	setTimeout(function(){
		document.getElementById("correo").style.border = "0 solid black";
}, 5000);

}

function cambiar_color_imagen(){
	document.getElementById("imagen").style.border = "3px solid red";
	setTimeout(function(){
		document.getElementById("imagen").style.border = "0 solid black";
}, 5000);

}

}//Funcion Completa