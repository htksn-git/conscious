<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php get_header(); ?>

<?php // 記事一覧
get_template_part('tmp/index-layout'); ?>

<?php // ページャー
get_template_part('tmp/pager'); ?>

<?php get_footer(); ?>
