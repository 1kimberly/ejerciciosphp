<?php

class Database {
    public  $db; // controladores db
    private static $dns = "mysql:host=localhost;dbname=prueba"; //url del BD
    private static $user = "root"; // usuario de la conexion
    private static $pass = "" ; // contraseña del usuario 
    private static $instance; //instrancia de la conexion

    public function __construct(){
        $this->db = new PDO(self::$dns, self::$user, self::$pass);
        
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            $object = __CLASS__;
            self::$instance = new $object;
        }
       return self::$instance;
    }


    public function insertar($nombre, $apellido, $edad, $email){
        try {
            $conexion = Database::getInstance();
            $query=$conexion->db->prepare("INSERT INTO persona (nombre,apellido,email,edad) VALUES (:nombre,:apellido,:email,:edad)" );
            $query->execute(
            array(

                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':email' => $email,
                ':edad' => $edad
            )
            );
            return  1 ; // retorna 1 si fue exitoso
       
        } catch (PDOException  $error) {
            echo $error;
            return 0; //retorna 0 si falla 
        } 
        
    
    }
    
    
}

?>