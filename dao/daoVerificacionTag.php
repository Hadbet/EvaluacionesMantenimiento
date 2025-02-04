<?php
include_once('db/db_Empleado.php');

function verificacionUsuario($nomina,$tag){
    $con = new LocalConector();
    $conex=$con->conectar();

    $datos = mysqli_query($conex, "SELECT * FROM Empleados WHERE `IdUser`='$nomina' and `IdTag` = '$tag'");
    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    return $resultado[0]; // return the first row
}

?>