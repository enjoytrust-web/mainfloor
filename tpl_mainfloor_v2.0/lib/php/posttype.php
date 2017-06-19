<?php
/*==============================
-Add Custom Post Type
===============================*/
// カスタム投稿タイプの追加
function create_post_type() {

  // レギュラーイベント
  register_post_type( 'regularevents-custom',
    array(
      'label' => 'レギュラーイベント',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'regularevent', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'regularevents-custom_category',
    'regularevents-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

  // スペシャルイベント
  register_post_type( 'specialevent-custom',
    array(
      'label' => 'スペシャルイベント',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'regularevent', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'specialevent-custom_category',
    'specialevent-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

  // ゲストイベント
  register_post_type( 'guest-events-custom',
    array(
      'label' => 'ゲストイベント',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'guestevent', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'guest-events-custom_category',
    'guest-events-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

  // スペシャルゲストイベント
  register_post_type( 'specialguest-custom',
    array(
      'label' => 'スペシャルゲストイベント',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'regularevent', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'specialguest-custom_category',
    'specialguest-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );


  // キャンペーン
  register_post_type( 'campaign-custom',
    array(
      'label' => 'キャンペーン',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'campaign', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'campaign-custom_category',
    'campaign-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

  // サイトデザイン
  register_post_type( 'design-custom',
    array(
      'label' => 'サイトデザイン',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'campaign', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'design-custom_category',
    'design-custom',
    array(
      'label' => 'カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリ一覧',
        'add_new_item' => 'カテゴリを追加'
      ),
      'hierarchical' => true
    )
  );

  // 料金表
  register_post_type( 'system-custom',
    array(
      'label' => '特別料金',
      'public' => true,
      // 'has_archive' => true,
      'menu_position' => 5,
      'supports' => 'title',
      'rewrite' => array(
        'slug' => 'system', //投稿タイプのスラッグと異なる文字列をURLに使いたい時に指定
        'with_front' => false
      )
    )
  );

  // add taxonomy
  register_taxonomy(
    'system-custom_category',
    'system-custom',
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