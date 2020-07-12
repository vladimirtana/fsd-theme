<?php

function_fsd_theme_enqueue_styles()  {
 wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
 $dependencies = array('bootstrap');
 wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );
}
}


?>