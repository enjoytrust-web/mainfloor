<?php
/*==============================
-Cleanup WP DefaultSet
===============================*/





/* ======= Wordpress バージョン情報非表示 ======= */
remove_action('wp_head','wp_generator');





/* ======= 更新情報非表示 ======= */
if (!current_user_can('administrator')) {
  add_filter('pre_site_transient_update_core', '__return_zero');
}





/* ======= ヘッダの余計なタグ排除 ======= */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);





/* ======= ログインエラー時、エラー内容を表示しない。（セキュリティ向上） ======= */
add_filter('login_errors', create_function('$a', 'return null;'));





/* ======= 固定ページではビジュアルエディタを利用できないようにする ======= */
function disable_visual_editor_in_page(){
  global $typenow;
  if( $typenow == 'page' ){
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter(){
  return false;
}
add_action( 'load-post.php', 'disable_visual_editor_in_page' );
add_action( 'load-post-new.php', 'disable_visual_editor_in_page' );





/* ======= デフォルトエディターの削除 ======= */
add_action( 'init' , 'my_remove_post_editor_support' );
function my_remove_post_editor_support() {
 remove_post_type_support( 'page', 'editor' ,'title' );
 remove_post_type_support( 'post', 'editor' ,'title' );
}





/* ======= ユーザー情報不要なものを削除 ======= */
function hide_profile_fields( $contactmethods ) {
  unset($contactmethods['aim']);
  unset($contactmethods['jabber']);
  unset($contactmethods['yim']);
  return $contactmethods;
}
add_filter('user_contactmethods','hide_profile_fields');





/* ======= ダッシュボードのウィジェット削除 ======= */
function remove_dashboard_widget() {
  //if ( ! current_user_can( 'administrator' ) )
  {
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' ); // 概要
    //remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' ); // アクティビティ
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' ); // クイックドラフト
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPressニュース
  }
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget' );





/* ======= 管理バーの項目を非表示 ======= */
function remove_admin_bar_menu( $wp_admin_bar ) {
 $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressシンボルマーク
 $wp_admin_bar->remove_menu('my-account'); // マイアカウント
 }
add_action( 'admin_bar_menu', 'remove_admin_bar_menu', 70 );





/* ======= 管理バーのヘルプメニューを非表示にする ======= */
function my_admin_head(){
 echo '<style type="text/css">#contextual-help-link-wrap{display:none;}</style>';
 }
add_action('admin_head', 'my_admin_head');





/* ======= デフォルトクイックタグ不要タグのみ非表示 ======= */
function remove_html_editor_buttons( $qt_init) {
  $remove = array('strong','em','b-quote','img','ul','ol','li','code','dfw','strong','link','del','block','ins','more'); //ここに非表示にしたいクイックタグのＩＤを記述
  $qt_init['buttons'] = implode(',', array_diff(explode(',', $qt_init['buttons']), $remove));
  return $qt_init;
}
add_filter( 'quicktags_settings', 'remove_html_editor_buttons' );