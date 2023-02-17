<?php if ( !defined( 'ABSPATH' ) ) exit;

// カテゴリー名 取得 ////////////////////////////////////
function get_category_name() {
  global $post;
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->name;
}

// カテゴリースラッグ 取得 ////////////////////////////////////
function get_category_slug() {
  global $post;
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->slug;
}

?>
