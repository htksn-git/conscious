<?php if ( !defined( 'ABSPATH' ) ) exit;

// ツールバーで不要な項目を消去する ////////////////////////////////////
function update_adminbar($wp_adminbar) {
  // 不要な項目を選択
  $wp_adminbar->remove_node('wp-logo');
  $wp_adminbar->remove_node('customize');
  $wp_adminbar->remove_node('comments');
  $wp_adminbar->remove_node('updates');
  $wp_adminbar->remove_node('search');
}
add_action('admin_bar_menu', 'update_adminbar', 999);

// 管理ツールバーにメニュー追加 ////////////////////////////////////
function customize_admin_bar_menu($wp_admin_bar){
  //バーにメニューを追加
  $title = sprintf(
    '<span class="ab-label">%s</span>',
    '管理メニュー'//親メニューラベル
  );
  $wp_admin_bar->add_menu(array(
    'id'    => 'dashboard_menu',
    'meta'  => array(),
    'title' => $title
  ));
  //サブメニューを追加
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-dashboard', // 子メニューID
    'meta'   => array(),
    'title'  => 'ダッシュボード', // ラベル
    'href'   => home_url('/wp-admin/') // ページURL
  ));
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-singles', // 子メニューID
    'meta'   => array(),
    'title'  => '投稿一覧', // ラベル
    'href'   => home_url('/wp-admin/edit.php') // ページURL
  ));
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-pages', // 子メニューID
    'meta'   => array(),
    'title'  => '固定ページ一覧', // ラベル
    'href'   => home_url('/wp-admin/edit.php?post_type=page') // ページURL
  ));
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-plugins', // 子メニューID
    'meta'   => array(),
    'title'  => 'プラグイン一覧', // ラベル
    'href'   => home_url('/wp-admin/plugins.php') // ページURL
  ));
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-csv-import', // 子メニューID
    'meta'   => array(),
    'title'  => 'CSVインポート', // ラベル
    'href'   => home_url('/wp-admin/admin.php?import=csv') // ページURL
  ));
  $wp_admin_bar->add_menu(array(
    'parent' => 'dashboard_menu', // 親メニューID
    'id'     => 'dashboard_menu-csv-export', // 子メニューID
    'meta'   => array(),
    'title'  => 'CSVエクスポート', // ラベル
    'href'   => home_url('/wp-admin/tools.php?page=wp-csv-exporter') // ページURL
  ));
}
add_action('admin_bar_menu', 'customize_admin_bar_menu', 9999);

// 管理画面にページIDを表示 ////////////////////////////////////
//投稿・固定ページ管理画面の記事一覧テーブルにIDカラムを作成
add_filter( 'manage_posts_columns', 'customize_admin_manage_posts_columns' );//投稿
add_filter( 'manage_pages_columns', 'customize_admin_manage_posts_columns' );//固定ページ
function customize_admin_manage_posts_columns($columns) {
  //投稿ID
  $columns['post-id'] = 'ID';

  return $columns;
}
//投稿・固定ページ管理画面の記事一覧テーブルにIDを表示
add_action( 'manage_posts_custom_column', 'customize_admin_add_column', 10, 2 );//投稿
add_action( 'manage_pages_custom_column', 'customize_admin_add_column', 10, 2 );//固定ページ
function customize_admin_add_column($column_name, $post_id) {
  //投稿ID
  if ( 'post-id' === $column_name ) {
    $thum = $post_id;
  }
  if ( isset($thum) && $thum ) {
    echo $thum;
  }
}
//投稿・固定ページ管理画面の記事一覧テーブルにIDソートを可能にする
add_filter( 'manage_edit-post_sortable_columns', 'sort_term_columns' );//投稿
add_filter( 'manage_edit-page_sortable_columns', 'sort_term_columns' );//固定ページ
function sort_term_columns($columns) {
  $columns['post-id'] = 'ID';
  return $columns;
}

?>
