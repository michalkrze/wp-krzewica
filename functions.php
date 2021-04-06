<?php 

add_theme_support( 'post-thumbnails' );

if (!function_exists('krzewica_theme_setup')): 
    function krzewica_theme_setup(){
        register_nav_menus([
            'primary_menu' => __('Primary Menu', 'krzewica'),
            'secondary_menu' => __( 'Secondary Menu', 'krzewica' )
            ]);
    }
endif;

add_action( 'after_setup_theme', 'krzewica_theme_setup' );

function my_excerpt_length($length){
    return 9;
}
add_filter('excerpt_length', 'my_excerpt_length');

function test_category_name_display(){
	
	global $post; 
	
	$cat = get_the_category($post->ID);
	
	if ( ! empty( $cat ) ) {
       echo esc_html( $cat [0]->cat_name );   
    }
	
}
// add_action('wp_head', 'test_category_name_display');

function prefix_modify_query_order( $query ) {
  
  $args = array(
    'category_name' => the_category(),               
    'orderby' => 'date',
    'order'   => 'ASC',           
);    
  $a = new WP_Query($args);
}
//   add_action( 'pre_get_posts', 'prefix_modify_query_order' );

function krzewica_register_sidebars(){

  register_sidebar( 
    ['id' => 'primary',
    'name' => 'primary title',    
    'description' => 'primary sidebar',
    'before_widget' => '<div class = "krzewica_before_widget">',
    'after_widget' => '</div>']    
  );
  
}

add_action( 'widgets_init', 'krzewica_register_sidebars');

add_filter( 'customizer_widgets_section_arg',
            function( $args ){
              $args['active_callback'] = '__return_true';
              return $args;
            });


