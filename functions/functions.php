<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php

// カテゴリー名 取得（リンクなし） ////////////////////////////////////
function get_category_name() {
	global $post;
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->name;
}

// カテゴリースラッグ 取得（リンクなし） ////////////////////////////////////
function get_category_slug() {
	global $post;
  $cat = get_the_category();
  $cat = $cat[0];
  return $cat->slug;
}

// タグ名 取得（リンクなし） ////////////////////////////////////
function get_tag_name() {
	global $post;
	if( has_tag() ) {
		$post_tags = get_the_tags();
		$tag_names = array();
		foreach ( $post_tags as $tag ) {
			array_push($tag_names, $tag->name);
		}
		return implode(' / ', $tag_names);
	}
}

?>
