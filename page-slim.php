<?php
/**
 * Template Name: Slim Page
 *
 *
 * @package WordPress
 * @since Compuware2018 1.0
 */

?>
<?php get_header(); ?>



<div class="container">
  <div class="row">
    <div class="col-md-12">
	    <?php if ( have_posts() ) : ?>
	    
	        <?php while ( have_posts() ) : the_post(); ?>
	            
	            
	           

	            <h1 class="text-center"><?php the_title(); ?></h1>
	            <?php the_content(); ?>
	            
	        <?php endwhile; ?>
	        
	    <?php endif; ?>
      </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
  <div class="row">
    <div class="col">
      1 of 3
    </div>
    <div class="col">
      2 of 3
    </div>
    <div class="col">
      3 of 3
    </div>
  </div>
</div>

<?php get_footer(); ?>      