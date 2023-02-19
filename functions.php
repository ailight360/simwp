<?php
    function calling_resources(){
        wp_enqueue_style('style', get_stylesheet_uri(), ' ', '1.0.4');
    }
    add_action('wp_enqueue_scripts', 'calling_resources');


    function sim_menu() {
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
    }
    add_action( 'init', 'sim_menu' );


    
    function wpb_init_widgets_custom($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget' => '<div class="sidebar">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }
    add_action('widgets_init','wpb_init_widgets_custom');

?>