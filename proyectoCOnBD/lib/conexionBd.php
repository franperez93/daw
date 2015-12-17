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
    
    
    function usuariosHTMl(){
        
        $resultadohtml=<<<EOF
<table class="table table-striped">
<thead>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
    	<th>Edad</th>
    	<th>Sexo</th>
	</tr>
</thead>
<tbody>
EOF;

        $consulta = "SELECT * FROM usuarios";
        
        if($resultado = $this->conexion->query($consulta)){
            
            while($fila = $resultado->fetch_assoc()){
                $resultadohtml=$resultadohtml."<tr>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["id"];
                    $resultadohtml=$resultadohtml."</td>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["nombre"];
                    $resultadohtml=$resultadohtml."</td>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["apellido"];
                    $resultadohtml=$resultadohtml."</td>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["email"];
                    $resultadohtml=$resultadohtml."</td>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["edad"];
                    $resultadohtml=$resultadohtml."</td>";
                $resultadohtml=$resultadohtml."</tr>";
                 
            }
            
        $resultadohtml=$resultadohtml."</tbody></table>";
        //liberamos la consulta
        $resultado->free();
            
        }
        
        return $resultadohtml;
       
    }
    
    function comprobarUser($correo){
        
        $sql = "SELECT * FROM usuarios WHERE nombre='$correo'";
        $result = $this->conexion->query($sql);
        $fila = $result->fetch_assoc();
           if($fila!=null){
            return $fila;
        }else{
            return false;
        }    
    } 
    
    function insertarUser($nombre,$apellido,$email,$edad){
        
        $sql = "INSERT INTO usuarios (nombre,apellido,email,edad)
        VALUES ('".$nombre."','".$apellido."','".$email."','".$edad."')";
        $this->conexion->query($sql);
        return $mysqli->insert_id;
        
    }
}    

?>




