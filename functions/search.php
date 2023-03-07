<?php if ( !defined( 'ABSPATH' ) ) exit;
// サイト内検索を「投稿」に限定 ////////////////////////////////////
function SearchFilter($query) {
  if ($query->is_search) {
  $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts','SearchFilter');

// サイト内検索にカスタムフィールドを含める ////////////////////////////////////
function custom_search($search, $wp_query) {
	global $wpdb;

	if (!$wp_query->is_search)
			return $search;
	if (!isset($wp_query->query_vars))
			return $search;

	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
	if ( count($search_words) > 0 ) {
    $search = '';
    $search .= "AND post_type = 'post'";
    foreach ( $search_words as $word ) {
      if ( !empty($word) ) {
        $search_word = '%' . esc_sql( $word ) . '%';
        $search .= " AND (
            {$wpdb->posts}.post_title LIKE '{$search_word}'
          OR {$wpdb->posts}.post_content LIKE '{$search_word}'
          OR {$wpdb->posts}.ID IN (
          SELECT distinct post_id
          FROM {$wpdb->postmeta}
          WHERE meta_value LIKE '{$search_word}'
          )
        ) ";
      }
    }
	}
	return $search;
}
add_filter('posts_search','custom_search', 10, 2);
