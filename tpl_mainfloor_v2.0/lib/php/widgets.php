<?php
/*==============================
-Dashboard widgets
===============================*/
//イベント更新について
function document_widgets(){
    wp_add_dashboard_widget('dashboard_widget_document', 'ライターの皆様へ', 'document_widget_function');
}

function document_widget_function() {
  echo "
    <b>■記事を書くには「新しい記事を投稿」より始めてください。</b><br>
    記事の読みやすさを重視し、ウェブサイトの統一性、一貫性を大事にしています。かならず記事作成ガイドに沿って執筆をお願い致します。<br><br>
    ※記事ができましたらご一報ください。<br><br>
    <b>■お困りですか？</b><br>
    記事作成ガイドに沿って書いていただく事でより読みやすく、自由な記事を作成することができます。<br>記事作成ガイドは<a href='/guideline/' target='_blank'>こちら</a><br>
    ";
}

add_action('wp_dashboard_setup', 'document_widgets' );