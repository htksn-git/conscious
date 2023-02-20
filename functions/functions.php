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
