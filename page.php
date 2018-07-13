<?php
/**
 * This is the template for the page post-type
 *
 *
 * @package WordPress
 * @since Compuware2018 1.0
 */

?>
<?php get_header(); ?>



<div class="container">
    <?php if ( have_posts() ) : ?>
    
        <?php while ( have_posts() ) : the_post(); ?>
            
            
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            
        <?php endwhile; ?>
        
    <?php endif; ?>
</div>

<?php get_footer(); ?>      