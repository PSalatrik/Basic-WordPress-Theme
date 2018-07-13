<?php
/**
 * Template Name: Home Page
 *
 *
 * @package WordPress
 * @since Compuware2018 1.0
 */

?>
<?php get_header(); ?>

<div class="jumbotron">
    <div class="container-fluid text-center">
        <h1>Welcome To Our Custom Site</h1>
    </div>
</div>

<div class="container-fluid">
	    <?php if ( have_posts() ) : ?>
	        <?php while ( have_posts() ) : the_post(); ?>
	            
	            <p> <?php the_content(); ?> </p>
	            
	        <?php endwhile; ?>
	        
	    <?php endif; ?>
</div>

<?php get_footer(); ?>      