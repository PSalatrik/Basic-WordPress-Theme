<?php
/**
 * This is the template part for displaying single.php page content
 *
 *
 * @package WordPress
 * @since Compuware2018 1.0
 */
?>
<div id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
		            
		            
		            <h1><?php the_title(); ?></h1>
		            <p><?php the_date(); ?> </p>
		            <?php the_content(); ?>

		            <?php wp_link_pages( array(
		            		'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages: ', 'Compuware2018') . '</span>',
		            		'after'       => '</div>',
		            		'link-before' => '<span>',
		            		'link-after'  => '</span>',
		            		'pagelink'    => '<span class="screen-reader-text">' .__( ' Page ', 'Compuware2018' ) . '</span>%',
		            		'seperator'   => '<span class="screen-reader-text">, </span>'
		            	) ); ?>
		            </div>