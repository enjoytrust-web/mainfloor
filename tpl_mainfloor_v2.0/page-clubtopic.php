<?php get_header(); ?>
<!-- ▼ write your contents ▼ -->

<div class="breadcrumbs">
  <div class="l-container">
    <a href="<?php home_url();?>/index.php" class="breadcrumbs-link">HOME</a> <span class=""> &gt; </span> <a href="<?php home_url();?>/event/" class="breadcrumbs-link">CLUB TOPIC</a>
  </div>
</div>

<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">
      <div clasS="l-grid-8">
        <div class="l-row top-card-post-wrapper">
        <?php if (have_posts()) :
          $my_query = new WP_Query('post_type=post&category_name=clubtopic&showposts=8'.'&paged='.$paged); /* wp-pagenavi + queryposts連動させる */
          while ( $my_query->have_posts() ) : $my_query->the_post();
          $cat = get_the_category();
          $cat = $cat[0];
          $cat_name = $cat->cat_name;
        ?>
          <div class="l-grid-6 is-posts">
            <a href="<?php the_permalink($post->ID);?>" class="content-card">
              <figure class="content-card-thumbnail" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
              <div class="content-card-info-wrapper">
                <p class="content-card-info-category"><?php echo $cat_name; ?></p>
                <p class="content-card-info-heading"><?php the_field('post_entry_header'); ?></p>
                <p class="content-card-info-lead"><?php echo mb_substr((post_custom('post_entry_digest')),0,100).'...'; ?></p>
                <span class="content-card-info-more">MORE</span>
                <p class="content-card-info-date"><?php echo get_post_time('F d, Y'); ?></p>
              </div>
            </a>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div>
        <?php wp_pagenavi(array('query' => $my_query)); ?>

        <?php
          $args = array(
            'post_type' => 'promos-custom',
            'tax_query' => array(
              array(
              'taxonomy' => 'promos-custom_category',
              'field' => 'slug',
              'terms' => 'promos_area_top',
              ),
            ),
            'meta_value' => date('Y.m.d'),
            'meta_type' => 'DATE',
            'meta_key' => 'date_end',
            'meta_compare'  => '>=',
            'orderby'=> 'meta_value',
            'order' => 'ASC',
            'posts_per_page' => 1,
          );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合?>
          <div class="l-row is-promos">
            <div class="l-grid-12">
              <a href="<?php the_permalink($post->ID);?>" class="content-promos">
                <figure class="content-card-thumbnail promos-thumbnail" style="background-image: url('<?php the_field('promotion_pics'); ?>');"></figure>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
        <?php else : ?>
        <?php endif; wp_reset_postdata(); //クエリのリセット ?>
      </div>
      <?php include('sidebar.php'); ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>