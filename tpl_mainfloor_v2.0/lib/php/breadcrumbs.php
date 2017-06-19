<?php

//ショートコードによるパンくず表示
//the_breadcrumb();

function the_breadcrumb() {
    echo '<ul id="crumbs">';
  if (!is_home()) {
    echo '<li><a href="';
    echo get_option('home');
    echo '">';
    echo 'Home';
    echo "</a></li>";
    if (is_category() || is_single()) {
      echo '<li>';
      the_category(' </li><li> ');
      if (is_single()) {
        echo "</li><li>";
        the_title();
        echo '</li>';
      }
    } elseif (is_page()) {
      echo '<li>';
      echo the_title();
      echo '</li>';
    }
  }
}