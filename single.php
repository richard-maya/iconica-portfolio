<?php
/**
 * Single Post Template
 */
?>
<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- BACKGROUND IMAGE
================================================== -->
<section class="portfolio-post pt-5 pb-4">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <h1 class="text-center d-none"><small><?php the_title(); ?></small></h1>
                <h3 class="text-center yellow-text wow fadeInUp"><?php the_title(); ?></h3>
            </div>
        </div>
    </div>
</section>
	
	
<!-- PORTFOLIO
================================================== -->
<section>
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-12 col-md-8 mb-4">
                <?php the_content(); ?>
            </div>
            <div class="col-12 col-md-4">
                <h6 class="text-right wow fadeInUp">Fecha:</h6>
                <p class="text-right mb-3 wow fadeInUp" data-wow-delay="0.1s"><?php echo get_the_date('F j, Y'); ?></p>
                <h6 class="text-right wow fadeInUp" data-wow-delay="0.2s">Categoría:</h6>
                <p class="text-right mb-3 wow fadeInUp" data-wow-delay="0.3s"><?php the_category(', '); ?></p>
                <h6 class="text-right wow fadeInUp" data-wow-delay="0.4s">Cliente:</h6>
                <p class="text-right mb-3 wow fadeInUp" data-wow-delay="0.5s"><?php the_field('cliente'); ?></p>
                <h6 class="text-right wow fadeInUp" data-wow-delay="0.6s">Descripción:</h6>
                <p class="text-right mb-3 wow fadeInUp" data-wow-delay="0.7s"><?php the_field('descripcion'); ?></p>
                <div class="sharethis-inline-share-buttons"></div>
            </div>
		</div>
	</div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>


<!-- MODALS
================================================== -->
<!-- Cowboys vs Indians -->
<div class="modal fade" id="cowboysModal" tabindex="-1" role="dialog" aria-labelledby="cowboysModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="cowboysModalLabel">Cowboys vs Indians</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Diseño de interfaz y animaciones para videojuego de dispositivos iOS.</p>
                <div style="padding:56.16% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/273410143?color=faaf41&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                <p class="d-none"><a href="https://vimeo.com/273410143">Cowboys vs Indians - Mock Up</a> from <a href="https://vimeo.com/iconicamx">Iconica Studio</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
            </div>
        </div>
    </div>
</div>
</main>	

<?php get_footer(); ?>