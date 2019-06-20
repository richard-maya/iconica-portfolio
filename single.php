<?php
/**
 * Single Post Template
 */ get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- BACKGROUND IMAGE
================================================== -->
<section class="portfolio-post w3-section w3-margin-top">
    <div class="w3-container">
        <div class="w3-row w3-center">
            <div class="w3-col s12 m1 l2"><p></p></div>
            <div class="w3-col s12 m10 l8">
                <header>
                    <h1 class="w3-text-theme"><small><?php the_title(); ?></small></h1>
                </header>
            </div>
        </div>
    </div>
</section>
	
	
<!-- PORTFOLIO
================================================== -->
<section class="w3-section">
	<div class="w3-container">
		<div class="w3-row-padding">
            <div class="w3-col s12 m8 w3-margin-bottom">
                <?php the_content(); ?>
            </div>
            <div class="w3-col s12 m4 l3 w3-right-align">
                <?php get_sidebar(); ?>
            </div>
		</div>
	</div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>	

<?php get_footer(); ?>
