<?php
include_once('db/db_Mantenimiento.php');

$idCuestionario=$_GET['idCuestionario'];
consultaUsuario($idCuestionario);

function consultaUsuario($idCuestionario){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT RegistroEvaluacion.IdRegistroEvaluacion, RegistroEvaluacion.Nomina, RegistroEvaluacion.Nombre, RegistroEvaluacion.FechaRegistro, RegistroEvaluacion.Comentarios, RegistroEvaluacion.IdCuestionario, RegistroEvaluacion.Estatus, RespuestaEvaluacion.IdRespuesta, RespuestaEvaluacion.Respuesta, RespuestaEvaluacion.FolioRergistro, PreguntaEvaluacion.IdPregunta, PreguntaEvaluacion.Pregunta FROM RegistroEvaluacion INNER JOIN RespuestaEvaluacion ON RegistroEvaluacion.IdRegistroEvaluacion = RespuestaEvaluacion.FolioRergistro INNER JOIN PreguntaEvaluacion ON RespuestaEvaluacion.IdPregunta = PreguntaEvaluacion.IdPregunta WHERE RegistroEvaluacion.IdCuestionario = $idCuestionario;");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data"=>$resultado));

}

?>