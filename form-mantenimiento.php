<?php session_start();
$usuario = $_SESSION['IdUser'];
$nombre = $_SESSION['NomUser'];
$tag = $_SESSION['Tag'];
$rol = $_SESSION['Rol']; ?>
<!DOCTYPE html>
<html
        lang="en" class="light-style layout-menu-fixed" dir="ltr"
        data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Grammer Test</title>
    <meta name="description" content=""/>
    <?php require_once('estaticos/estilos.php'); ?>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <?php require_once('estaticos/navegador.php'); ?>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?php require_once('estaticos/profile.php'); ?>
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">EVALUACIÓN MANTENIMIENTO AUTÓNOMO (TEÓRICO Y PRÁCTICO)</h4>
                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Cuestionario</h5>
                                    <small class="text-muted float-end">Buena suerte</small>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">¿Qué significa
                                            TPM?</label>
                                        <input type="text" class="form-control" id="txtPreguntaUno"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Qué es el
                                            mantenimiento autónomo?</label>
                                        <input type="text" class="form-control" id="txtPreguntaDos"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Quién es responsible
                                            de seguir el plan de mantenimiento autónomo?</label>
                                        <input type="text" class="form-control" id="txtPreguntaTres"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Cuáles son las tareas
                                            básicas para conservar en buenas condiciones de mi equipo?</label>
                                        <input type="text" class="form-control" id="txtPreguntaCuatro"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Nombra tres beneficios
                                            al seguir de manera correcta el mantenimiento autónomo</label>
                                        <input type="text" class="form-control" id="txtPreguntaCinco"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Cuándo se necesita
                                            elaborar una orden de trabajo?</label>
                                        <input type="text" class="form-control" id="txtPreguntaSeis"/>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Conoce e identifica la
                                            estructura de los documentos que deberá utilizar para desempeñar sus tareas
                                            de Mantenimiento Autónomo?</label>
                                        <div class="form-check mt-3">
                                            <input name="txtPreguntaSiete" class="form-check-input" type="radio"
                                                   id="defaultRadio1-1" value="OK"/>
                                            <label class="form-check-label" for="defaultRadio1-1"> OK </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="txtPreguntaSiete" class="form-check-input" type="radio"
                                                   id="defaultRadio2-1" value="NO OK"/>
                                            <label class="form-check-label" for="defaultRadio2-1"> NO OK </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Identifica los
                                            componentes frágiles o de mayor atención y cuidado?</label>
                                        <div class="form-check mt-3">
                                            <input name="txtPreguntaOcho" class="form-check-input" type="radio"
                                                   id="defaultRadio1-2" value="OK"/>
                                            <label class="form-check-label" for="defaultRadio1-2"> OK </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="txtPreguntaOcho" class="form-check-input" type="radio"
                                                   id="defaultRadio2-2" value="NO OK"/>
                                            <label class="form-check-label" for="defaultRadio2-2"> NO OK </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿Conoce el EPP que
                                            requiere para desarrollar sus actividades de MA y la manera de reportar en
                                            caso de identificar una condición insegura?</label>
                                        <div class="form-check mt-3">
                                            <input name="txtPreguntaNueve" class="form-check-input" type="radio"
                                                   id="defaultRadio1-3" value="OK"/>
                                            <label class="form-check-label" for="defaultRadio1-3"> OK </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="txtPreguntaNueve" class="form-check-input" type="radio"
                                                   id="defaultRadio2-3" value="NO OK"/>
                                            <label class="form-check-label" for="defaultRadio2-3"> NO OK </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">Al ejecutar las
                                            actividades descritas en las instrucciones de trabajo de Mantenimiento
                                            Autónomo, no presenta dificultades e interpreta las instrucciones de manera
                                            correcta.</label>
                                        <div class="form-check mt-3">
                                            <input name="txtPreguntaDiez" class="form-check-input" type="radio"
                                                   id="defaultRadio1-4" value="OK"/>
                                            <label class="form-check-label" for="defaultRadio1-4"> OK </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="txtPreguntaDiez" class="form-check-input" type="radio"
                                                   id="defaultRadio2-4" value="NO OK"/>
                                            <label class="form-check-label" for="defaultRadio2-4"> NO OK </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-company">¿En un supuesto de avería
                                            realiza el registro de manera correcta siguiendo el flujo de proceso? <span
                                                    style="color: #0f33ff">Falla>> Team leader/Shift leader>>Registro en Check list de MA>>Orden de Trabajo (Mantenimiento)</span></label>
                                        <div class="form-check mt-3">
                                            <input name="txtPreguntaOnce" class="form-check-input" type="radio"
                                                   id="defaultRadio1-5" value="OK"/>
                                            <label class="form-check-label" for="defaultRadio1-5"> OK </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="txtPreguntaOnce" class="form-check-input" type="radio"
                                                   id="defaultRadio2-5" value="NO OK"/>
                                            <label class="form-check-label" for="defaultRadio2-5"> NO OK </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Comentarios</label>
                                        <input type="text" class="form-control" id="txtComentario"/>
                                    </div>

                                    <button class="btn btn-primary" onclick="validarCampos()">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Content -->
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<?php require_once('estaticos/librerias.php'); ?>
<script src="lib/main.js"></script>

<script>

    var cuestionario = getParameterByName("b80bb7740288fda1f201890375a60c8f");

    if (cuestionario === ""){
        window.location.href = "https://grammermx.com/Mantenimiento/Evaluaciones/index.php";
    }

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        var cadena = results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        var arrTerminos = cadena.split(',');
        return arrTerminos[0];
    }

    var cargaAux = '<?php echo $usuario?>';
    var nombreAux = '<?php echo $nombre?>';
    $.getJSON('https://grammermx.com/Mantenimiento/Evaluaciones/dao/daoConsultaCuestionario.php?usuario=' + cargaAux + '&idCuestionario=' + cuestionario, function (data) {
        if (data.data.length !== 0) {
            window.location.href = "https://grammermx.com/Mantenimiento/Evaluaciones/index.php";
        } else {
            for (var i = 0; i < data.data.length; i++) {

            }
        }
    });
</script>

</body>
</html>
