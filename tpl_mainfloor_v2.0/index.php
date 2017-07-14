<?php get_header(); ?>

<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">

      <div clasS="l-grid-8">
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

        <div class="l-row top-card-post-wrapper">
        <?php $args = array(
          'post_type' => 'post' ,
          'showposts' => 6 ,
          'offset' => 4,
        );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合
        $cat = get_the_category();
        $cat = $cat[0];
        $cat_name = $cat->cat_name; ?>
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
          <?php endforeach; else : ?>
          <?php endif; wp_reset_postdata();?>

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
            <?php $args = array(
          'post_type' => 'post' ,
          'showposts' => 6 ,
          );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合 ?>
            <a href="<?php the_permalink($post->ID);?>" class="sub-content-inbox-postlist clearfix">
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
            <?php endforeach; else : ?>
            <?php endif; wp_reset_postdata();?>
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
        <?php
          $args = array(
            'post_type' => 'promos-custom',
            'tax_query' => array(
              array(
              'taxonomy' => 'promos-custom_category',
              'field' => 'slug',
              'terms' => 'promos_area_bottom',
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
                <p class="promos-watermark">PROMOTION.</p>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
        <?php else : ?>
        <?php endif; wp_reset_postdata(); //クエリのリセット ?>

        <div class="l-row top-card-post-wrapper">
        <?php $args = array(
          'post_type' => 'post',
          'showposts' => 6,
          'offset' => 10,
        );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合
        $cat = get_the_category();
        $cat = $cat[0];
        $cat_name = $cat->cat_name; ?>
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
          <?php endforeach; else : ?>
          <?php endif; wp_reset_postdata();?>

        </div>
        <div class="pagenavi">
        <?php global $wp_rewrite;
          $paginate_base = get_pagenum_link(1);
          if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
            $paginate_format = '';
            $paginate_base = add_query_arg('paged', '%#%');
          } else {
            $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
            user_trailingslashit('page/%#%/', 'paged');;
            $paginate_base .= '%_%';
          }
          echo paginate_links( array(
            'base' => $paginate_base,
            'format' => $paginate_format,
            'total' => $wp_query->max_num_pages,
            'mid_size' => 5,
            'current' => ($paged ? $paged : 1),
          ));
        ?>
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