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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mantenimiento /</span> Respuestas</h4>

                    <!-- Basic Bootstrap Table -->

                    <hr class="my-5" />

                    <!-- Responsive Table -->
                    <div class="card">
                        <h5 class="card-header">Cuestionario Mantenimiento Autonomo</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                <tr class="text-nowrap">
                                    <th>#</th>
                                    <th>Nomina</th>
                                    <th>Nombre</th>
                                    <th>Pregunta 1</th>
                                    <th>Pregunta 2</th>
                                    <th>Pregunta 3</th>
                                    <th>Pregunta 4</th>
                                    <th>Pregunta 5</th>
                                    <th>Pregunta 6</th>
                                    <th>Pregunta 7</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                    <td>Table cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr class="my-5" />
                    <div class="card">
                        <h5 class="card-header">Final Mantenimiento Autonomo</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nomina</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Pregunta</th>
                                    <th>Pregunta</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nomina</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th>Pregunta</th>
                                    <th>Pregunta</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!--/ Responsive Table -->
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
    $.ajax({
        url: 'https://grammermx.com/Logistica/Inventario2024/dao/consultaLideres.php?idCuestionario=1', // Reemplaza esto con la URL de tus datos
        dataType: 'json',
        success: function(data) {
            var table = $('#dataTable-1').DataTable({
                data: data.data,
                columns: [
                    { data: 'IdRegistroEvaluacion' },
                    { data: 'Nomina' },
                    { data: 'Nombre' },
                    { data: 'FechaRegistro' },
                    { data: 'Pregunta ' },
                    { data: 'Respuesta' }
                ],
                autoWidth: true,
                "lengthMenu": [
                    [16, 32, 64, -1],
                    [16, 32, 64, "All"]
                ],
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn btn-sm copyButton'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-sm csvButton'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm excelButton'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-sm pdfButton'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-sm printButton'
                    }
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var input = document.createElement("input");
                        input.className = 'form-control form-control-sm';
                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup change clear', function () {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
                }
            });
        }
    });
</script>
</body>
</html>
