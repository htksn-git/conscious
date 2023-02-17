<?php if ( !defined( 'ABSPATH' ) ) exit;

// カテゴリー名 取得（リンクなし） ////////////////////////////////////
function get_category_name() {
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->name;
}

// カテゴリースラッグ 取得（リンクなし） ////////////////////////////////////
function get_category_slug() {
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->slug;
}

// タグ名 取得（リンクなし） ////////////////////////////////////
function get_tag_name() {
  $post_tags = get_the_tags();
  $tag_names = array();
  foreach ( $post_tags as $tag ) {
    array_push($tag_names, $tag->name);
  }
  return implode(' / ', $tag_names);
}

// タグ登録の有無を確認する ////////////////////////////////////
function count_tags() {
  $tags = get_the_tags(); //タグ情報を取得
  return count($tags);
}

?>
