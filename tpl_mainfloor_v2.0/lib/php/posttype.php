<?php
/*==============================
-Add Custom Post Type
===============================*/
// カスタム投稿タイプの追加
function create_post_type() {

  // プロモーション
  register_post_type( 'promotion-custom',
    array(
      'label' => 'プロモーションを追加',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'posts', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'promotion-custom_category',
    'promotion-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

}

add_action( 'init', 'create_post_type' );