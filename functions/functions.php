<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php

// ページスラッグ 取得 ////////////////////////////////////
function get_page_slug() {
	global $post;
  $slug = $post->post_name;
	return $slug;
}

// ページID 取得 ////////////////////////////////////
function get_page_id() {
	global $post;
  $id = $post->ID;
	return $id;
}

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
