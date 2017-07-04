<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->
<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">

      <div clasS="l-grid-8 single-post-wrapper">
        <figure class="single-post-mainpics" style="background-image:url('<?php the_field('post_entry_mainpics');?>');"></figure>
        <h2 class="single-post-header"><?php the_field('post_entry_header');?></h2>
        <p class="single-post-digest"><?php the_field('post_entry_digest');?></p>
        <p class="single-post-date">Post at <?php echo get_post_time('F.m.Y');?></p>

        <?php $indexbox = get_sub_field('post_content_index_parent'); ?>
        <?php if(!empty($indexbox)):?>
          <?php else : ?>
            <!-- 目次 -->
              <?php if( have_rows('flexiblefield_index') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>
                <div class="single-post-index-box">
                  <p class="single-post-index-box-header">目次</p>
                  <?php while ( have_rows('flexiblefield_index') ) : the_row(); //値のループ ?>
                    <?php if( get_row_layout() == 'flexiblefield_index_parent' ): //レイアウト名1があった場合に出力 ?>
                      <p class="single-post-index-parent"><?php the_sub_field('post_content_index_parent');?></p>

                    <?php elseif( get_row_layout() == 'flexiblefield_index_child' ): //レイアウト名2があった場合に出力 ?>
                      <p class="single-post-index-child">・<?php the_sub_field('post_content_index_child'); ?></p>

                  <?php endif; ?>
                <?php endwhile; ?>
              </div>
          <?php endif; ?>
        <?php endif; ?>

        <!-- flexible field -->
        <?php if( have_rows('post_entry_flexiblefield') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>
        <?php while ( have_rows('post_entry_flexiblefield') ) : the_row(); //値のループ ?>
          <?php if( get_row_layout() == 'flexiblefield_header' ): //レイアウト名1があった場合に出力 ?>
            <p class="single-post-text-label-large"><?php the_sub_field('post_content_header'); //柔軟コンテンツ内は'the_sub_field'や'get_sub_field'を使用 ?></p>

            <?php elseif( get_row_layout() == 'flexiblefield_subheader' ): //レイアウト名2があった場合に出力 ?>
              <p class="single-post-text-label-medium"><?php the_sub_field('post_content_subheader'); ?></p>

            <?php elseif( get_row_layout() == 'flexiblefield_smallheader' ): //レイアウト名2があった場合に出力 ?>
              <p class="single-post-text-label-small"><?php the_sub_field('post_content_smallheader'); ?></p>

            <?php elseif( get_row_layout() == 'flexiblefield_basictext' ): //レイアウト名2があった場合に出力 ?>
              <p class="single-post-text-lead"><?php the_sub_field('post_content_basictext'); ?></p>

            <?php elseif( get_row_layout() == 'flexiblefield_customtext' ):  ?>
              <?php the_sub_field('post_content_customtext'); ?>

            <?php elseif( get_row_layout() == 'flexiblefield_notes' ):  ?>
              <p class="single-post-text-notes"><?php the_sub_field('post_content_notes');?></p>

            <?php elseif( get_row_layout() == 'flexiblefield_pics_full' ): ?>
              <img class="single-post-pics" src="<?php the_sub_field('post_content_pics_full');?>">

            <?php elseif( get_row_layout() == 'flexiblefield_pics_harf' ): ?>
              <div class="l-full single-post-pics-harf-wrapper">
                <div class="l-tile-grid-6 single-post-pics-harf">
                  <img class="single-post-pics" src="<?php the_sub_field('post_content_pics_harf_a');?>">
                </div>
                <div class="l-tile-grid-6 single-post-pics-harf">
                  <img class="single-post-pics" src="<?php the_sub_field('post_content_pics_harf_b');?>">
                </div>
              </div>
            <?php elseif( get_row_layout() == 'flexiblefield_youtube' ) : ?>
              <p class="single-post-youtube-title"><?php the_sub_field('post_content_youtube_title'); ?></p>
              <div class="single-post-youtube">
                <iframe width="853" height="480" src="//www.youtube.com/embed/<?php the_sub_field('post_content_youtube_id'); ?>?playsinline=1&showinfo=0" frameborder="0" allowfullscreen class="single-post-youtube-player"></iframe>
              </div>
            <?php elseif( get_row_layout() == 'flexiblefield_instagram' ) : ?>
              <?php the_sub_field('post_content_instagram'); ?>




          <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
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

<?php get_footer(); ?>