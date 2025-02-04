<!DOCTYPE html>
<html
        lang="en" class="light-style layout-menu-fixed" dir="ltr"
        data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
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
                    <div class="row" id="carts">

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
    var cargaAux = '00001606';
    $.getJSON('https://grammermx.com/Mantenimiento/Evaluaciones/dao/daoConsultaUser.php?usuario='+cargaAux, function (data) {
        for (var i = 0; i < data.data.length; i++) {

            var idCuestionario = data.data[i].IdCuestionario;
            var nombre = data.data[i].Nombre;
            var area = data.data[i].Area;
            var comentario = data.data[i].Comentario;
            var estiloCart,anuncioCart,botonCart;

            if (comentario === "No"){
                estiloCart="bg-danger";
                anuncioCart="Pendiente";
                botonCart="<a href='https://grammermx.com/Mantenimiento/Evaluaciones/form-mantenimiento.php?b80bb7740288fda1f201890375a60c8f="+idCuestionario+"' class='btn btn-primary '>Realizar</a></div></div></div>";
            }else{
                estiloCart="bg-success";
                anuncioCart="Realizado";
                botonCart = "<p class='card-text'>Evaluación contestada</p> ";
            }

            $('#carts').append("<div class='col-md-6 col-xl-4'> " +
                "<div class='card "+estiloCart+" text-white mb-3'> " +
                "<div class='card-header'>"+anuncioCart+"</div> " +
                "<div class='card-body'> " +
                "<h5 class='card-title text-white'>"+nombre+"</h5> " +
                "<p class='card-text'>"+area+"</p> " + botonCart);
        }
    });
</script>

</body>
</html>
