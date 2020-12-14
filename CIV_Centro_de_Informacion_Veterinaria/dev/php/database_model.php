<?php

class database_model {

    public $host = "carro";
    private $db;
    private $user;
    private $password;
    private $charset;

    public function database_model(){ //Contructor mas entendible
        $this->host     = "localhost";
        $this->db       = "civ_visitante";
        $this->user     = "root";
        $this->password = "";
        $this->charset  = 'utf8';
    }

    function connect(){
    
        try{
            //Conectando los valores
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

            //Colocando opciones
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            //Creando la conexion
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            //Retornando la conexion
            return $pdo;

        } catch(PDOException $e) {

            print_r("Error de conexion" . $e->getMessage());

            echo("Error de conexion" . $e->getMessage());

        }   
    }
}


?>