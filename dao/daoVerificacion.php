<?php

include_once('db/db_Mantenimiento.php');
function cliente($Nomina){
    $con = new LocalConector();
    $conexion=$con->conectar();
    $consP="SELECT `Nomina`, `Nombre`, `Password`, `Rol` FROM `UsuarioEvaluacion` WHERE `Nomina` = '$Nomina';";
    $rsconsPro=mysqli_query($conexion,$consP);
    mysqli_close($conexion);
    $userData = array();

    if(mysqli_num_rows($rsconsPro) == 1){
        return 1;
    }
    else{
        return 0;
    }
}


?>