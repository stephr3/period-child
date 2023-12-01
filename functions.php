<?php

    add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
    function enqueue_parent_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'enable_frontend_dashicons' );
    function enable_frontend_dashicons() {
      wp_enqueue_style( 'dashicons' );
    }

    add_action( 'wp_footer', 'enqueue_parent_scripts' );
    function enqueue_parent_scripts() {
        wp_enqueue_script('parent_scripts', get_stylesheet_directory_uri() . '/js/search-page.js', NULL, '1.0', true);
        wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=KEY' , NULL, '1.0', true);
        wp_enqueue_script('GoogleMapHelper', get_stylesheet_directory_uri() . '/js/google-map-helper.js', NULL, '1.0', true);
    }

	//ACF google maps api key set
    add_filter('acf/fields/google_map/api', 'googleMapKey');
    function googleMapKey($api) {
        $api['key'] = "KEY";
        return $api;
    }

    // Creating the widget
    class wpb_widget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
        'wpb_widget',

        // Widget name will appear in UI
        __('Classes Filters Widget', 'wpb_widget_domain'),

        // Widget description
        array( 'description' => __( 'Add filter UI and functionality to `Classes` custom data type' ), )
        );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        // echo $args['before_title'] . "Filters" . $args['after_title'];

        // This is where you run the code and display the output
        // echo __( 'Hello, World!', 'wpb_widget_domain' );
        ?>
            <div><?php include "filtersform.php"; ?></div>
        <?php
        echo $args['after_widget'];
    }

    // Class wpb_widget ends here
    }


    // Register and load the widget
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );
?>
