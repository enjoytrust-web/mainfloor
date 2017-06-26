<?php get_header(); ?>

<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">

      <div clasS="l-grid-8">
        <?php
          $args = array(
          'post_type' => array('promotion-custom') ,
          'tax_query' => array(
            'taxonomy' => 'system-custom_category',
            'field' => 'slug',
            'terms' => array('promotion_top'),
          ),
          'showposts' => 1,
          'order' => 'ASC',
          'meta_key' => 'date_start',
          'meta_query' => array(
          'relation' => 'AND',
            array(
              'key' => 'date_start',
              'value' => date('Y.m.d'),
              'compare' => '<=',
              'type' => 'DATE'
            ),
            array(
              'key' => 'date_end',
              'value' => date('Y.m.d'),
              'compare' => '>=',
              'type' => 'DATE'
            )
          )
        );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合 ?>
        <div class="l-row is-promos">
          <div class="l-grid-12">
            <a href="<?php the_permalink($post->ID);?>" class="content-promos">
              <figure class="content-card-thumbnail promos-thumbnail"></figure>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
        <?php else : ?>
        <?php endif; wp_reset_postdata(); //クエリのリセット ?>
        <div class="l-row">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="l-grid-6 is-posts">
            <a href="<?php the_permalink($post->ID);?>" class="content-card">
              <figure class="content-card-thumbnail" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
              <div class="content-card-info-wrapper">
                <p class="content-card-info-category">CLUB TOPIC</p>
                <p class="content-card-info-heading"><?php echo mb_substr((post_custom('post_entry_header')),0,20); ?>...</p>
                <p class="content-card-info-lead"><?php echo mb_substr((post_custom('post_entry_digest')),0,50); ?>...</p>
                <span class="content-card-info-more">MORE</span>
                <p class="content-card-info-date"><?php echo get_post_time('F d, Y'); ?></p>
              </div>
            </a>
          </div>
          <?php endwhile; else : ?>
          <?php endif; wp_reset_query();?>

        </div>
      </div>
      <div clasS="l-grid-4">
        <div class="sub-content-box sub-content-advertisement">

          <p class="google-adsense">
            Ads by Google
          </p>
        </div>
        <div class="sub-content-box sub-content-rescent-posts">
          <h3 class="sub-content-header">MOST POPULAR</h3>
          <div class="sub-content-inbox">
            <?php query_posts('posts_per_page=6&offset=10'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="#" class="sub-content-inbox-postlist clearfix">
              <div class="sub-content-inbox-postlist-pics">
                <figure class="sub-content-inbox-postlist-thumb" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')">
                </figure>
              </div>
              <div class="sub-content-inbox-postlist-info-wrap">
                <p class="sub-content-inbox-postlist-info-text-header">
                  <?php echo mb_substr((post_custom('post_entry_header')),0,20); ?>...
                </p>
                <p class="sub-content-inbox-postlist-info-text-lead">
                  <?php echo mb_substr((post_custom('post_entry_digest')),0,50); ?>...
                </p>
                <p class="postlist-info-button">READ MORE</p>
              </div>
            </a>
            <?php endwhile; else : ?>
            <?php endif; wp_reset_query();?>
          </div>
        </div>
        <div class="sub-content-box sub-content-rescent-posts">
          <h3 class="sub-content-header">SNAP</h3>
        </div>
        <div class="sub-content-box sub-content-rescent-posts">
          <h3 class="sub-content-header">YouTube</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">

      <div clasS="l-grid-8">
        <div class="l-row is-promos">
          <div class="l-grid-12">
            <a href="<?php the_permalink($post->ID);?>" class="content-promos">
              <figure class="content-card-thumbnail promos-thumbnail" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
            </a>
          </div>
        </div>
        <div class="l-row">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="l-grid-6 is-posts">
            <a href="<?php the_permalink($post->ID);?>" class="content-card">
              <figure class="content-card-thumbnail" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
              <div class="content-card-info-wrapper">
                <p class="content-card-info-category">CLUB TOPIC</p>
                <p class="content-card-info-heading"><?php echo mb_substr((post_custom('post_entry_header')),0,20); ?>...</p>
                <p class="content-card-info-lead"><?php echo mb_substr((post_custom('post_entry_digest')),0,50); ?>...</p>
                <span class="content-card-info-more">MORE</span>
                <p class="content-card-info-date"><?php echo get_post_time('F d, Y'); ?></p>
              </div>
            </a>
          </div>
          <?php endwhile; else : ?>
          <?php endif; ?>

        </div>
      </div>
      <div clasS="l-grid-4">
        <div class="content-box">

        </div>
        <a href="<?php the_permalink($post->ID);?>"></a>
      </div>
    </div><!--.l-row-->
  </div><!--.l-container-->
</div><!--.l-wrapper-->


<?php get_footer(); ?>