<?php

add_theme_support('post-thumbnails');
register_nav_menus( array(
  'menu-header' => 'Menú header',
  'menu-footer' => 'Menú footer'
));

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
    }
}

add_action( 'wp_enqueue_scripts', 'register_jquery' );
function register_jquery() {
    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, '3.3.1');
        wp_enqueue_script('jquery');
    }
}

/* ==============================
 * Work Custom Post Type
 * ============================== */

function work_custom_post_type (){
  $labels = array(
    'name' => 'Work',
    'singular_name' => 'Work',
    'add_new' => 'Add Case',
    'all_items' => 'All Cases',
    'add_new_item' => 'Add Case',
    'edit_item' => 'Edit Item',
    'new_item' => 'New Case',
    'view_item' => 'View Case',
    'search_item' => 'Search Cases',
    'not_found' => 'No cases found',
    'not_found_in_trash' => 'No cases found in trash',
    'parent_item_colon' => 'Parent Item'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'custom-fields',
      'post-formats'
    ),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'exclude_from_search' => false
  );
  register_post_type('work', $args);
}
add_action('init', 'work_custom_post_type');

// Taxonomy
function work_custom_taxonomies() {
	$labels = array(
		'name' => 'Services',
		'singular_name' => 'Service',
		'search_items' => 'Search Services',
		'all_items' => 'All Services',
		'parent_item' => 'Parent Service',
		'parent_item_colon' => 'Parent Service:',
		'edit_item' => 'Edit Service',
		'update_item' => 'Update Service',
		'add_new_item' => 'Add New Work Service',
		'new_item_name' => 'New Service Name',
		'menu_name' => 'Services'
	);
	$args = array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'service' )
	);
	register_taxonomy('service', array('work'), $args);
}
add_action( 'init' , 'work_custom_taxonomies' );

/* ==============================
 * Custom Term
 * ============================== */

function work_get_terms( $postID, $term ){
  $terms_list = wp_get_post_terms($postID, $term);
  $output = '';

  $i = 0;
  foreach( $terms_list as $term ){ $i++;
    if( $i > 1 ){ $output .= ', '; }
    $output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
  }

  return $output;
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}

/*
	==========================================
	Custom Term Function
	==========================================
*/
function custom_get_terms( $postID, $term ){

	$terms_list = wp_get_post_terms($postID, $term);
	$output = '';

	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= '<span> • </span>'; }
		$output .= '<a href="' . get_term_link( $term ) . '">'. $term->name .'</a>';
	}

	return $output;

}

/*
	==========================================
	Custom Term Function (No links)
	==========================================
*/
function custom_get_terms_nl( $postID, $term ){
	$terms_list = wp_get_post_terms($postID, $term);
	$output = '';
	$i = 0;
	foreach( $terms_list as $term ){ $i++;
		if( $i > 1 ){ $output .= ' • '; }
		$output .= $term->name;
	}
	return $output;
}

/*
	==========================================
	Custom Login
	==========================================
*/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/css/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Espacio en blanco';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
