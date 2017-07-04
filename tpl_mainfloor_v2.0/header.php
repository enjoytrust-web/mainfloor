<!-- ▼ write your contents ▼ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="robots" content="index,follow">
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
  <!-- Facebook -->
    <meta property="fb:admins" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
  <!-- Twitter -->
    <meta name="twitter:site" value="">
    <meta name="twitter:creator" value="">
    <meta name="twitter:card" value="">
  <!-- Google+ -->
    <link rel="author" href="">
</head>

<body>

  <header class="l-header">
    <h1 class="mainlogo">
      <a href="<?php echo home_url();?>/" class="mainlogo-sitename">
        MAINFLOOR
        <span class="mainlogo-catch">
          MUSIC PARTY LIFE MAGAZINE
        </span>
      </a>
    </h1>
    <nav class="g-nav">
      <ul class="g-nav-menu-list">
        <li class="g-nav-menu-listin">
          <a href="<?php echo home_url();?>/" class="g-nav-menu-listin-link">
            EVENT
          </a>
        </li>
        <li class="g-nav-menu-listin">
          <a href="<?php echo home_url();?>/" class="g-nav-menu-listin-link">
            CLUB TOPIC
          </a>
        </li>
        <li class="g-nav-menu-listin">
          <a href="<?php echo home_url();?>/" class="g-nav-menu-listin-link">
            DJ / ARTIST
          </a>
        </li>
        <li class="g-nav-menu-listin">
          <a href="<?php echo home_url();?>/" class="g-nav-menu-listin-link">
            SNAP
          </a>
        </li>
        <li class="g-nav-menu-listin">
          <a href="<?php echo home_url();?>/" class="g-nav-menu-listin-link">
            MUSIC
          </a>
        </li>
        <li class="g-nav-menu-listin">
          <ul class="g-nav-sns-list">
            <li class="g-nav-sns-listin">
              <a href="" class="g-nav-sns-listin-link">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="" class="g-nav-sns-listin-link">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="" class="g-nav-sns-listin-link">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="trigger-wrapper">
      <div class="trigger-line"></div>
      <div class="trigger-line"></div>
      <div class="trigger-line"></div>
    </div>
    <div class="share-trigger">
      <i class="fa fa-share-alt" aria-hidden="true"></i>
    </div>

    <nav class="share-nav">
      <div class="share-nav-box">
        <p class="share-nav-maincatch">
          Share it now?
        </p>
        <ul class="share-nav-list">
          <li class="share-nav-listin">
            <a href="" class="share-nav-listin-link">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="share-nav-listin">
            <a href="" class="share-nav-listin-link">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="share-nav-listin">
            <a href="" class="share-nav-listin-link">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <?php if(is_home()):?>
    <div class="l-wrapper top-content-topics">
      <div class="l-full">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="l-tile-grid-3">
            <a href="<?php the_permalink($post->ID);?>" class="top-post-info">
              <figure class="top-post-info-pics" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
              <figcaption class="top-post-info-wrapper">
                <p class="top-post-info-label"><?php ;?></p>
                <p class="top-post-info-header"><?php the_field('post_entry_header');?></p>
                <p class="top-post-info-more">MORE</p>
              </figcaption>
            </a>
          </div>
      <?php endwhile; else : ?>
      <?php endif; wp_reset_query();?>

      </div>
    </div>

  <?php endif; ?>


<?php wp_head(); ?>