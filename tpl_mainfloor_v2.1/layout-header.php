<!-- ▼ write your contents ▼ -->
<!DOCTYPE html>
<html lang="ja">
<head>

  <!-- Google AdSense -->
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-9907645431543420",
      enable_page_level_ads: true
    });
  </script>

  <meta charset="UTF-8">

  <!-- SEO -->
  <meta name="keywords" content="クラブ,まとめ,フェス,EDM,ダンス,ハウス,TECHNO,HIP-HOP,R&B,DJ,ARTIST,GIRAFFE,osaka,MAINFLOOR.JP,mainfloor,メインフロア,">
  <meta name="description" content="大阪・神戸・京都・関西の人気クラブや音楽、フェス、ファッションなど話題のカルチャー情報を発信するウェブメディア「MAINFLOOR.JP」。">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>

  <!-- StyleSheet -->
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/lib/css/style.css">

    <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="">
  <link rel="icon" type="image/png" href="" sizes="32x32">
  <link rel="icon" type="image/png" href="" sizes="16x16">

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <!-- OGP -->
    <meta property="og:url" content="http://mainfloor.jp/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="MAINFLOOR.JP">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="http://mainfloor.jp/twittercard_20170725.jpg">
    <meta property="og:description" content="大阪・神戸・京都・関西の人気クラブや音楽、フェス、ファッションなど話題のカルチャー情報を発信するウェブメディア「MAINFLOOR.JP」。">
    <meta property="og:site_name" content="MAIN FLOOR.JP">
  <!-- Facebook -->
    <meta property="fb:app_id" content="118875008744291" />
  <!-- Twitter -->
  <meta name="twitter:site" value="@MAINFLOOR_JP">
  <meta name="twitter:creator" value="@MAINFLOOR_JP">
  <meta name="twitter:card" value="summary_large_image">
  <meta name="twitter:title" content="MAINFLOOR.JP">
  <meta name="twitter:description" content="大阪・神戸・京都・関西の人気クラブや音楽、フェス、ファッションなど話題のカルチャー情報を発信するウェブメディア「MAINFLOOR.JP」。">
  <meta name="twitter:url" content="http://mainfloor.jp/" />
  <meta name="twitter:image" content="http://mainfloor.jp/twittercard_20170725.jpg">

</head>

<body>

  <div id="fb-root"></div>

  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <header class="l-header">
    <h1 class="c-mainlogo">
      <a href="<?php echo home_url();?>/" class="c-mainlogo-sitename">
        MAINFLOOR
        <span class="c-mainlogo-catch">
          MUSIC PARTY LIFE MAGAZINE
        </span>
      </a>
    </h1>

    <nav class="c-nav">
      <ul class="c-nav-list">
        <li class="c-nav-listin">
          <a href="<?php echo home_url();?>/event/" class="g-nav-listin-link">
            EVENT
          </a>
        </li>
        <li class="c-nav-listin">
          <a href="<?php echo home_url();?>/clubtopic/" class="g-nav-listin-link">
            CLUB TOPIC
          </a>
        </li>
        <li class="c-nav-listin">
          <a href="<?php echo home_url();?>/artist/" class="g-nav-listin-link">
            DJ / ARTIST
          </a>
        </li>
        <li class="c-nav-listin">
          <a href="<?php echo home_url();?>/snap/" class="g-nav-listin-link">
            SNAP
          </a>
        </li>
        <li class="c-nav-listin">
          <a href="<?php echo home_url();?>/music/" class="g-nav-listin-link">
            MUSIC
          </a>
        </li>
      <ul>
    </nav>

    <div class="c-trigger">
      <div class="c-trigger-line"></div>
      <div class="c-trigger-line"></div>
      <div class="c-trigger-line"></div>
    </div>

    <div class="c-trigger trigger-share">
      <i class="fa fa-share-alt" aria-hidden="true"></i>
    </div>

    <nav class="share-nav">
      <div class="share-nav-box">
        <p class="share-nav-maincatch">
          Share it now?
        </p>
        <ul class="share-nav-list">
          <li class="share-nav-listin">
            <a href="https://twitter.com/mainfloor_jp" class="share-nav-listin-link">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <!-- <li class="share-nav-listin">
            <a href="" class="share-nav-listin-link">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="share-nav-listin">
            <a href="" class="share-nav-listin-link">
              <i class="fa fa-instagram"></i>
            </a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>

  <?php if(is_home()):// トップページだった場合に ?>

    <?php get_template_part('component','topics');// topics.phpを読み込む ?>

  <?php endif; ?>


<?php wp_head(); ?>