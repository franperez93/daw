<?php

    class BaseDatos{
        
        private $host='localhost';
        private $db='pruebaBd';
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
                        $resultadohtml=$resultadohtml.$fila["edad"];
                    $resultadohtml=$resultadohtml."</td>";
                    $resultadohtml=$resultadohtml."<td>";
                        $resultadohtml=$resultadohtml.$fila["sexo"];
                    $resultadohtml=$resultadohtml."</td>";
                $resultadohtml=$resultadohtml."</tr>";
                 
            }
            
        $resultadohtml=$resultadohtml."</tbody></table>";
        //liberamos la consulta
        $resultado->free();
            
        }
        
        return $resultadohtml;
       
    }
    
    function otros(){
        
    $sql = "SELECT nombre FROM usuarios";
    $result = $this->conexion->query($sql);
    
    while($fila = mysqli_fetch_assoc($result)){
        if($fila['nombre']==$_POST['nombre']){
                echo("hola"); 
         }
     }
        
        
    }
    
 }

?>