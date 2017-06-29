<?php get_header(); ?>

<!-- ▼ write your contents ▼ -->
<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">

      <div clasS="l-grid-8">
        <figure class="single-post-entry-pics">
          <img src="<?php the_field('post_entry_mainpics');?>">
        </figure>
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