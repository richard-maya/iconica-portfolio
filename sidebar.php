<aside>
    <h6 class="w3-text-theme">Fecha:</h6>
    <p><?php echo get_the_date('F j, Y'); ?></p>
    <h6 class="w3-text-theme">Categoría:</h6>
    <p><?php the_category(', '); ?></p>
    <h6 class="w3-text-theme">Cliente:</h6>
    <p><?php the_field('cliente'); ?></p>
    <h6 class="w3-text-theme">Descripción:</h6>
    <p class="w3-margin-bottom"><?php the_field('descripcion'); ?></p>

    <hr style="margin:3rem 0px;">

    <?php if(get_field('branding')){ ?>
        <p class="w3-margin-top w3-margin-bottom" style="font-size: 140%">Conoce más sobre nuestro servicio de <a href="https://iconica.mx/diseno-logotipos-imagen-corporativa-toluca-metepec.html" title="diseno-logotipos-imagen-corporativa-toluca-metepec" rel="bookmark" class="w3-text-theme">Diseño de Identidad Corporativa.</a></p>
    <?php } ?>
    <?php if(get_field('marketing')){ ?>
        <p class="w3-margin-top w3-margin-bottom" style="font-size: 140%">Conoce más sobre nuestro servicio de <a href="https://iconica.mx/agencia-marketing-digital-toluca-metepec.html" title="agencia-marketing-digital-toluca-metepec" rel="bookmark" class="w3-text-theme">Marketing Digital.</a></p>
    <?php } ?>
    <?php if(get_field('video')){ ?>
        <p class="w3-margin-top w3-margin-bottom" style="font-size: 140%">Conoce más sobre nuestro servicio de <a href="https://videos-corporativos.mx" title="videos-corporativos-toluca-metepec" rel="bookmark" class="w3-text-theme">Videos Corporativos.</a></p>
    <?php } ?>
    <?php if(get_field('fotos')){ ?>
        <p class="w3-margin-top w3-margin-bottom" style="font-size: 140%">Conoce más sobre nuestro servicio de <a href="https://iconica.mx/videos-corporativos-toluca-metepec.html" title="fotografía-videos-corporativos-toluca-metepec" rel="bookmark" class="w3-text-theme">Fotografía y Video.</a></p>
    <?php } ?>
    <?php if(get_field('web')){ ?>
        <p class="w3-margin-top w3-margin-bottom" style="font-size: 140%">Conoce más sobre nuestro servicio de <a href="https://iconica.mx/diseno-paginas-web-toluca-metepec.html" title="diseno-paginas-web-toluca-metepec" rel="bookmark" class="w3-text-theme">Diseño de Páginas Web.</a></p>
    <?php } ?>

    <hr style="margin:3rem 0px;">

    <h6 class="w3-text-theme">Video Más Reciente</h6>
    <div class="w3-row">
        <div class="w3-col s12">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/XczFBG6Zefk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</aside>