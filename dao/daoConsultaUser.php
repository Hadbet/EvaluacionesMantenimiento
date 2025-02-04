<?php
include_once('db/db_Mantenimiento.php');

$usuario=$_GET['usuario'];
consultaUsuario($usuario);

function consultaUsuario($usuario){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT Cuestionario.IdCuestionario, Cuestionario.Nombre, Cuestionario.Area, Cuestionario.Estatus, 
       IF(RegistroEvaluacion.IdRegistroEvaluacion IS NULL, 'No', 'Sí') AS Comentario 
       FROM Cuestionario LEFT JOIN RegistroEvaluacion ON Cuestionario.IdCuestionario = RegistroEvaluacion.IdCuestionario AND RegistroEvaluacion.Nomina = '$usuario';");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data"=>$resultado));

}

?>