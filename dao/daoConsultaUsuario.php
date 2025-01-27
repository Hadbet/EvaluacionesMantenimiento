<?php
include_once('db.php');

$usuario=$_GET['usuario'];
consultaUsuario($usuario);

function consultaUsuario($usuario){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM Empleados WHERE IdUser='$usuario'");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data"=>$resultado));

}

?>