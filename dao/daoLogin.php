<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'daoVerificacion.php';
require 'daoVerificacionTag.php';

if(isset($_POST['btnIniciar'])){

    session_start();

    $nomina = $_POST['nomina'];
    $tag=$_POST['tag'];

    if (strlen($nomina) == 1) { $nomina = "0000000".$nomina; }
    if (strlen($nomina) == 2) { $nomina = "000000".$nomina; }
    if (strlen($nomina) == 3) { $nomina = "00000".$nomina; }
    if (strlen($nomina) == 4) { $nomina = "0000".$nomina; }
    if (strlen($nomina) == 5) { $nomina = "000".$nomina; }
    if (strlen($nomina) == 6) { $nomina = "00".$nomina; }
    if (strlen($nomina) == 7) { $nomina = "0".$nomina; }

    try {
        $administrador = cliente($nomina);
        $userData = verificacionUsuario($nomina, $tag);

        if ($userData) {
            $_SESSION['IdUser'] = $userData['IdUser'];
            $_SESSION['NomUser'] = $userData['NomUser'];
            $_SESSION['Tag'] = $userData['IdTag'];

            if ($administrador == 1){
                $_SESSION['Rol'] = 1;
            } else {
                $_SESSION['Rol'] = 2;
            }
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=..\index.php'>";
        } else {
            // Handle the case when userData is not valid
        }
    } catch (Exception $e) {
        // Handle the exception
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

?>