<?php get_template_part('layout','header'); ?>

<div class="l-wrapper">
  <div class="l-container">
    <div class="l-row">
      <div class="l-grid-8">
        <?php get_template_part('layout','main'); ?>
      </div>
      <div class="l-grid-4">
        <?php get_template_part('layout','sub'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('layout','footer'); ?>
