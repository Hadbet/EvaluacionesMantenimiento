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

                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-success text-white mb-3">
                                <div class="card-header">Concluido</div>
                                <div class="card-body">
                                    <h5 class="card-title text-white">Custionario Mantenimiento Autonomo</h5>
                                    <p class="card-text">Area Mantenimiento.</p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Ver evaluacion</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card bg-danger text-white mb-3">
                                <div class="card-header">Pendiente</div>
                                <div class="card-body">
                                    <h5 class="card-title text-white">Final Mantenimiento Autonomo</h5>
                                    <p class="card-text">Area Mantenimiento.</p>
                                    <a href="javascript:void(0)" class="btn btn-primary">Realizar</a>
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

</body>
</html>
