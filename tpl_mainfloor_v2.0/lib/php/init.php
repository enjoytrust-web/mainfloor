<?php
/*==============================
-Initialization
===============================*/

/* ======= ログイン画面 ======= */
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url(imagepathhere) !important; }
    </style>';
}

add_action('login_head', 'my_custom_login_logo');





/* ======= ダッシュボード＞フッターテキスト ======= */
function custom_admin_footer() {
    echo '何かご不明な点がございましたら<a href="mailto:web@enjoytrust.net">ENJOYTRUST WEB担当</a>まで';
}
add_filter('admin_footer_text', 'custom_admin_footer');





/* ======= Google Analytics ======= */
function wp_add_googleanalytics() { ?>

   <!-- ここにアナリティクスのコードを入れてください。 -->

<?php }
add_action('wp_footer', 'wp_add_googleanalytics');





/* ======= ユーザー情報欄にソーシャルリンク設定 ======= */
function my_new_contactmethods( $contactmethods ) {
//Twitter
$contactmethods['twitter'] = 'Twitter';
//Facebook
$contactmethods['facebook'] = 'Facebook';
//Google+
$contactmethods['googleplus'] = 'Google+';
return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);






/* ======= 管理バーにログアウトボタンを追加 ======= */
function add_new_item_in_admin_bar() {
 global $wp_admin_bar;
 $wp_admin_bar->add_menu(array(
 'id' => 'new_item_in_admin_bar',
 'title' => __('ログアウト'),
 'href' => wp_logout_url()
 ));
 }
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');






/* ======= デフォルトの「投稿」の設定 ======= */
function change_post_menu_label() {
global $menu;
global $submenu;
$menu[5][0] = '新しい記事を投稿';
$submenu['edit.php'][5][0] = '記事一覧';
$submenu['edit.php'][10][0] = '新規追加';
$submenu['edit.php'][16][0] = 'タグを管理';
//echo ";
}
function change_post_object_label() {
global $wp_post_types;
$labels = &$wp_post_types['post']->labels;
$labels->name = '記事一覧';
$labels->singular_name = '投稿';
$labels->add_new = _x('追加', '投稿');
$labels->add_new_item = '新規追加';
$labels->edit_item = '更新内容の編集';
$labels->new_item = '新規追加';
$labels->view_item = 'ページの確認';
$labels->search_items = '更新一覧から検索';
$labels->not_found = '記事が見つかりませんでした';
$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );