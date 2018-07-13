<?php 

//Load in the stylesheets
function enqueue_compuware_styles(){

wp_enqueue_script('bootstrap-js', "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery') );
wp_enqueue_style("bootstrap", "//stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
wp_enqueue_style("compuware2018-style", get_stylesheet_uri() );
}
add_action("wp_enqueue_scripts", "enqueue_compuware_styles" );


//Register Nav Menus
function register_my_menu() {
  register_nav_menus(array(
  	'primary' => 'main-nav',__( 'Main Nav' )
  	));

	//Theme support for document title tag
	add_theme_support('title-tag');
}
add_action( 'after_setup_theme', 'register_my_menu' );



function custom_widgets() {
	register_sidebar(array(
		'name' => __('sidebar', 'compuware2018'),
		'id' => 'sidebar-1',
		'discription'   => __('Add widgets here to appear in the sidebar', 'compuware2018'),
		'before_widget' => '<section id="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>'
		) );
}
add_action('widgets_init', 'custom_widgets');



if ( !function_exists( 'custom_shortcode' ) ):
function custom_shortcode( $atts , $content = null ) {
	return '<div class="col-md-3-offset-4">' . $content . '</div>';
}
endif;

add_shortcode('one_third', 'custom_shortcode');



?>

