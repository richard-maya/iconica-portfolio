<!-- FOOTER
================================================== -->
<footer class="w3-container w3-theme-dark">
    <nav class="w3-section">
        <div class="w3-row-padding">
            <div class="w3-col m3">
                <picture>
                    <source srcset="https://iconica.mx/assets/ui/footer-logo.webp" type="image/webp" alt="iconica-studio-logo" class="w3-image">
                    <source srcset="https://iconica.mx/assets/ui/footer-logo.png" type="image/png" alt="iconica-studio-logo" class="w3-image">
                    <img src="https://iconica.mx/assets/ui/footer-logo.png" alt="iconica-studio-logo" class="w3-image">
                </picture>
                <p class="mt-1 w3-center">
                    <a href="https://grupobalbek.com" title="empresa-afiliada-grupo-corporativo-balbek" target="_blank" rel="external" class="w3-margin-right no-deco">
                        <img alt="empresa-afiliada-grupo-corporativo-balbek" width="88" height="31" src="https://iconica.mx/assets/ui/empresa-afiliada-grupo-corporativo-balbek.svg">
                    </a>
                    <a href="https://jigsaw.w3.org/css-validator/check/referer" title="w3-css-validator" target="_blank" rel="external" class="no-deco">
                        <img alt="Valid CSS!" width="88" height="31" src="https://jigsaw.w3.org/css-validator/images/vcss">
                    </a>
                </p>
            </div>
            <div class="w3-col s6 l3">
                <ul class="w3-ul w3-small">
                    <li><h6 class="mb-0">General</h6></li>
                    <li><a href="/" title="iconica-studio-diseno-grafico" class="no-deco">Inicio</a></li>
                    <li><a href="https://iconica.mx/trabajos" title="iconica-studio-trabajos-diseno" class="no-deco">Trabajos</a></li>
                    <li><a href="https://iconica.mx/recursos" title="recursos-gratuitos-emprendedores-empresarios" class="no-deco">Recursos</a></li>
                    <li><a href="https://iconica.mx/soporte" title="iconica-studio-atencion-clientes" class="no-deco">Soporte</a></li>
                    <li><a href="https://iconica.mx/iconica-studio-diseno-grafico.html" title="iconica-estudio-diseno-grafico" class="no-deco">Acerca</a></li>
                    <li><a href="https://iconica.mx/index.html#contacto" title="iconica-studio-contacto" class="no-deco">Contacto</a></li>
                </ul>
            </div>
            <div class="w3-col s6 l3">
                <ul class="w3-ul w3-small">
                    <li><h6 class="mb-0">Servicios</h6></li>
                    <li><a href="https://iconica.mx/diseno-logotipos-imagen-corporativa-toluca-metepec.html" title="diseno-logotipos-imagen-corporativa-toluca-metepec" class="no-deco">Imagen corporativa</a></li>
                    <li><a href="https://iconica.mx/agencia-marketing-digital-toluca-metepec.html" title="agencia-marketing-digital-toluca-metepec" class="no-deco">Marketing digital</a></li>
                    <li><a href="https://iconica.mx/videos-corporativos-toluca-metepec.html" title="videos-corporativos-toluca-metepec" class="no-deco">Videos corporativos</a></li>
                    <li><a href="https://iconica.mx/diseno-paginas-web-toluca-metepec.html" title="diseno-paginas-web-toluca-metepec" class="no-deco">Diseño web</a></li>
                </ul>
            </div>
            <div class="w3-col l3">
                <ul class="w3-ul w3-small">
                    <li><h6 class="mb-0">Síguenos</h6></li>
                    <li>
                        <a href="https://facebook.com/iconicamx" class="no-deco w3-padding-small" title="iconica-studio-facebook" rel="external" target="_blank">
                            <img src="https://iconica.mx/assets/ui/facebook.svg" alt="iconica-studio-facebook" width="35" height="35">
                        </a>
                        <a href="https://twitter.com/iconicamx" class="no-deco w3-padding-small" title="iconica-studio-twitter" rel="external" target="_blank">
                            <img src="https://iconica.mx/assets/ui/twitter.svg" alt="iconica-studio-twitter" width="35" height="35">
                        </a>
                        <a href="https://instagram.com/iconicamx" class="no-deco w3-padding-small" title="iconica-studio-instagram" rel="external" target="_blank">
                            <img src="https://iconica.mx/assets/ui/instagram.svg" alt="iconica-studio-instagram" width="35" height="35">
                        </a>
                        <a href="https://www.linkedin.com/company/iconica-mx" class="no-deco w3-padding-small" title="iconica-studio-linkedin" rel="external" target="_blank">
                            <img src="https://iconica.mx/assets/ui/linked-in.svg" alt="iconica-studio-linkedin" width="35" height="35">
                        </a>
                        <a href="https://behance.net/iconicamx" class="no-deco w3-padding-small" title="iconica-studio-behance" rel="external" target="_blank">
                            <img src="https://iconica.mx/assets/ui/behance.svg" alt="iconica-studio-behance" width="35" height="35">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="w3-container">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <p class="w3-medium"><span class="semplicita-font">&copy;</span> 2020 ICONICA STUDIO. Todos los derechos reservados.</p>
            </div>
            <div class="w3-col m6 w3-right-align">
                <p class="w3-medium"><a href="https://iconica.mx/aviso-privacidad.html" title="aviso-privacidad-iconica-studio" class="px-1">Aviso de Privacidad</a><a href="https://iconica.mx/sitemap.html" title="mapa-del-sitio-iconica-studio">Mapa del sitio</a></p>
            </div>
        </div>
    </div>
</footer>
	

<!-- MICRODATA
================================================== -->
<div itemscope itemtype="http://schema.org/CreativeWork">
    <img itemprop="image" alt="
    <?php
            if ( is_front_page()) {
                echo 'Portafolio de Trabajos | Diseño Gráfico | Iconica Studio';
            } elseif ( is_single() ) {
                wp_title('');
            } else {
                wp_title(''); echo '| Iconica Studio';
            }
        ?>" src="assets/img/portfolio/iconica-studio-portafolio-trabajos.png" />
	<span itemprop="name">
        <?php
            if ( is_front_page()) {
                echo 'Portafolio de Trabajos | Diseño Gráfico Toluca';
            } elseif ( is_single() ) {
                wp_title('');
            } else {
                wp_title(''); echo '| Iconica Studio';
            }
        ?>
    </span>
	<span itemprop="author">Iconica Studio</span>,
</div>
	

<?php wp_footer(); ?>

<script>
function w3_open() {document.getElementById("mySidebar").style.display = "block";}
function w3_close() {document.getElementById("mySidebar").style.display = "none";}
</script>
</body>
</html>