<?php
include_once('db/db_Mantenimiento.php');

consultaUsuario();

function consultaUsuario(){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM `UsuarioEvaluacion`");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data"=>$resultado));

}

?>