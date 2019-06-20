<?php get_header(); ?>
<main>
<!-- BACKGROUND IMAGE
================================================== -->
<section id="portfolio-intro" class="d-flex align-items-end">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h1 class="text-left mb-0"><span class="px-3 pt-2 pb-0 wow fadeInUp">ICONICA STUDIO</span></h1><h2 class="pt-2 px-3 wow fadeInUp" data-wow-delay="0.1s">Trabajos Destacados</h2>
			</div>
			<div class="col-12 text-center pt-4">
				<a data-scroll href="#portfolio">
					<i class="far fa-arrow-alt-circle-down arrow-animation fa-2x yellow-text"></i>
				</a>
			</div>
		</div>
	</div>
</section>
	
	
<!-- PORTFOLIO
================================================== -->
<section id="portfolio" class="my-0 py-0 mx-0 px-0">
	<div class="container-fluid no-gutters">
		<div class="row justify-content-center no-gutters px-0">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="grid-item col-12 col-md-6 col-lg-4">
                <div class="card">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
            </div>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>
        <div class="row justify-content-center py-3">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                        <span class="page-link"><?php previous_posts_link('Trabajos Más Recientes'); ?></span>
                    </li>
                    <li class="page-item">
                        <span class="page-link"><?php next_posts_link('Trabajos Anteriores'); ?></span>
                    </li>
                </ul>
            </nav>
        </div>
	</div>
</section>
</main>
<?php get_footer(); ?>