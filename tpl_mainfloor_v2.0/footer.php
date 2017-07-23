<div class="l-wrapper guest-info-wrap">
  <div class="l-container">
    <div class="l-row">
      <h3 class="section-header">
        RESCENT POSTS
      </h3>
      <?php query_posts("category_name=dj_artist&showposts=4"); ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('content','excerpt'); ?>
        <div class="l-grid-3 footer-rescent-artist">
          <a class="artist-info" href="<?php the_permalink($POST->ID);?>">
            <figure class="artist-info-pics" style="background-image:url('<?php the_field('post_content_artistphoto');?>');"></figure>
            <span class="artist-info-inwrap">
              <p class="artist-info-name"><?php the_field('post_content_artistname');?></p>
              <p class="artist-info-button">MORE</p>
            </span>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>

<footer class="l-footer">
  <h5 class="copyright">
    &copy;2017 MAINFLOOR.JP
  </h5>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url');?>/lib/js/app.js"></script>
<!-- TWITTER JS -->
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<!-- Instagram JS -->
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
<script>
  $(function(){
    $('.trigger-wrapper').click(function(){
      $('.share-trigger').removeClass('active');
      $('.share-nav').removeClass('active');
      $('.fa-share-alt').removeClass('active');
      $(this).toggleClass('active');
      $('.trigger-line').toggleClass('active');
      $('.g-nav').toggleClass('active');
    });
  });

  $(function(){
    $('.share-trigger').click(function(){
      $('.trigger-wrapper').removeClass('active');
      $('.trigger-line').removeClass('active');
      $('.g-nav').removeClass('active');
      $(this).toggleClass('active');
      $('.share-nav').toggleClass('active');
      $('.fa-share-alt').toggleClass('active');
    });
  });
</script>

</body>
</html>