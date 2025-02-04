<?php
include_once('db/db_Mantenimiento.php');

$usuario=$_GET['usuario'];
$idCuestionario=$_GET['idCuestionario'];
consultaUsuario($usuario,$idCuestionario);

function consultaUsuario($usuario,$idCuestionario){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `RegistroEvaluacion` WHERE `Nomina` = '$usuario' and `IdCuestionario` = '$idCuestionario'");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data"=>$resultado));

}

?>