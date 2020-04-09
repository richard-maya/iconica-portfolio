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
                <?php $top_banner = get_field('top_banner', 'option'); 
                    if( $top_banner['show_banner'] == true ) { ?>
                        <div class="w3-hide-small" style="height:4rem; width:100%;"></div>
                <?php } ?>
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
		<div class="w3-row-padding w3-padding-large">
            <div class="w3-col s0 l1"><p></p></div>
            <div class="w3-col s12 m7 l6 w3-margin-bottom">
                <?php the_content(); ?>
            </div>
            <div class="w3-col s0 m1 l1"><p></p></div>
            <div class="w3-col s12 m4 l3 w3-right-align">
                <?php get_sidebar(); ?>
            </div>
		</div>
	</div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<!-- RELATED PROJECTS
================================================== -->
<section class="w3-section" id="portfolio" style="margin-top: 3rem;">
    <div class="w3-row-padding">
        <h2 class="w3-text-theme w3-center">Proyectos Similares</h2>
    </div>
    
    <div class="w3-row w3-margin-bottom">
        <?php 
            $postID = get_the_id();
            $categorySlug = get_the_category();
            $relatedArgsQuery = array(
                'posts_per_page' => 3,
                'nopaging' => false,
                'orderby' => 'rand',
                'category_name' => $categorySlug[0]->name,
                'post__not_in' => array( $postID )
            );

            $relatedPostsQuery = new WP_Query( $relatedArgsQuery );

            if ( $relatedPostsQuery->have_posts() ) : while ( $relatedPostsQuery->have_posts() ) : $relatedPostsQuery->the_post(); ?>

            <div class="grid-item w3-col s12 m4">
                <div class="card">
                    <a href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>' rel='bookmark'>
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

    <div class="w3-hide-small" style="height:4rem; width:100%;"></div>
</section>
</main>	

<?php get_footer(); ?>
