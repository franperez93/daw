<?php

    class BaseDatos{
        
        private $host='localhost';
        private $db='MathDice';
        private $user='franperez93';
        private $pass='';
        private $conexion;
        
    function __construct(){
        $this->conexion = new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
   
    function compruebaConex(){
         if($this->conexion->connect_errno){
            echo "Fallo al conectar a mysql: (" . $this->conexion->connect_errno . ") " .$this->conexion->connect_error;
        }
    }
    
    function comprobarUser($correo){
    
        $sql = "SELECT * FROM usuarios WHERE email='$correo'";
        $result = $this->conexion->query($sql);
        $fila= $result->fetch_assoc();
           if($fila!=null){
            return $fila;
        }else{
            return false;
        }    
    } 
    
     function prueba($nombre){
    
        $sql = "SELECT nombre FROM usuarios WHERE nombre='$nombre'";
        $result = $this->conexion->query($sql);
        $fila= $result->fetch_assoc();
            return $fila;
        
           
           
    } 
    
    function insertarUser($nombre,$apellido,$email,$edad){
        
        $sql = "INSERT INTO usuarios (nombre,apellido,email,edad)
        VALUES ('".$nombre."','".$apellido."','".$email."','".$edad."')";
        $this->conexion->query($sql);
        return $mysqli->insert_id;
        
    }
}    

?>




