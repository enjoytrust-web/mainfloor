<?php
/*==============================
-Dashboard widgets
===============================*/
//イベント更新について
function document_widgets(){
    wp_add_dashboard_widget('dashboard_widget_document', 'イベント更新について', 'document_widget_function');
}

function document_widget_function() {
  echo "
    <b>■レギュラーイベント</b><br>
    レギュラーイベントを登録します。<br>*毎月のレギュラー更新は<b>固定ページ</b>-<b>レギュラーイベント更新</b>より実施してください。<br><br>
    <b>■スペシャルイベント</b><br>
    GWやハロウィン、特別なイベントを登録します。<br><br>
    <b>■ゲストイベント</b><br>
    単日のゲストイベントを登録します。主な更新はここがメインとなります。<br><br>
    <b>■スペシャルゲストイベント</b><br>
    海外アーティストや特に目玉のゲストイベントを登録します。<br>*特別な時以外は基本的に使用しません。<br><br>
    <b>■キャンペーン</b><br>
    店舗施策や案内を登録します。<br><br>
    <b>■サイトデザイン</b><br>
    年末年始/シーズン毎の背景画像の予約更新を可能にする為、記事として登録します。<br><br>
    <b>■特別料金</b><br>
    特別料金が設定される日時を記事として投稿してください。<br><br>
    <b>■固定ページ</b><br>
    各種固定ページにそれぞれの更新方法を記載しています。ご確認ください。
    ";
}

add_action('wp_dashboard_setup', 'document_widgets' );


//ページの編集について
function page_widgets(){
    wp_add_dashboard_widget('dashboard_widget_page', 'ページの編集について', 'page_widget_function');
}

function page_widget_function() {
  echo "
    <b>■TOP</b><br>
    トップページです。通常時のみ使用します。エイプリルフールなどの場合は専用の固定ページを使用。<br><br>
    <b>■SCHEDULE</b><br>
    page-schedule.phpにて設定します。<br><br>
    <b>■SCHEDULE-レギュラーイベント</b><br>
    各曜日のレギュラーイベント情報を登録します。<br><br>
    <b>■GRAND MENU</b><br>
    メニュー表の料金の変更などを行います。<br><br>
    <b>■SYSTEM</b><br>
    料金表を登録します。<br><br>
    <b>■TEASER</b><br>
    ティザーサイト制作時のみ使用。
    ";
}

add_action('wp_dashboard_setup', 'page_widgets' );