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

            <?php elseif( get_row_layout() == 'flexiblefield_twitter' ) : ?>
              <?php the_sub_field('post_content_twitter'); ?>

            <?php elseif( get_row_layout() == 'flexiblefield_spotify' ) : ?>
              <div id="spotifyPlayer">
                <?php the_sub_field('post_content_spotify'); ?>
              </div>

            <?php elseif( get_row_layout() == 'flexiblefield_link' ) : ?>
              <a href="<?php the_sub_field('post_content_link_url'); ?>" target="_blank" class="single-post-text-link">
                <?php the_sub_field('post_content_link_text'); ?>
              </a>

            <?php elseif( get_row_layout() == 'flexiblefield_linkbutton' ) : ?>
              <a href="<?php the_sub_field('post_content_linkbutton_url'); ?>" target="_blank" class="single-post-text-linkbutton">
                <?php the_sub_field('post_content_linkbutton_text'); ?>
              </a>

          <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('post_info_flexiblefield') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>
          <div class="single-post-index-box">
            <?php while ( have_rows('post_info_flexiblefield') ) : the_row(); //値のループ ?>
            <?php if( get_row_layout() == 'flexiblefield_info_header' ): //レイアウト名1があった場合に出力 ?>
              <p class="single-post-text-label-medium"><?php the_sub_field('post_info_header'); //柔軟コンテンツ内は'the_sub_field'や'get_sub_field'を使用 ?></p>

              <?php elseif( get_row_layout() == 'flexiblefield_info_subheader' ): //レイアウト名2があった場合に出力 ?>
                <p class="single-post-text-label-small"><?php the_sub_field('post_info_subheader'); ?></p>

              <?php elseif( get_row_layout() == 'flexiblefield_info_text' ): //レイアウト名2があった場合に出力 ?>
                <p class="single-post-text-lead"><?php the_sub_field('post_info_text'); ?></p>

              <?php elseif( get_row_layout() == 'flexiblefield_info_notes' ):  ?>
                <p class="single-post-text-notes"><?php the_sub_field('post_info_notes');?></p>

              <?php elseif( get_row_layout() == 'flexiblefield_info_link' ):  ?>
                <a href="<?php the_sub_field('post_info_link_url');?>" class="single-post-basiclink" target="_blank" >
                  <?php the_sub_field('post_info_link_text');?>
                </a>

            <?php endif; ?>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <p class="single-post-writer-name">
          (TEXT BY <?php the_field('post_entry_writername'); ?>)
        </p>
        <?php
          get_template_part( 'content', get_post_format() );
          get_template_part( 'related_posts' );
          // Previous/next post navigation.
        ?>

      </div>
      <?php include('sidebar.php'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>