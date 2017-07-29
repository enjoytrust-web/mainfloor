<?php

if( function_exists('acf_add_options_page') ) {
  $option_page = acf_add_options_page(array(
    'page_title' => 'サイドバー', // 設定ページで表示される名前
    'menu_title' => 'サイドバー', // ナビに表示される名前
    'menu_slug' => 'site_design',
    'capability' => 'edit_posts',
    'redirect' => false
  ));

}