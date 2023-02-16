<?php if ( !defined( 'ABSPATH' ) ) exit;

// Contact Form 7 jQueryとCSS読み込み停止 ////////////////////////////////////
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

?>
