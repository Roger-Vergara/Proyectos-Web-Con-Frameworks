<?php  

include ("database_model.php");

class controller {

	function controller (){ 
		
		#De por el momento no tiene utilidad (SOLO POR AHORA)

	}

	function insertar_datos(){

		try {

			$base_datos = new database_model(); //Instanciando la base de datos
			$pdo = $base_datos->connect(); //Generando la conexion
			$numero_registro=0;

			$nombre_imagen = $_FILES['imagen']['name'];
			$tipo_imagen = $_FILES['imagen']['type'];
			$tamano = $_FILES['imagen']['size'];

			//Xampp no permite subir archivos mas de 2 megas
			if($tamano <= 1000000){
				if($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/jpeg"){

					//Ruta de la carpeta destino de la imagen en el servidor
					$carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'/CIV_centro_de_informacion_veterinaria/dev/tmp_files/';

					echo $carpeta_destino;

					//Moviendo la imagen de directorio temporal al escogido
					move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

					$consulta = "INSERT INTO datos_basicos (ci,nombre,apellido,nombre_usuario,correo,fecha_nacimiento,telefono,clave,imagen)  VALUES (:ci, :nombre, :apellido, :nombre_usuario, :correo, :fecha_nacimiento, :telefono, :clave, '$nombre_imagen')";
			
					$resultado = $pdo->prepare($consulta);

					$ci = htmlentities(addslashes($_POST['ci'])); 
					$nombre = htmlentities(addslashes($_POST['nombre']));
					$apellido = htmlentities(addslashes($_POST['apellido'])); 
					$nombre_usuario = htmlentities(addslashes($_POST['nombre_usuario']));
					$correo = htmlentities(addslashes($_POST['correo']));
					$fecha_nacimiento = htmlentities(addslashes($_POST['fecha_nacimiento']));
					$telefono = htmlentities(addslashes($_POST['telefono']));
					$clave = htmlentities(addslashes($_POST['clave']));

					$resultado->bindValue(":ci", $ci); 
					$resultado->bindValue(":nombre", $nombre);
					$resultado->bindValue(":apellido", $apellido); 
					$resultado->bindValue(":nombre_usuario", $nombre_usuario);
					$resultado->bindValue(":correo", $correo); 
					$resultado->bindValue(":fecha_nacimiento", $fecha_nacimiento);
					$resultado->bindValue(":telefono", $telefono);
					$resultado->bindValue(":clave", $clave);

					$resultado->execute();
					$numero_registro = $resultado->rowCount();

				} else {
					echo "Los tipos de archivo permitidos en imagenes son: JPG, JPEG y PNG"."<br>";
					die();
				}	
			} else {
				echo "Tamaño de imagen muy grande"."<br>";
			}
			

			if($numero_registro != 0){
				
				header("Location: ../views/login.php");

			} else {

				echo "No hay registro que insertar"."<br>";

			}
		
		} catch (Exception $e) {

			die($e->getMessage());

		}

	}


	function leer_datos($campo_buscar){

		try {

			$base_datos = new database_model(); 
			$pdo = $base_datos->connect(); 

			$consulta = "SELECT * FROM datos_basicos WHERE ci =".$_SESSION["visitante"];

			foreach ($pdo->query($consulta) as $row) {

				return $row[$campo_buscar];
        		
    		}

		} catch(Exception $e){
			die($e->getMessage());
			return null;
		}

	}

	function actualizar_datos(){
		#En proceso...
	}

	function borrar_datos(){
		#En proceso...
	}

	function verificar_existencia_usuario(){

		try {

			$base_datos = new database_model();
			$pdo = $base_datos->connect();

			$consulta = "SELECT * FROM datos_basicos WHERE ci = :ciT AND clave = :claveT";
			$resultado = $pdo->prepare($consulta);

			$ciT=htmlentities(addslashes($_POST['ciT'])); 
			$claveT=htmlentities(addslashes($_POST['claveT']));

			$resultado->bindValue(":ciT", $ciT); 
			$resultado->bindValue(":claveT", $claveT);
			$resultado->execute();

			$numero_registro = $resultado->rowCount();

			if($numero_registro != 0){

				session_start(); 
				$_SESSION["visitante"] = $_POST["ciT"];

				header("Location: ../views/homepage/civ_homepage.php");

			} else {

				header("Location: ../views/login.php");
			}

		} catch(Exception $e){
			die($e->getMessage());
		}

	}


}


?>