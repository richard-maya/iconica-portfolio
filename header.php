<!doctype html>
<html lang="es-MX">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="copyright" content="Copyright © 2020 Iconica Studio">
    <meta name="p:domain_verify" content="e3eb296082b65a37cf31940943bcf7b9" />
	<link rel="shortcut icon" href="https://iconica.mx/favicon.ico">

    <!-- GOOGLE TAG MANAGER
    ================================================== -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KKLXD39');</script>
	
	<!-- TITLE
    ================================================== -->
    <title>
        <?php
            if ( is_front_page()) {
                echo 'Portafolio de Trabajos | Diseño Gráfico Toluca';
            } elseif ( is_single() ) {
                wp_title('');
            } else {
                wp_title(''); echo '| Iconica Studio';
            }
        ?>
    </title>
	
	<!-- SEO INFO
    ================================================== -->
    <meta name="description" content="
        <?php
            if ( is_front_page()) {
                echo 'Portafolio de Trabajos | Diseño Gráfico Toluca';
            } elseif ( is_single() ) {
                wp_title('');
            } else {
                wp_title(''); echo '| Iconica Studio';
            }
        ?>
    ">
    <meta name="keywords" content="iconica studio trabajos, iconica studio toluca, iconica studio metepec">
    <meta name="author" content="Iconica Studio">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKLXD39" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- NAVBAR
================================================== -->
<nav class="navbar w3-top w3-card">
    <?php $top_banner = get_field('top_banner', 'option'); 
        if( $top_banner['show_banner'] == true ) { ?>
            <div class="w3-bar w3-center w3-theme-d1">
                <p class="w3-medium">
                    <a href="<?php echo $top_banner['banner_link']; ?>" title="<?php echo $top_banner['banner_alt_text']; ?>"><?php echo $top_banner['banner_text']; ?></a>
                </p>
            </div>
    <?php } ?>

    <div class="w3-bar w3-large">
        <a href="/" class="w3-bar-item w3-button menu-logo">
            <picture>
                <source srcset="https://iconica.mx/assets/ui/menu-logo.webp" type="image/webp" alt="iconica-studio-logo" width="40" height="40">
                <source srcset="https://iconica.mx/assets/ui/menu-logo.png" type="image/png" alt="iconica-studio-logo" width="40" height="40">
                <img src="https://iconica.mx/assets/ui/menu-logo.png" alt="iconica-studio-logo" width="40" height="40">
            </picture>
        </a>
        <a href="/" class="w3-bar-item w3-button" title="iconica-studio-diseno-grafico">inicio</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">servicios ˯</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
                <a href="https://iconica.mx/diseno-logotipos-imagen-corporativa-toluca-metepec.html" class="w3-bar-item w3-button" title="diseno-logotipos-imagen-corporativa-toluca-metepec">imagen corporativa</a>
                <a href="https://iconica.mx/agencia-marketing-digital-toluca-metepec.html" class="w3-bar-item w3-button" title="agencia-marketing-digital-toluca-metepec">marketing digital</a>
                <a href="https://iconica.mx/videos-corporativos-toluca-metepec.html" class="w3-bar-item w3-button" title="videos-corporativos-toluca-metepec">videos corporativos</a>
                <a href="https://iconica.mx/diseno-paginas-web-toluca-metepec.html" class="w3-bar-item w3-button" title="diseno-paginas-web-toluca-metepec">diseño web</a>
            </div>
        </div>
        <a href="https://iconica.mx/trabajos" class="w3-bar-item w3-button w3-text-theme" title="iconica-studio-trabajos-diseno">trabajos</a>
        <a href="https://iconica.mx/blog" class="w3-bar-item w3-button" title="blog-para-emprendedores">blog</a>
        <a href="https://iconica.mx/recursos" class="w3-bar-item w3-button" title="recursos-gratuitos-emprendedores-empresarios">recursos</a>
        <a href="https://iconica.mx/soporte" class="w3-bar-item w3-button" title="iconica-studio-atencion-clientes">soporte</a>
        <a href="https://iconica.mx/iconica-studio-diseno-grafico.html" class="w3-bar-item w3-button" title="iconica-estudio-diseno-grafico">acerca</a>
        <a href="https://iconica.mx/index.html#contacto" class="w3-bar-item w3-button" title="iconica-studio-contacto">contacto</a>
    </div>
</nav>

<!-- Sidebar -->
<div class="w3-bar w3-large navbar-mobile w3-top w3-card">
    <a href="/" class="w3-bar-item w3-button menu-logo" title="iconica-studio-diseno-grafico">
        <picture>
            <source srcset="https://iconica.mx/assets/ui/menu-logo.webp" type="image/webp" alt="iconica-studio-logo" width="40" height="40">
            <source srcset="https://iconica.mx/assets/ui/menu-logo.png" type="image/png" alt="iconica-studio-logo" width="40" height="40">
            <img src="https://iconica.mx/assets/ui/menu-logo.png" alt="iconica-studio-logo" width="40" height="40">
        </picture>
    </a>
    <button class="w3-bar-item w3-button menu-logo navbar-menu-button" onclick="w3_open()">
        <img src="https://iconica.mx/assets/ui/menu.svg" alt="menu" width="40" height="40">
    </button>
</div>
<nav class="w3-sidebar w3-bar-block w3-border-left" style="display: none;" id="mySidebar">
    <button onclick="w3_close()" class="w3-bar-item w3-button menu-logo">
        <img src="https://iconica.mx/assets/ui/error.svg" alt="close-menu" width="40" height="40">
    </button>
    <a href="/" class="w3-bar-item w3-button" title="iconica-studio-diseno-grafico">inicio</a>
    <div class="w3-dropdown-hover">
        <button class="w3-button">servicios ˯</button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="https://iconica.mx/diseno-logotipos-imagen-corporativa-toluca-metepec.html" class="w3-bar-item w3-button" title="diseno-logotipos-imagen-corporativa-toluca-metepec">imagen corporativa</a>
            <a href="https://iconica.mx/agencia-marketing-digital-toluca-metepec.html" class="w3-bar-item w3-button" title="agencia-marketing-digital-toluca-metepec">marketing digital</a>
            <a href="https://iconica.mx/videos-corporativos-toluca-metepec.html" class="w3-bar-item w3-button" title="videos-corporativos-toluca-metepec">videos corporativos</a>
            <a href="https://iconica.mx/diseno-paginas-web-toluca-metepec.html" class="w3-bar-item w3-button" title="diseno-paginas-web-toluca-metepec">diseño web</a>
        </div>
    </div>
    <a href="https://iconica.mx/trabajos" class="w3-bar-item w3-button w3-text-theme" title="iconica-studio-trabajos-diseno">trabajos</a>
    <a href="https://iconica.mx/blog" class="w3-bar-item w3-button w3-text-theme" title="blog-para-emprendedores">blog</a>
    <a href="https://iconica.mx/recursos" class="w3-bar-item w3-button" title="recursos-gratuitos-emprendedores-empresarios">recursos</a>
    <a href="https://iconica.mx/soporte" class="w3-bar-item w3-button" title="iconica-studio-atencion-clientes">soporte</a>
    <a href="https://iconica.mx/iconica-studio-diseno-grafico.html" class="w3-bar-item w3-button" title="iconica-estudio-diseno-grafico">acerca</a>
    <a href="https://iconica.mx/index.html#contacto" class="w3-bar-item w3-button" title="iconica-studio-contacto">contacto</a>
</nav>