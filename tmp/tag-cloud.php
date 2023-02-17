<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<?php
  $category = get_the_category();
  $category_id = $category[0]->cat_ID;
  $tags = get_tags(array(
    'hide_empty' => false,
    'taxonomy' => 'post_tag',
    'object_ids' => get_posts(array(
      'numberposts' => -1,
      'category' => $category_id,
      'post_status' => 'publish',
      'fields' => 'ids'
    ))
  ));

  if ($tags) {
    echo '<ul class="tag-cloud">';
    foreach($tags as $tag) {
      echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
    }
    echo '</ul>';
  }
?>

