<?php
/*==============================
-Add Custom Post Type
===============================*/
// カスタム投稿タイプの追加
function create_post_type() {

  // プロモーション
  register_post_type( 'promos-custom',
    array(
      'label' => 'プロモーション',
      'public' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'promos', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => true
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'promos-custom_category',
    'promos-custom',
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