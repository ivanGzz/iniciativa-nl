<?php

function iniciativanl_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/styles/normalize.css', array(), '20160426' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css', array(), '20160426' );
    wp_enqueue_style( 'iniciativanl', get_template_directory_uri() . '/styles/iniciativanl.css', array(), '20160426' );
}
add_action( 'wp_enqueue_scripts', 'iniciativanl_scripts' );

?>
