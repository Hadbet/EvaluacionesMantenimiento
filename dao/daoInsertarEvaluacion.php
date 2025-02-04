<?php
include_once('db/db_Mantenimiento.php');

$nombre = $_POST['nombre'];
$nomina = $_POST['nomina'];
$comentarios = $_POST['comentarios'];

$respuestaUno = $_POST['respuestaUno'];
$respuestaDos = $_POST['respuestaDos'];
$respuestaTres = $_POST['respuestaTres'];
$respuestaCuatro = $_POST['respuestaCuatro'];
$respuestaCinco = $_POST['respuestaCinco'];
$respuestaSeis = $_POST['respuestaSeis'];
$respuestaSiete = $_POST['respuestaSiete'];
$respuestaOcho = $_POST['respuestaOcho'];
$respuestaNueve = $_POST['respuestaNueve'];
$respuestaDiez = $_POST['respuestaDiez'];
$respuestaOnce = $_POST['respuestaOnce'];

try {
    $con = new LocalConector();
    $conex = $con->conectar();

    $Object = new DateTime();
    $Object->setTimezone(new DateTimeZone('America/Denver'));
    $DateAndTime = $Object->format("Y/m/d h:i:s");

    $stmt = $conex->prepare("INSERT INTO `RegistroEvaluacion`(`Nomina`, `Nombre`, `FechaRegistro`, `Comentarios`, `Estatus`) VALUES (?,?,?,?,1)");
    $stmt->bind_param("ssss", $nomina, $nombre, $DateAndTime, $comentarios);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {

        $idGenerado = $conex->insert_id;
        $respuestas = array($respuestaUno, $respuestaDos, $respuestaTres, $respuestaCuatro, $respuestaCinco, $respuestaSeis, $respuestaSiete, $respuestaOcho, $respuestaNueve, $respuestaDiez, $respuestaOnce);

        foreach ($respuestas as $index => $respuesta) {
            $index++;
            $stmt = $conex->prepare("INSERT INTO `RespuestaEvaluacion`(`IdPregunta`,`Respuesta`, `FolioRergistro`) VALUES (?,?,?)");
            $stmt->bind_param("ssi", $index,$respuesta, $idGenerado);
            $stmt->execute();
        }

        if ($stmt->affected_rows > 0) {
            echo json_encode(["success" => true, "message" => "Transaccion exitosa"]);
        } else {
            echo json_encode(["success" => false, "message" => "No se pudo insertar/actualizar el registro"]);
        }

    } else {
        echo json_encode(["success" => false, "message" => "No se pudo insertar el registro de evaluacion"]);
    }

    $stmt->close();
    $conex->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}

?>
