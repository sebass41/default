<?php

require_once "../conexion/Conexion.php";

class Tareas{

    function obtener(){
        
        $connection = conection();
        $sql = "SELECT * FROM tareas";
        $respuesta = $connection->query($sql);
        $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $tareas;
    }

    function insertar($nombre, $fecha, $hora, $estado){
        $connection = conection();
        $sql = "INSERT INTO tareas VALUES(0, '$nombre', '$fecha', '$hora', $estado)";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    function modificar ($id, $nombre, $fecha, $hora, $estado){
        $connection = conection();
        $sql = "UPDATE tareas SET nombre='$nombre',fecha='$fecha',hora='$hora',estado = $estado WHERE id = $id";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

    function eliminar($id){
        $connection = conection();
        $sql = "DELETE FROM tareas WHERE id = $id";
        $respuesta = $connection->query($sql);
        return $respuesta;
    }
}

?>