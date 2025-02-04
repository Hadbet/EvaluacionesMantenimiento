
<?php

$archivo_actual = basename($_SERVER['PHP_SELF']);

$claseEstaticaGlobal = 'active open';
$claseEstatica = 'active';

?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <img src="images/iconoarriba.png" class="mt-3" style="width: 35%;align-self: center;">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Grammer Book</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php if (str_contains($archivo_actual, 'index')) {echo $claseEstaticaGlobal;}?>">
            <a href="index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Inicio</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Mantenimiento</span>
        </li>
        <li class="menu-item <?php if (str_contains($archivo_actual, 'historico')) {echo $claseEstaticaGlobal;}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Administracion</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Usuarios</div>
                    </a>
                </li>
                <li class="menu-item <?php if (str_contains($archivo_actual, 'historico')) {echo $claseEstatica;}?>">
                    <a href="historico.php" class="menu-link">
                        <div data-i18n="Notifications">Historicos</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?php if (str_contains($archivo_actual, 'form-mantenimiento')) {echo $claseEstaticaGlobal;}?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Cuestionarios</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if (str_contains($archivo_actual, 'form-mantenimiento')) {echo $claseEstatica;}?>">
                    <a href="form-mantenimiento.php" class="menu-link" target="_blank">
                        <div data-i18n="Basic">TPM</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Recursos Humanos</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Proximamente</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Seguridad e Higiene</span></li>
        <!-- Forms -->

        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Proximamente</div>
            </a>
        </li>
    </ul>
</aside>