<?php
#HOLA MUNDooO
require_once "../model/TareaDAO.php";

$funcion = $_GET['fun'];

switch ($funcion){
    case "obtener":
        obtener();
        break;
    case "insertar":
        insertar();
        break;
    case "modificar":
        modificar();
        break;
    case eliminar():
        eliminar();
        break;
}

function obtener(){
    $resultado = (new Tareas())->obtener();
    echo json_encode($resultado);
}

function insertar(){
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];

    $resultado = (new Tareas())->insertar($nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
}

function modificar(){
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $estado = $_POST['estado'];

    $resultado = (new Tareas())->modificar($id, $nombre, $fecha, $hora, $estado);
    echo json_encode($resultado);
}

function eliminar(){
    $id = $_POST['id'];
    $resultado = (new Tareas())->eliminar($id);
    echo json_encode($resultado);
}

?>