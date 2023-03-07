<?php if ( !defined( 'ABSPATH' ) ) exit;
// 下書きの固定ページを親ページに設定できるようにする ////////////////////////////////////
add_filter('page_attributes_dropdown_pages_args', 'add_private_draft');
function add_private_draft($args) {
  $args['post_status'] = 'publish,private,draft';
  return $args;
}

// 固定ページの親ページと子ページをスラッグで判定 ////////////////////////////////////
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}
