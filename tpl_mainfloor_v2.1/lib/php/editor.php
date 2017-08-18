<?php
/*==============================
-Add Custom Post Type
===============================*/

function custom_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script>
    // QTags.addButton( id, ボタンテキスト, 開始タグ, 終了タグ, アクセスキー, タイトル, 優先順位(1が先頭) );
    QTags.addButton( 'label-large', '大見出し', '<p class="single-post-text-label-large">', '</p>', '', '大見出し', 1 );
    QTags.addButton( 'label-medium', '中見出し', '<p class="single-post-text-label-medium">', '</p>', '', '中見出し', 1 );
    QTags.addButton( 'label-small', '大見出し', '<p class="single-post-text-label-small">', '</p>', '', '小見出し', 1 );
    QTags.addButton( 'lead', '文章', '<p class="single-post-text-lead">', '</p>', '', '文章', 1 );
    QTags.addButton( 'notes', '注意書き:備考', '<p class="single-post-text-notes">', '</p>', '', '注意書き：備考', 1 );
    QTags.addButton( 'youtube-title', '動画タイトル', '<p class="single-post-youtube-title">', '</p>', '', '動画タイトル', 1 );
    QTags.addButton( 'youtube-title', '動画ID', '<div class="single-post-youtube"><iframe width="853" height="480" src="', '?playsinline=1&showinfo=0" frameborder="0" allowfullscreen class="single-post-youtube-player"></iframe></div>', '', 'YouTube埋め込み', 1 );

    </script>
<?php
    }
}
add_action( 'admin_print_footer_scripts', 'custom_add_quicktags' );