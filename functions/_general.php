<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php

// 管理画面バー非表示 ////////////////////////////////////
add_filter('show_admin_bar', '__return_false');

// CSS 読み込み ////////////////////////////////////
function loading_css() {
	wp_enqueue_style('style',get_template_directory_uri().'/style.css' );
}
add_action('wp_enqueue_scripts', 'loading_css');

// JS 読み込み ////////////////////////////////////
function load_js() {
	wp_deregister_script('jquery'); // デフォルトjquery削除
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js' );
	wp_enqueue_script('pagetop', get_template_directory_uri().'/js/pagetop.js');
	wp_enqueue_script('modal', get_template_directory_uri().'/js/modal.js'
		, array( 'jquery' ), '', true);
  wp_enqueue_script('copy-button', get_template_directory_uri().'/js/copy-button.js'
		, array( 'jquery' ), '', true);
  wp_enqueue_script('scroll-header', get_template_directory_uri().'/js/scroll-header.js'
		, array( 'jquery' ), '', true);
  wp_enqueue_script('tab-switch', get_template_directory_uri().'/js/tab-switch.js'
		, array( 'jquery' ), '', true);
}
add_action('wp_enqueue_scripts', 'load_js');

// アイキャッチ画像サイズ ////////////////////////////////////
// add_image_size('tmb_360_360', 360, 360, true);

// ビジュアルエディタースタイルを適用 ////////////////////////////////////
// add_editor_style();

// 固定ページで抜粋を有効化 ////////////////////////////////////
add_post_type_support( 'page', 'excerpt' );

// WPが生成するサイトマップを無効化 ////////////////////////////////////
add_filter( 'wp_sitemaps_enabled', '__return_false' );

// global-styles-inline-css を削除 ////////////////////////////////////
// [【WordPress 5.9】緊急対応「global-styles-inline-css」を削除する方法 | 株式会社オンズ](https://on-ze.com/archives/10109)
add_action( 'wp_enqueue_scripts', 'remove_my_global_styles' );
function remove_my_global_styles() {
	wp_dequeue_style( 'global-styles' );
}

?>
