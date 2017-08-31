<!-- ==============================================================================
===================================================================================
- SubArea (Right Column)
===================================================================================
=============================================================================== -->
<div clasS="l-sub">
  <?php get_template_part('component','googleads'); ?>

  <div class="c-sub-content-wrapper">
    <h3 class="c-sub-content-header">RESCENT POST</h3>
    <div class="sub-content-inbox">
      <?php query_posts('posts_per_page=6'); ?>
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
    <?php if(have_rows('repeater_youtube_sidebar','option')): ?>
    <?php while(have_rows('repeater_youtube_sidebar','option')): the_row(); ?>
    <div class="single-post-youtube">
      <iframe width="853" height="480" src="//www.youtube.com/embed/<?php the_sub_field('sidebar_youtube'); ?>?playsinline=1&showinfo=0" frameborder="0" allowfullscreen class="single-post-youtube-player"></iframe>
    </div>
    <?php the_sub_field('sub_field_name'); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>