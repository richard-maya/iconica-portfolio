<?php get_header(); ?>
<main>
<!-- INTRO
================================================== -->
<section class="portfolio-intro">
	<div class="w3-container">
		<div class="w3-row-padding">
			<div class="w3-col s-12 m-6">
                <header>
                    <h1 class="w3-theme w3-padding mb-0">ICONICA STUDIO</h1>
                    <table class="w3-table">
                        <tr class="w3-theme-d5 w3-padding mb-0">
                            <th>
                                <h2 class="mb-0">Trabajos Destacados</h2>
                                <h3><?php featureText(); ?></h3>
                            </th>
                            <th>
                                <a href="#portfolio">
                                    <img src="https://iconica.mx/assets/ui/down-arrow-white.svg" alt="ver-mas" class="arrow-animation">
                                </a>
                            </th>
                        </tr>
                    </table>
                </header>
			</div>
		</div>
	</div>
</section>
	
	
<!-- PORTFOLIO
================================================== -->
<section id="portfolio">
    <div class="w3-row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="grid-item w3-col s12 m6 l4">
            <div class="card">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="w3-theme">
                        <p class="card-text"><?php the_title(); ?></p>
                    </div>
                </a>
            </div>
        </div>

    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    </div>
    <div class="w3-center w3-section">
        <nav class="w3-bar">
            <button class="w3-bar-item w3-button w3-theme no-deco">&laquo; <?php previous_posts_link('Trabajos Más Recientes'); ?></button>
            <button class="w3-bar-item w3-button w3-theme no-deco"><?php next_posts_link('Trabajos Anteriores'); ?> &raquo;</button>
        </nav>
    </div>
</section>
</main>
<?php get_footer(); ?>
