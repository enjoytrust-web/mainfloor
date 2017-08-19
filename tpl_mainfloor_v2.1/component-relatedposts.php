<!--関連記事-->
  <h3 class="rltd_pst_header">RELATED POSTS</h3>
    <div class="l-row">
    <?php
      $categories = get_the_category($post->ID);
      $category_ID = array();
      foreach($categories as $category):
        array_push( $category_ID, $category -> cat_ID);
      endforeach ;
        $args = array(
          'post__not_in' => array($post -> ID),
          'posts_per_page'=> 5,
          'category__in' => $category_ID,
          'orderby' => 'rand',
        );
        $query = new WP_Query($args); ?>
          <?php if( $query -> have_posts() ): ?>
          <?php while ($query -> have_posts()) : $query -> the_post(); ?>

          <div class="l-grid-4 rltd-post">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="rltd-pst-link-thumb">
              <figure class="rltd-pst-thumb" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')">
              </figure>
            </a>
            <div class="related-posts-content">
              <h4>
                <a href="<?php the_permalink(); ?>" class="related-entry-title"><p><?php the_title(); ?></p></a>
              </h4>
                <a href="<?php the_permalink(); ?>" class="related-post-button">READ MORE</a>
              </div><!-- related_posts_content -->
            </div><!-- related_posts -->

          <?php endwhile;?>

          <?php else:?>
          <p>同カテゴリーの関連している記事はありません。</p>
          <?php
        endif;
        wp_reset_postdata();
    ?>
    </div>