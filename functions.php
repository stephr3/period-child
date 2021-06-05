<?php 
    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    } 

    add_action( 'wp_footer', 'enqueue_parent_scripts' );
    function enqueue_parent_scripts() {
        wp_enqueue_script('parent_scripts', get_stylesheet_directory_uri() . '/js/search-page.js', NULL, '1.0', true);
        wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=' . getenv("Google_Map_API_Key") , NULL, '1.0', true);
        wp_enqueue_script('GoogleMapHelper', get_stylesheet_directory_uri() . '/js/google-map-helper.js', NULL, '1.0', true);
    }

    add_filter('acf/fields/google_map/api', 'googleMapKey');
    function googleMapKey($api) {
        $api['key'] = getenv("Google_Map_API_Key"));
        return $api;
    }
?>
