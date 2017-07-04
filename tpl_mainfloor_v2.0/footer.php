<div class="l-wrapper guest-info-wrap">
  <div class="l-container">
    <div class="l-row">
      <div class="l-grid-3">
        <a class="guest-info">
          <figure class="guest-info-pics">
          </figure>
          <p class="guest-info-guestname"></p>
          <p class="guest-info-text-lead"></p>
          <p class="guest-info-button">
        </a>
      </div>
      <div class="l-grid-3">
        <a class="guest-info">
          <figure class="guest-info-pics">
          </figure>
          <p class="guest-info-guestname"></p>
          <p class="guest-info-text-lead"></p>
          <p class="guest-info-button">
        </a>
      </div>
      <div class="l-grid-3">
        <a class="guest-info">
          <figure class="guest-info-pics">
          </figure>
          <p class="guest-info-guestname"></p>
          <p class="guest-info-text-lead"></p>
          <p class="guest-info-button">
        </a>
      </div>
      <div class="l-grid-3">
        <a class="guest-info">
          <figure class="guest-info-pics">
          </figure>
          <p class="guest-info-guestname"></p>
          <p class="guest-info-text-lead"></p>
          <p class="guest-info-button">
        </a>
      </div>
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