<!-- Start include topics.php -->
<div class="c-topics-wrapper">
  <div class="l-full">
    <?php $args =
      array(
        'post_type' => 'post' ,
        'showposts' => 4 ,
        'cat' => -6,
      );
      $posts = get_posts( $args );
      if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); //記事がある場合
    ?>
    <div class="l-tile-grid-3">
      <a href="<?php the_permalink($post->ID);?>" class="c-topics">
        <figure class="c-topics-thumbnail" style="background-image: url('<?php the_field('post_entry_mainpics'); ?>')"></figure>
        <figcaption class="c-topics-info">
          <p class="c-topics-info-title"><?php the_field('post_entry_header');?></p>
          <p class="c-ghostbutton">MORE</p>
        </figcaption>
      </a>
    </div>
    <?php endforeach; else : ?>
    <?php endif; wp_reset_postdata();?>
  </div>
</div>
<!-- End topics.php -->